<?php
	session_start();
	if (isset($_GET['submit'])) {
		$noms = $_GET['name'];
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Groupe1Sec | 2019-2020</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body >
	<div class="content">
		<h1>Detecteur d'Arnaqueur via Paiement mobile au Cameroun</h1>
		<hr>
		<h2>Veuillez entrer les instructions pour detecté si c'est une possible arnaque</h2>
		<form method="get" action="home.php">
			<div class="form" >
          	     <input type="text" name="name" required autocomplete="off" placeholder="Entrer votre noms" />	
          	     <br />		
				<input type="submit" name="val" value="Suivant">
			</div>
			<br />	
	    </form>
	</div>
</body>
</html>