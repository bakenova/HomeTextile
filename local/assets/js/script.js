// Define these variables at the beginning of your script so they are accessible globally
var defaultHeader = document.getElementById('defaultHeader');
var profileHeader = document.getElementById('profileHeader');

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

function authorizeUser() {
    closeSignInModal();
    defaultHeader.style.display = 'none';
    profileHeader.style.display = 'block';
}

function registerUser() {
    
}
