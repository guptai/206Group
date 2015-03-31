<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Home</title>
		<link href="default.css" rel="stylesheet">
		<link href="mediaquery.css" rel="stylesheet">
		<link href="sharedstyle.css" rel="stylesheet">
	</head>
	<body>
		<?php
			// echo "hello!";
			include("header.php");
		?>

		<h1> Restaurants</h1> 
		
		<h3> Best Late night food </h3>
		<p> Fleetwood diner, pizza house, hunter house, Ama's Bistro
		</p>

		<h3> Where do you go for fine dining?</h3>
		<p> Aventura, Gratzi, Grizzly Peak, Cafe Zola, Vinology 
		</p>

		<div class="post">
			<div class="post_title"><h3>Food you have to try before you graduate</h3></div>
				<div class="item">
				<figure> 
					<img src="angelos.jpg">
					<figcaption>Address, Ann Arbor MI</figcaption>
				</figure> 	
					<h4>Angelo's Brunch</h4>
					<p> If you haven't crawled out of bed on a Sunday morning to eat at Angelo's, then do you even go to this school? Try their classic breakfast items or their specials. The Huevos Rancheros are a personal favorite. Be prepared to wait for a table but don't worry its worth it.</p></div>
				<div class="item">
				<figure> 
					<img src="isalita.jpg">
					<figcaption>Address, Ann Arbor MI</figcaption>
				</figure> 
					<h4>Guac and Margarita's at Isalita</h4>
					<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, non, quos voluptas vel earum unde laboriosam qui optio asperiores nesciunt sed voluptatibus quae harum nisi iure sapiente numquam quo minus.	</p></div>
				<div class="item">
				<figure> 
					<img src="jolly.jpg">
					<figcaption>Address, Ann Arbor MI</figcaption>
				</figure> 
					<h4>Truffle Pizza at Jolly Pumpkin</h4>
					<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, non, quos voluptas vel earum unde laboriosam qui optio asperiores nesciunt sed voluptatibus quae harum nisi iure sapiente numquam quo minus.	</p></div>
				<div class="item">
				<figure> 
					<img src="dairy.jpg">
					<figcaption>Address, Ann Arbor MI</figcaption>
				</figure> 
					<h4>Washtenaw Dairy Ice Cream</h4>
					<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, non, quos voluptas vel earum unde laboriosam qui optio asperiores nesciunt sed voluptatibus quae harum nisi iure sapiente numquam quo minus.	</p></div>
				<div class="item">
				<figure> 
					<img src="gardens.jpg">
					<figcaption>Address, Ann Arbor MI</figcaption>
				</figure> 
					<h4>Falafel at Jeruselam Gardens</h4>
					<p>	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur, non, quos voluptas vel earum unde laboriosam qui optio asperiores nesciunt sed voluptatibus quae harum nisi iure sapiente numquam quo minus.	</p></div>
		</div> 	
		<?php
			include("footer.php");
		?>
	</body> 
</html>
