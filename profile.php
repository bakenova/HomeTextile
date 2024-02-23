<?php
require_once "./local/templates/prolog.php";
require_once "./local/source/init.php";

use HomeTextile\Controllers\UserController;

if (!$_SESSION['AUTH'] || !isset($_SESSION['USER']['ID']))
{
	header('Location: '.SITE_DIR.'/');
}

$user = UserController::getUserById($_SESSION['USER']['ID']);
?>
<!DOCTYPE html>
<html lang="en">

<?php
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/head.php";
?>

<body>

<?php
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/header.php";
?>

<main>
	<section class="user-info">
		<h2 class="user-title">Hello there, <?= $user->getLogin() ?>!</h2>

		<form class="form-container-general">
			<div class="user-form">
				<div class="form-container-user-info">
					<div class="form-container-one">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" id="profileName" placeholder="Enter your name" value="<?= $user->getName() ?>">
						</div>
						<div class="form-group">
							<label for="phoneNumber">Phone Number</label>
							<input type="text" id="profilePhoneNumber" placeholder="Enter your phone number" value="<?= $user->getPhoneNumber() ?>">
						</div>
					</div>
					<div class="form-container-two">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="profileEmail" placeholder="Enter your email" value="<?= $user->getEmail() ?>">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" id="profileUsername" placeholder="Enter your username" value="<?= $user->getLogin() ?>">
						</div>
					</div>
				</div>

				<div class="form-address">
					<label for="address">Address</label>
					<textarea id="address" placeholder="Enter your address"><?= $user->getAddress() ?></textarea>
				</div>
			</div>

			<button type="submit" class="save-button" onclick="UpdateUser()">Save</button>
		</form>
	</section>

	<section class="order-history">
		<h2 class="order-title">Order history</h2>

	</section>

</main>


<?php
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/footer.php";
?>

</body>

</html>
<?php
require_once "./local/templates/epilog.php";
?>