<?php
require_once "./local/source/init.php"
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>About Us</title>
	<link rel="stylesheet" href="<?= SITE_DIR ?>/local/assets/css/style.css">
	<link rel="stylesheet" href="local/assets/css/about.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link rel="icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

<?php
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/header.php";
?>

<main>
	<section class="about-section">
		<div class="text-container">
			<h2 class="store-title">Home Textile Store</h2>
			<p class="store-welcome">Welcome to <span class="red-text">Home Textile Store</span> – Your Haven of
				Comfort and Style!</p>

			<div class="store-info">
				<p class="red-text">Our Story</p>
				<p>Established in 2003, Home Textile Store was born out of a shared love for quality textiles and a
					desire to bring the finest home essentials to your doorstep. With years of experience in the
					industry, we curate a collection that reflects the latest trends, superior craftsmanship, and a
					commitment to your satisfaction.</p>
			</div>

			<div class="store-info">
				<p class="red-text">Quality That Speaks Comfort</p>
				<p>We understand the importance of creating a home that resonates with your personality. That's why
					each piece in our collection is carefully selected, ensuring it not only meets our high
					standards for quality but also brings a touch of luxury to your daily life.</p>
			</div>
		</div>

		<img src="images/store.png" alt="Store Image" class="store-image"/>
	</section>

	<section class="team-section">
		<img src="images/team.png" alt="Team Image" class="team-image"/>

		<div class="text-container">
			<div class="store-info">
				<p class="red-text">Our Team</p>
				<p>At Home Textile Store, we are more than just a store; we are a team of dedicated individuals
					passionate about bringing comfort and style to your home. Our team is united by a shared
					commitment to providing you with the best in home textiles and exceptional customer service.</p>
			</div>

			<div class="store-info">
				<p class="red-text">Join Our Home Textile Family</p>
				<div class="additional-text">
					<p>We invite you to explore our collection and discover the transformative power of quality home
						textiles. Whether you're furnishing a new home or looking to refresh your living space, our
						store is your trusted partner in creating a home that feels uniquely yours.</p>

					<p>Thank you for being a part of our home textile family.</p>

					<p>Warm regards,<br><span class="red-text-p">Home Textile Store.</span></p>
				</div>
			</div>
		</div>
	</section>

	<section class="location-section">
		<div class="location-title">
			<h2>Our Location</h2>
		</div>
		<div class="location-content">
			<div class="location-info">
				<p>Conveniently located in the heart of
					<span class="red-text-p">Havenbrook
                        </span>, our address at
					<span class="red-text-p">123 Tranquil Lane
                        </span> is a gateway to a world of sophistication and comfort.
					With extended shopping hours and exclusive events, DreamWeave Home Textiles is not just a store;
					it's an experience. Our welcoming atmosphere invites you to explore a curated selection of quality
					home textiles, from cozy bedding to elegant decor pieces, creating a haven that reflects your unique
					style. Immerse yourself in the latest trends and discover the transformative power of our carefully
					chosen collection. Whether you're furnishing a new home or looking to refresh your living space, our
					store is your trusted partner in creating a home that feels uniquely yours.
				</p>
			</div>

			<div class="location-image">
				<img src="images/location.png" alt="Location Image" class="location-imagee"/>
			</div>

		</div>
	</section>
</main>

<?php
include $_SERVER['DOCUMENT_ROOT'].SITE_DIR."/local/templates/footer.php";
?>

<script src="<?= SITE_DIR ?>/local/assets/js/script.js"></script>
</body>

</html>