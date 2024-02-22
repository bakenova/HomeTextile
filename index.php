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
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/modal-auth.php";
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/modal-register.php";
?>

<!-- Background Overlay -->
<div class="overlay" id="overlay"></div>

<!-- Welcome Section  -->
<div class="button-container">
	<button class="left-button">&lt;</button>
	<div class="welcome-section">
		<img src="<?= SITE_DIR ?>/local/assets/images/image2.jpg" alt="Welcome Image">
		<div class="overlay">
			<p class="welcome-text">Welcome to Our Home Textile Store</p>
			<p class="sub-text">Discover the comfort and style for your home with our premium textiles</p>
		</div>
	</div>
	<button class="right-button">&gt;</button>
</div>

<!-- Purchase Steps Section -->
<div class="purchase-steps">
	<h2>Steps to make a purchase:</h2>
	<div class="step-container">
		<div class="step-block">
			<img src="<?= SITE_DIR ?>/local/assets/images/step1.png" alt="Step 1">
			<p>Step 1: Sign In</p>
		</div>

		<div class="step-block">
			<img src="<?= SITE_DIR ?>/local/assets/images/step2.png" alt="Step 2">
			<p>Step 2: Select Items</p>
		</div>

		<div class="step-block">
			<img src="<?= SITE_DIR ?>/local/assets/images/step3.png" alt="Step 3">
			<p>Step 3: Payment</p>
		</div>

		<div class="step-block">
			<img src="<?= SITE_DIR ?>/local/assets/images/step4.png" alt="Step 4">
			<p>Step 4: Delivery</p>
		</div>

	</div>
</div>

<!-- Menu -->
<div class="quality-section">
	<h2>Quality home textiles:</h2>

	<div class="textile-blocks">
		<a href="<?= SITE_DIR ?>/catalog.php" class="textile-block-1">
			<img src="<?= SITE_DIR ?>/local/assets/images/menu1.png" alt="Textile 1">
			<p>Bedding</p>
		</a>

		<a href="<?= SITE_DIR ?>/catalog.php" class="textile-block-2">
			<img src="<?= SITE_DIR ?>/local/assets/images/menu2.png" alt="Textile 2">
			<p>Towels</p>
		</a>

		<a href="<?= SITE_DIR ?>/catalog.php" class="textile-block-3">
			<img src="<?= SITE_DIR ?>/local/assets/images/menu3.png" alt="Textile 3">
			<p>Bedcover</p>
		</a>
	</div>

	<div class="textile-blocks">
		<a href="<?= SITE_DIR ?>/catalog.php" class="textile-block-3">
			<img src="<?= SITE_DIR ?>/local/assets/images/menu4.png" alt="Textile 4">
			<p>Robe</p>
		</a>

		<a href="<?= SITE_DIR ?>/catalog.php" class="textile-block-1">
			<img src="<?= SITE_DIR ?>/local/assets/images/menu5.png" alt="Textile 5">
			<p>Tablecloths</p>
		</a>

		<a href="<?= SITE_DIR ?>/catalog.php" class="textile-block-2">
			<img src="<?= SITE_DIR ?>/local/assets/images/menu6.png" alt="Textile 6">
			<p>Others</p>
		</a>
	</div>
</div>

<!-- Missed Section -->
<div class="missed-section">
	<h2>In Case You Missed it!</h2>
	<div class="missed-block">
		<img src="<?= SITE_DIR ?>/local/assets/images/missed.png" alt="Missed Image">
		<div class="missed-texts">
			<p class="bold-text">Indulge in the ultimate home upgrade <span class="yellow-text">this February</span>
				with our <span class="yellow-text">exclusive sale</span>!</p>
			<p class="italic-text">Elevate every corner with irresistible discounts on our entire product range,
				ensuring a stylish and comfortable haven for you and your loved ones.</p>
		</div>
	</div>
</div>

<?php
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/footer.php";
?>

</body>

</html>
<?php
require_once "./local/templates/epilog.php";
?>

<!-- http://localhost:8000/phpmyadmin/index.php?route=/sql&db=home_textile&table=users&pos=0 -->