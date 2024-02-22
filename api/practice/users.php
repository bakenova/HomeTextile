<?php

use HomeTextile\Web\Response;

require_once "./local/templates/prolog.php";
require_once "./local/source/init.php";

$response = new Response();

$data = [];

$id = $_GET['ID'] ?? 0;
if (empty($id))
{
	$response->addError("Parameter ID is empty.");
	$response->setStatus(400);
}

if ($response->isSuccess())
{
	$users = file_get_contents(__DIR__.'/users.json');
	$users = json_decode($users, true);

	foreach ($users as $user)
	{
		if ($id == $user['ID'])
		{
			$data['USER'] = $user;
			break;
		}
	}

	if (isset($data['USER']))
	{
		$response->setData($data);
	}
	else
	{
		$response->addError("User not found.");
		$response->setStatus(404);
	}
}

$response->printJson();
exit();