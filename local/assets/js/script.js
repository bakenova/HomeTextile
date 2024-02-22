const siteDir = "/HomeTextile";

function openSignInModal() {
	event.preventDefault();
	document.getElementById('authorizationBox').style.display = 'block';
	document.getElementById('overlay').style.display = 'block';
	return false;
}

function closeSignInModal() {
	event.preventDefault();
	document.getElementById('authorizationBox').style.display = 'none';
	document.getElementById('overlay').style.display = 'none';
	return false;
}

function toggleRegistrationBox() {
	event.preventDefault();

	var registrationBox = document.getElementById('registrationBox');
	var authorizationBox = document.getElementById('authorizationBox');

	// Toggle visibility
	registrationBox.style.display = 'block';
	authorizationBox.style.display = 'none';

	return false;
}

function toggleAuthorizationBox() {
	event.preventDefault();
	
	var registrationBox = document.getElementById('registrationBox');
	var authorizationBox = document.getElementById('authorizationBox');

	// Toggle visibility
	registrationBox.style.display = 'none';
	authorizationBox.style.display = 'block';

	return false;
}

function closeRegistrationBox() {
	var registrationBox = document.getElementById('registrationBox');

	// Close the registration box
	registrationBox.style.display = 'none';
	document.getElementById('overlay').style.display = 'none';
}

function authorizeUser() {
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

	const url = siteDir + '/api/auth.php';
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
				closeSignInModal();
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

function registerUser() {
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

	const url = siteDir + '/api/register.php';
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
				closeSignInModal();
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
