<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotel Page</title>
	<link rel="stylesheet" href="stylehotel.css">
</head>
<body>
	<header>
		<nav>
			<div class="logo">
				<h1>My Hotel</h1>
			</div>
			<div class="menu">
				<ul>
					<li><a href="home.html">Home</a></li>
					<li><a href="hotel.php">Hotel </a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="newcontact.html">Contact</a></li>
				</ul>
			</div>
		</nav>
		<div class="hero">
			<h1>Welcome to My Hotel</h1>
			<p>Discover luxury and comfort in our rooms.</p>
			<div class="search">
				<form action="#">
					<input type="text" placeholder="Enter Destination">
					<input type="date">
					<input type="date">
					<button type="submit">Search</button>
				</form>
			</div>
		</div>
	</header>
	<main>
		<section class="rooms">
			<h2>Our Rooms</h2>
			<div class="room-container">
				<div class="room">
					<img src="room-1.jpg" alt="Room 1">
					<h3>Deluxe Room</h3>
					<p>Starting at Rs1000 per night</p>
				</div>
					<div class="room">
					<img src="room-2.jpg" alt="Room 2">
					<h3>Superior Room</h3>
					<p>Starting at Rs1300 per night</p>
				</div>
				<div class="room">
					<img src="room-3.jpg" alt="Room 3">
					<h3>Executive Room</h3>
					<p>Starting at Rs2000 per night</p>
				</div>
			</div>
		</section>
	</main>
	<footer>
		<p>My Hotel &copy; 2023</p>
	</footer>
</body>
</html>
