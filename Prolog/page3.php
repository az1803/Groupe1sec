<?php
session_start();

$_SESSION['nbr2'] = $_GET["nbr2"];


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
		<form method="get" action="page4.php">
		<div class="form" >

            <?php  if($_SESSION['nbr1'] == 5 &&  $_GET['nbr2'] == 0){
                $_SESSION['nbr3']= "code";
               /* echo $_SESSION['debut'] .''. $_SESSION['operateur'].'*'. $_SESSION['nbr1'].'*'.$_SESSION['nbr2'].'*'.
                $_SESSION['nbr3'].'*'.$_SESSION['fin'];*/

                   $operateur = $_SESSION['operateur'];
                    $code = $_SESSION['nbr1'];
                    $nbr2 =  $_SESSION['nbr2'];
                    $output = `swipl -s db.pl -g "combinaison($operateur,$code,$nbr2)."  -t halt.  `;
                    echo $output;
                    return $output;
                ?>
                <?php
            }
?>
   <?php  if($_SESSION['nbr1'] == 1 && ($_GET['nbr2'] == 1 || $_GET['nbr2'] == 2)){
       $_SESSION['nbr3'] = 'numero';
       $_SESSION['nbr4'] = 'montant';
       $_SESSION['nbr5'] = 'code';

    /*   echo $_SESSION['debut'] .''. $_SESSION['operateur'].'*'. $_SESSION['nbr1'].'*'.$_SESSION['nbr2'].'*'.
       $_SESSION['nbr3'].'*'.$_SESSION['nbr4'].'*'. $_SESSION['nbr5'].'*'.$_SESSION['fin'];*/
        $operateur = $_SESSION['operateur'];
                    $code = $_SESSION['nbr1'];
                    $nbr2 =  $_SESSION['nbr2'];
                     $nbr3 = $_SESSION['nbr3'];
                     $nbr4 = $_SESSION['nbr4'];
                     $nbr5=  $_SESSION['nbr5'];
                       
                    $output = `swipl -s db.pl -g "combinaison($operateur,$code,$nbr2,$nbr3,$nbr4,$nbr5)."  -t halt.  `;
                    echo $output;
                    return $output;
                ?>
                    <br />
                    <input type="submit" name="fin" value="Fin">
                 
                <?php
            }
?>
 <?php  if($_SESSION['nbr1'] == 2 && $_GET['nbr2'] == 1){
       
                ?>
                <select name="nbr3" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                </select>
                <br />
                    <input type="submit" name="suivant" value="Suivant">
                 
                <?php
            }
?>
 <?php  if($_SESSION['nbr1'] == 4 && $_GET['nbr2'] == 4){
$operateur = $_SESSION['operateur'];
                   $code = $_SESSION['nbr1'];
                    $nbr2 =  $_SESSION['nbr2'];
                       
                    $output = `swipl -s db.pl -g "combinaison($operateur,$code,$nbr2)."  -t halt.  `;
                    echo $output;
                    return $output;
       
                ?>
               


                 
                <?php
            }
?>
			
		</div>
		<br />
		
		
		
	</form>
</body>
</html>