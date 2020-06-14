<?php
session_start();

$_SESSION['nbr3'] = $_GET["nbr3"];


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

           
  
 <?php  if($_SESSION['nbr1'] == 2 && $_SESSION['nbr2'] == 1 && $_GET["nbr3"] ==1  ){
       $_SESSION['nbr4'] = "montant";
       $_SESSION['nbr5'] = "code";
      /*  echo $_SESSION['debut'] .''. $_SESSION['operateur'].'*'. $_SESSION['nbr1'].'*'.$_SESSION['nbr2'].'*'.
       $_SESSION['nbr3'].'*'.$_SESSION['nbr4'].'*'. $_SESSION['nbr5'].'*'.$_SESSION['fin'];*/
        $code = $_SESSION['nbr1'];
                    $output = `swipl -s db.pl -g "combinaison($operateur,$_SESSION['nbr1'],$_SESSION['nbr2'],$_SESSION['nbr3'],$_SESSION['nbr4'],$_SESSION['nbr5'])."  -t halt.  `;
                    echo $output;
                    return $output;

                ?>
                    <br />
                    <input type="submit" name="fin" value="Fin">
                 
                <?php
            }
?>
			 <?php  if($_SESSION['nbr1'] == 2 && $_SESSION['nbr2'] == 1 && $_GET["nbr3"] ==2  ){
          $_SESSION['nbr4'] = "numero";
          $_SESSION['nbr5'] = "montant";
          $_SESSION['nbr6'] =' code';
        /*  echo $_SESSION['debut'] .''. $_SESSION['operateur'].'*'. $_SESSION['nbr1'].'*'.$_SESSION['nbr2'].'*'.
          $_SESSION['nbr3'].'*'.$_SESSION['nbr4'].'*'. $_SESSION['nbr5'].'*'. $_SESSION['nbr6'].'*'. $_SESSION['fin'];*/
           $code = $_SESSION['nbr1'];
                    $output = `swipl -s db.pl -g "combinaison($operateur,$_SESSION['nbr1'],$_SESSION['nbr2'],$_SESSION['nbr3'],$_SESSION['nbr4'],$_SESSION['nbr5'],$_SESSION['nbr6'])."  -t halt.  `;
                    echo $output;
                    return $output;
   
       ?>
      
           <br />
           <input type="submit" name="fin" value="Fin">
        
       <?php
   }
?>
		</div>
		<br />
		
		
		
	</form>
</body>
</html>