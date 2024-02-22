<?php

use HomeTextile\Controllers\UserController;
use HomeTextile\Models\User;
use HomeTextile\Web\Response;

require_once "../local/templates/prolog.php";
require_once "../local/source/init.php";

$login = $_POST['login'] ?? "";
$password = $_POST['password'] ?? "";

$response = new Response();

if (empty($login) || empty($password))
{
	$response->addError("Login or password is empty!");
}

if ($response->isSuccess())
{
	$result = UserController::authenticate($login, $password);
	if ($result instanceof User)
	{
		$_SESSION['AUTH'] = true;
	}
	else
	{
		$response->addError("Failed to auth user.");
	}
}

$response->printJson();
exit();