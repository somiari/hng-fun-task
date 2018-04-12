<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Somiari Lucky | Learner, Developer, Builder</title>
	<link rel="stylesheet" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto+Condensed" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>
</head>

<body>
	<div class="container">
		<section class="title">
			<h1 class="name">Somiari Lucky</h1>
			<p class="labels">UI/UX. Front-end. Content Development.</p>
		</section>
		<section class="socials">
			<a href="https://www.github.com/somiari" class="fa-icon" target="_blank"><i class="fab fa-fw fa-github-alt"></i></a>
			<a href="https://www.twitter.com/somiarilucky" class="fa-icon" target="_blank"><i class="fab fa-fw fa-twitter"></i></a>
			<a href="https://www.facebook.com/somiarilucky" class="fa-icon" target="_blank"><i class="fab fa-fw fa-facebook-f"></i></a>
			<a href="https://www.medium.com/@somiari" class="fa-icon" target="_blank"><i class="fab fa-fw fa-medium-m"></i></a>
			<a href="https://www.linkedin.com/in/somiarilucky" class="fa-icon" target="_blank"><i class="fab fa-fw fa-linkedin-in"></i></a>
			<a href="mailto:hello@somiari.me" class="fa-icon" target="_blank"><i class="far fa-fw fa-envelope"></i></a>
		</section>
	</div>
	<footer>
		<?php
			date_default_timezone_set('Africa/Lagos');
		?>
		<span class="date"><?php echo date("D M d, Y"); ?></span>
		<i class="icon fas fa-fw fa-clock"></i>
		<span class="time"><?php echo date("g:i a"); ?></span>
	</footer>
</body>

</html>