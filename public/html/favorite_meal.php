<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>The Real Ramen</title>
	</head>
		<body>
				<header>
					<h1>Hakata Ramen</h1>
				</header>
				<main>
					<h2>Ingredients</h2>
					<p><img src="http://i190.photobucket.com/albums/z306/burumun/SouthBay/Hakata/ramen.jpg" width="300px"></p>
					<ol>
						<li>Egg</li>
						<li>Kimchi</li>
						<li>Hakata Noodles</li>
						<li>Chopped Scallions</li>
						<li>Spicy Miso</li>
					</ol>
					<h3>Please submit your favorite meal below</h3>
					<form method="POST" action="/favorite_meal.php">
						<p>
							<label for="suggestion"></label>
						</p>
						<p>
							<input id="suggestion" name="suggestion" type="text" placeholder="Enter your meal here">
							<input type="submit" value="Send">
						</p>
							<?php
							var_dump($_POST);
							?>
				</main>
		</body>
	<aside>
		<h3>Other foods you may like</h3>
		<ul>
			<li><a href="#" title="Shabu Shabu Info">Shabu Shabu</a></li>
			<li><a href="#" title="About Udon Noodles">Udon</a></li>
			<li><a href="#" title="How Yakitori Is Made">Yakitori</a></li>
		</ul>
	</aside>
</html>