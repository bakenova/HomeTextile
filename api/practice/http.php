<?php

use HomeTextile\Web\Response;

require_once "./local/templates/prolog.php";
require_once "./local/source/init.php";

$response = new Response();

$requestMethod = $_SERVER['REQUEST_METHOD'];

$data = [
	"REQUEST_METHOD" => $requestMethod,
];

// Print all headers
foreach ($_SERVER as $key => $value)
{
	if (str_starts_with($key, 'HTTP_'))
	{
		$headerName = str_replace('HTTP_', '', $key);
		$headerName = str_replace('_', ' ', $headerName);
		$headerName = ucwords(strtolower($headerName));
		$data['HEADERS'][$headerName] = $value;
	}
}

// Print request data
switch ($requestMethod)
{
	case "GET":
	{
		$data["GET"] = safeData($_GET);
		break;
	}

	case "POST":
	{
		$data["GET"] = safeData($_GET);
		$data["POST"] = safeData($_POST);
		break;
	}

	case "PUT":
	{
		$putData = [];
		parse_str(file_get_contents('php://input'), $putData);
		$data["PUT"] = safeData($putData);
		break;
	}

	case "DELETE":
	{
		$data["DELETE"] = safeData($_REQUEST);
		break;
	}
}

$response->setData($data);

$response->printJson();
exit();