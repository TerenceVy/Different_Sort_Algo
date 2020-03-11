<?php

$start_time = microtime(true); 

if ($argc > 1) {
	$tab = explode(';', $argv[1]);
	$compar = 0;
    $iter = 0;
    $bool = true;
    $step = 0;
    $temp;

	echo "Série : " . $argv[1];
    while ($bool)
    {
        $bool = false;
        $step++;
		$iter++;

        for ($i = 0; $i < count($tab) - $step; $i++)
        {
			$iter++;
			$compar++;
            if ($tab[$i] > $tab[$i + 1])
            {
                $bool = true;
                $temp = $tab[$i];
                $tab[$i] = $tab[$i + 1];
                $tab[$i + 1] = $temp;
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