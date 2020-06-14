<?php
session_start();

$_SESSION['nbr1'] = $_GET['nbr1'] ;


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
		<form method="get" action="page3.php">
		<div class="form" >
        <?php  if($_SESSION['nbr1']==1){
            ?>
                	<select name="nbr2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>
                    <br />
                    <input type="submit" name="num" value="Suivant">
            <?php
        }
				?>
                 <?php  if($_SESSION['nbr1']==2){
            ?>
                	<select name="nbr2">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                    <br />
                    <input type="submit" name="num" value="Suivant">
            <?php
        }
				?>
                 <?php  if($_SESSION['nbr1']=='code'){
                    $operateur = $_SESSION['operateur'];
                    $code = $_SESSION['nbr1'];
                    $output = `swipl -s db.pl -g "combinaison($operateur,$code)."  -t halt.  `;
                    echo $output;
                    return $output;
            ?>
                	<h1>Attention </h1>

                    <input type="submit" name="fin" value="Fin">
            <?php
        }
				?>
                 <?php  if($_SESSION['nbr1']==5){
            ?>
                	<select name="nbr2">
                        <option value="0">0</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <br />
                    <input type="submit" name="num" value="Suivant">
            <?php
        }
				?>
                <?php  if($_SESSION['nbr1']==4){
            ?>
                    <select name="nbr2">
                      
                        <option value="4">4</option>
                        
                    </select>
                    <br />
                    <input type="submit" name="num" value="Suivant">
            <?php
        }
                ?>
		
		</div>
		<br />
		
		
		
	</form>
</body>
</html>