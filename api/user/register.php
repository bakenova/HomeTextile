<?php
require_once "../../local/templates/prolog.php";
require_once "../../local/source/init.php";

use HomeTextile\Controllers\UserController;
use HomeTextile\Models\User;
use HomeTextile\Web\Response;

$login = $_POST['login'] ?? "";
$password = $_POST['password'] ?? "";
$passwordConfirm = $_POST['passwordConfirm'] ?? "";
$email = $_POST['email'] ?? "";
$phoneNumber = $_POST['phoneNumber'] ?? "";
$name = $_POST['name'] ?? "";

$response = new Response();

if (empty($login) || empty($password))
{
	$response->addError("Login or password is empty!");
}
if (empty($passwordConfirm) || $password != $passwordConfirm)
{
	$response->addError("Invalid confirm password!");
}

if ($response->isSuccess())
{
	// Create a User object with additional fields
	$user = new User();
	$user->setLogin($login);
	$user->setPassword($password);
	$user->setEmail($email);
	$user->setPhoneNumber($phoneNumber);
	$user->setName($name);

	// Use UserController to add the user
	$result = UserController::addUser($user);

	if ($result)
	{
		$user = UserController::getUserByLogin($login);

		$_SESSION['AUTH'] = true;
		$_SESSION['USER'] = [
			'ID' => $user->getId(),
			'LOGIN' => $user->getLogin(),
		];
	}
	else
	{
		$response->addError("Failed to add user.");
	}
}

$response->printJson();
exit();