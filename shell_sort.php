<?php

$start_time = microtime(true); 

if ($argc > 1) {
	$tab = explode(';', $argv[1]);
	$compar = 0;
    $iter = 0;

	echo "Série : " . $argv[1];
 
	$inc = round(count($tab) / 2);
	while ($inc > 0) {
		$iter++;
	   for ($i = $inc; $i < count($tab);$i++) {
		$iter++;
		$compar++;
		$temp = $tab[$i];
		$j = $i;
		 while ($j >= $inc && $tab[$j-$inc] > $temp) {
			$iter++; 
			$compar+=2;
			$tab[$j] = $tab[$j - $inc];
			$j -= $inc;
		  }
		  $tab[$j] = $temp;
	   }
	   $inc = round($inc/2.2);
	}

	$end_time = microtime(true); 
	$execution_time = number_format($end_time - $start_time,2); 

	echo "\nRésultat : " . implode(";", $tab);
	echo "\nNb de comparaison : " . $compar;
	echo "\nNb d'itération : " . $iter;
	echo "\nTemps (sec) : " .  $execution_time . "\n";
	
} else
	echo "\033[31m/!\ \033[0mVeuillez entrer un argument" . "\n";

?>