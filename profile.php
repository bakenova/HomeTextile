<?php
require_once "./local/templates/prolog.php";
require_once "./local/source/init.php";
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
		<h2 class="user-title">Hello there, User0987!</h2>

		<div class="form-container-general">
			<div class="user-form">
				<div class="form-container-user-info">
					<div class="form-container-one">
						<div class="form-group">
							<label for="name">Name</label>
							<input type="text" id="profileName" placeholder="Enter your name">
						</div>
						<div class="form-group">
							<label for="phoneNumber">Phone Number</label>
							<input type="text" id="profilePhoneNumber" placeholder="Enter your phone number">
						</div>
					</div>
					<div class="form-container-two">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="email" id="profileEmail" placeholder="Enter your email">
						</div>
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" id="profileUsername" placeholder="Enter your username">
						</div>
					</div>
				</div>

				<div class="form-address">
					<label for="address">Address</label>
					<input type="text" id="address" placeholder="Enter your address">
				</div>
			</div>

			<button class="save-button" onclick="saveUser()">Save</button>
		</div>
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