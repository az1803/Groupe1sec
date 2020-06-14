<?php
session_start();
if($_GET['operateur'] == 150){
    $_SESSION['debut'] = '#' ;
    $_SESSION['operateur'] = 150;
    $_SESSION['fin'] = '#';
}else if($_GET['operateur'] == 126){
    $_SESSION['debut'] = '*' ;
    $_SESSION['operateur'] = 126;
    $_SESSION['fin'] = '#';
}

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
		<form method="get" action="page2.php">
		<div class="form" >
					<select name="nbr1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        
                        <option value="5">5</option>
                        <option value="code">code</option>
                    </select>
                    <br />
			<input type="submit" name="num" value="Suivant">
		</div>
		<br />
		
		
		
	</form>
</body>
</html>