<?php
require_once "../../local/templates/prolog.php";
require_once "../../local/source/init.php";

use HomeTextile\Controllers\UserController;
use HomeTextile\Web\Response;

$login = $_POST['login'] ?? "";
$name = $_POST['name'] ?? "";
$email = $_POST['email'] ?? "";
$phoneNumber = $_POST['phoneNumber'] ?? "";
$address = $_POST['address'] ?? "";

$response = new Response();

if ($_SESSION['AUTH'] !== true || !isset($_SESSION['USER']['ID']))
{
	$response->addError("Invalid Auth!");
}

if (empty($login))
{
	$response->addError("Login is empty!");
}

if ($response->isSuccess())
{
	$user = UserController::getUserById($_SESSION['USER']['ID']);
	$user->setLogin($login);
	$user->setName($name);
	$user->setEmail($email);
	$user->setPhoneNumber($phoneNumber);
	$user->setAddress($address);

	$result = UserController::updateUser($user);
	if (!$result)
	{
		$response->addError("Update error!");
	}
}

$response->printJson();
exit();