<?php

$start_time = microtime(true); 

if ($argc > 1) {
	$tab = explode(';', $argv[1]);
	$compar = 0;
    $iter = 0;

	echo "Série : " . $argv[1];

	$gap = count($tab);
    $swap = true;
	while ($gap > 1 || $swap) {
		$iter++;
		if ($gap > 1) $gap /= 1.25;
		$swap = false;
		for ($i = 0; $i + $gap < count($tab); $i++){
			$iter++;
			$compar += 2;
			if ($tab[$i] > $tab[$i + $gap]){
				$compar += 2;
				list($tab[$i], $tab[$i + $gap]) = array($tab[$i + $gap], $tab[$i]);
				$swap = true;
			}
		}
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