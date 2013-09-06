<?php
	
	$thisPage="home";

// -------------- PAGINA ACERCA -----------------------

	if (isset($_GET['about'])){

		$thisPage="about";
		include 'section/about.php';
		exit();

	}

// -------------- PAGINA SERVICIOS -----------------------

	if (isset($_GET['services'])){

		$thisPage="services";
		include 'section/services.php';
		exit();

	}

// -------------- PAGINA PORTAFOLIO -----------------------

	if (isset($_GET['portfolio'])){

		$thisPage="portfolio";
		include 'section/portfolio.php';
		exit();

	}

// -------------- PAGINA CONTACTO -----------------------

	if (isset($_GET['contact'])){

		$thisPage="contact";
		include 'section/contact.php';
		exit();

	}

// -------------- PAGINA PAGOS -----------------------

	if (isset($_GET['payments'])){

		$thisPage="payments";
		include 'section/payments.php';
		exit();

	}


	include 'section/home.php';
	exit();
?>