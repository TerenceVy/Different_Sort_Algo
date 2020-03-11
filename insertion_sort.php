<?php

$start_time = microtime(true); 

if ($argc > 1) {
	$tab = explode(';', $argv[1]);
	$compar = 0;
	$iter = 0;

	echo "Série : " . $argv[1];

	for ($i = 1; $i < count($tab); $i++)
	{
		$iter++;
		$to_insert = $tab[$i];
		for ($j = 0; $j < $i; $j++)
		{
			$iter++;
			$compar++;
			$current = $tab[$j];
			if ($to_insert < $current)
			{
				$tab[$j] = $to_insert;
				$to_insert = $current;
			}
		}
		$tab[$i] = $to_insert;
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