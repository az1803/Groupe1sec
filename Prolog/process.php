<?php      


funtion combinaison($operateur,$code){


$output = `swipl -s db.pl -g "combinaison($operateur,$code)."  -t halt.  `;

return $output;
}




?>