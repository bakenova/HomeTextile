function openSignInModal() {
    document.getElementById('authorizationBox').style.display = 'block';
    document.getElementById('overlay').style.display = 'block';
}

function closeSignInModal() {
    document.getElementById('authorizationBox').style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

function toggleRegistrationBox() {
    var registrationBox = document.getElementById('registrationBox');
    var authorizationBox = document.getElementById('authorizationBox');

    // Toggle visibility
    registrationBox.style.display = 'block';
    authorizationBox.style.display = 'none';
}

function toggleAuthorizationBox() {
    var registrationBox = document.getElementById('registrationBox');
    var authorizationBox = document.getElementById('authorizationBox');

    // Toggle visibility
    registrationBox.style.display = 'none';
    authorizationBox.style.display = 'block';
}

function closeRegistrationBox() {
    var registrationBox = document.getElementById('registrationBox');

    // Close the registration box
    registrationBox.style.display = 'none';
    document.getElementById('overlay').style.display = 'none';
}

function registerUser() {
    // Add your registration logic here
    // You can retrieve values from the input fields and perform the registration process
    // For example, you can use document.getElementById('name').value to get the value of the name input field
}
