<?php
	/* autoloader */

	require('src/Autoloader/Psr4AutoloaderClass.php');
	$loader = new \Autoloader\Psr4AutoloaderClass;
  	$loader->register();

	/*$loader->addNamespace('Blog\Administration', 'src/Blog/Administration/Classes/');*/
	$loader->addNamespace('Route', 'src/Route/');

   /*new \Blog\Administration\Test;*/
   new \Route\Route;
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>acceuil</title>
		<link rel="stylesheet" type="text/css" href="assets/css/reset.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	</head>

	<body>

		<header>
			<nav id="menu">
				<a href="#">Acceuil</a>
				<a href="#">Blog</a>
				<a href="#">Connexion</a>
			</nav>
		</header>

		<section id="left-bar">
			<div id="circle-img">
				<img id="photo" src="assets/img/photo.png"/>
			</div>

			<h2 id="name">Hervy Steven</h2>
			<p id="introduction">Dévelloppeur full stack capable de réaliser vos application les plus folles seul votre imagination es une limite.</p>
			<a href="https://github.com/dictateurfou"><i class="fab fa-github"></i> github</a>
			<a href="https://www.linkedin.com/in/steven-hervy-67416a157/"> <i class="fab fa-linkedin"></i> linkdin</a>
			<a href="https://codestats.net/users/dictateurfou"><i class="fas fa-code"></i> code stats</a>
		</section>

		<section id="content">

		</section>
	</body>
</html>