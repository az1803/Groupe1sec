<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Groupe1Sec | 2019-2020</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="content">
		<h1>Detecteur d'Arnaqueur via Paiement mobile au Cameroun</h1>
		<hr>
		<h2>Veuillez entrer les instructions pour detecté si c'est une possible arnaque</h2>
		<form method="get" action="page1.php">
			<div class="form" >
				Choisir votre operateur :
					<input type="radio" name="operateur" value="126" /> MTN
					<input type="radio" name="operateur" value="150" /> ORANGE		
					<br />	
				<input type="submit" name="ope" value="Suivant">
			</div>
			<br />	
	    </form>
	</div>
</body>
</html>