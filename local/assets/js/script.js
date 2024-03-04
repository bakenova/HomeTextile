const siteDir = "/HomeTextile";

function OpenSignInModal() {
	event.preventDefault();
	document.getElementById('authorizationBox').style.display = 'block';
	document.getElementById('overlay').style.display = 'block';
	return false;
}

function CloseSignInModal() {
	event.preventDefault();
	document.getElementById('authorizationBox').style.display = 'none';
	document.getElementById('overlay').style.display = 'none';
	return false;
}

function ToggleRegistrationBox() {
	event.preventDefault();

	var registrationBox = document.getElementById('registrationBox');
	var authorizationBox = document.getElementById('authorizationBox');

	// Toggle visibility
	registrationBox.style.display = 'block';
	authorizationBox.style.display = 'none';

	return false;
}

function ToggleAuthorizationBox() {
	event.preventDefault();

	var registrationBox = document.getElementById('registrationBox');
	var authorizationBox = document.getElementById('authorizationBox');

	// Toggle visibility
	registrationBox.style.display = 'none';
	authorizationBox.style.display = 'block';

	return false;
}

function CloseRegistrationBox() {
	var registrationBox = document.getElementById('registrationBox');

	// Close the registration box
	registrationBox.style.display = 'none';
	document.getElementById('overlay').style.display = 'none';
}

function ToggleLike() {
    // Get the like image element
    var likeImage = document.getElementById("likeImage");

    // Check if the element is found
    if (likeImage !== null) {
        // Toggle between empty and filled heart images
        if (likeImage.src.indexOf("heart-empty.png") !== -1) {
            likeImage.src = "<?= SITE_DIR ?>/local/assets/images/heart-filled.png"; 
        } else {
            likeImage.src = "<?= SITE_DIR ?>/local/assets/images/heart-empty.png"; 
        }
    } else {
        console.error("Element with id 'likeImage' not found.");
    }
}

function AuthorizeUser() {
	event.preventDefault();

	const data = {
		login: document.getElementById("signInUsername").value,
		password: document.getElementById("signInPassword").value
	};

	const formData = new URLSearchParams();
	for (const key in data) {
		formData.append(key, data[key]);
	}

	const requestOptions = {
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: formData
	};

	const url = siteDir + '/api/user/auth.php';
	fetch(url, requestOptions)
		.then(response => {
			if (!response.ok) {
				throw new Error('Network response was not ok');
			}
			return response.json();
		})
		.then(data => {
			if (data.hasOwnProperty("isSuccess") && data.isSuccess) {
				window.location.href = siteDir + "/profile.php";
				CloseSignInModal();
			}
			else {
				Swal.fire({
					"icon": "error",
					"title": "Error!",
					"text": data.errors.join("\n")
				});
			}
		})
		.catch(error => {
			console.error('There was a problem with the fetch operation:', error);
		});

	return false;
}

function RegisterUser() {
	event.preventDefault();

	const data = {
		login: document.getElementById("signUpUsername").value,
		password: document.getElementById("signUpPassword").value,
		passwordConfirm: document.getElementById("repeatPassword").value,
		email: document.getElementById("email").value,
		phoneNumber: document.getElementById("phoneNumber").value,
		name: document.getElementById("name").value
	};

	const formData = new URLSearchParams();
	for (const key in data) {
		formData.append(key, data[key]);
	}

	const requestOptions = {
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: formData
	};

	const url = siteDir + '/api/user/register.php';
	fetch(url, requestOptions)
		.then(response => {
			if (!response.ok) {
				throw new Error('Network response was not ok');
			}
			return response.json();
		})
		.then(data => {
			if (data.hasOwnProperty("isSuccess") && data.isSuccess) {
				window.location.href = siteDir + "/profile.php";
				CloseSignInModal();
			}
			else {
				Swal.fire({
					"icon": "error",
					"title": "Error!",
					"text": data.errors.join("\n")
				});
			}
		})
		.catch(error => {
			console.error('There was a problem with the fetch operation:', error);
		});

	return false;
}

function UpdateUser() {
	event.preventDefault();

	const data = {
		login: document.getElementById("profileUsername").value,
		name: document.getElementById("profileName").value,
		email: document.getElementById("profileEmail").value,
		phoneNumber: document.getElementById("profilePhoneNumber").value,
		address: document.getElementById("address").value,
	};

	const formData = new URLSearchParams();
	for (const key in data) {
		formData.append(key, data[key]);
	}

	const requestOptions = {
		method: 'POST',
		headers: {
			'Content-Type': 'application/x-www-form-urlencoded'
		},
		body: formData
	};

	const url = siteDir + '/api/user/update.php';
	fetch(url, requestOptions)
		.then(response => {
			if (!response.ok) {
				throw new Error('Network response was not ok');
			}
			return response.json();
		})
		.then(data => {
			if (data.hasOwnProperty("isSuccess") && data.isSuccess) {
				Swal.fire({
					icon: "success",
					title: "Successful!",
					text: "User updated!"
				});
			}
			else {
				Swal.fire({
					"icon": "error",
					"title": "Error!",
					"text": data.errors.join("\n")
				});
			}
		})
		.catch(error => {
			console.error('There was a problem with the fetch operation:', error);
		});

	return false;
}