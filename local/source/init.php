<?php
include "functions.php";
include "classes.php";
include "constants.php";

$logout = $_GET['logout'] ?? "";
if ($logout == 'Y')
{
	unset(
		$_SESSION['AUTH'],
		$_SESSION['USER']
	);
	header('Location: '.SITE_DIR.'/');
	exit;
}