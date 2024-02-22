<?php

use HomeTextile\Controllers\UserController;
use HomeTextile\Models\User;
use HomeTextile\Web\Response;

require_once "../local/templates/prolog.php";
require_once "../local/source/init.php";

$login = $_POST['login'] ?? "";
$password = $_POST['password'] ?? "";
$passwordConfirm = $_POST['passwordConfirm'] ?? "";
$email = $_POST['email'] ?? "";
$phoneNumber = $_POST['phoneNumber'] ?? "";
$name = $_POST['name'] ?? "";

$response = new Response();

if (empty($login) || empty($password)) {
    $response->addError("Login or password is empty!");
}
if (empty($passwordConfirm) || $password != $passwordConfirm) {
    $response->addError("Invalid confirm password!");
}

if ($response->isSuccess()) {
    // Create a User object with additional fields
    $user = new User(0, $login, $password, $email, $phoneNumber, $name);

    // Use UserController to add the user
    $result = UserController::addUser($user);

    if ($result) {
        $_SESSION['AUTH'] = true;
    } else {
        $response->addError("Failed to add user.");
    }
}

$response->printJson();
exit();



//
// <?php

// use HomeTextile\Controllers\UserController;
// use HomeTextile\Models\User;
// use HomeTextile\Web\Response;

// require_once "../local/templates/prolog.php";
// require_once "../local/source/init.php";

// $login = $_POST['login'] ?? "";
// $password = $_POST['password'] ?? "";
// $passwordConfirm = $_POST['passwordConfirm'] ?? "";

// $response = new Response();

// if (empty($login) || empty($password))
// {
// 	$response->addError("Login or password is empty!");
// }
// if (empty($passwordConfirm) || $password != $passwordConfirm)
// {
// 	$response->addError("Invalid confirm password!");
// }

// if ($response->isSuccess())
// {
// 	$user = new User(0, $login, $password);
// 	$result = UserController::addUser($user);
// 	if ($result)
// 	{
// 		$_SESSION['AUTH'] = true;
// 	}
// 	else
// 	{
// 		$response->addError("Failed to add user.");
// 	}
// }

// $response->printJson();
// exit();
//