<?php
$isAuthorized = isset($_SESSION['AUTH']) && $_SESSION['AUTH'] === true;
if (!$isAuthorized)
{
	?>
	<header id="defaultHeader">
		<nav>
			<ul>
				<li>
					<a href="<?= SITE_DIR ?>/index.php">Home</a>
				</li>
				<li>
					<a href="<?= SITE_DIR ?>/products.php">Products</a>
				</li>
				<li class="logo">
					<a href="<?= SITE_DIR ?>/index.php">
						<img src="<?= SITE_DIR ?>/local/assets/images/logo.png" alt="Logo" width="80" height="80"></a>
				</li>
				<li>
					<a href="<?= SITE_DIR ?>/about-us.php">About Us</a>
				</li>
				<li>
					<a href="#" onclick="openSignInModal()">Sign In</a>
				</li>
			</ul>
		</nav>
	</header>
	<?php
}
else
{
	?>
	<!-- Profile header -->
	<header id="profileHeader">
		<nav>
			<ul>
				<li class="logo">
					<a href="<?= SITE_DIR ?>/index.php">
						<img src="<?= SITE_DIR ?>/local/assets/images/logo.png" alt="Logo" width="80"
							 height="80"></a>
				</li>
				<li>
					<a href="<?= SITE_DIR ?>/index.php">Home</a>
				</li>
				<li>
					<a href="<?= SITE_DIR ?>/products.php">Products</a>
				</li>
				<li>
					<a href="<?= SITE_DIR ?>/about-us.php">About Us</a>
				</li>
				<li class="cart">
					<a href="<?= SITE_DIR ?>/cart.php">
						<img src="<?= SITE_DIR ?>/local/assets/images/cart.png" alt="Cart" width="40"
							 height="40"></a>
				</li>
				<li class="person">
					<a href="<?= SITE_DIR ?>/profile.php">
						<img src="<?= SITE_DIR ?>/local/assets/images/personFilled.png" alt="Person"
							 width="40"
							 height="40"></a>
				</li>
			</ul>
		</nav>
	</header>
	<?php
}