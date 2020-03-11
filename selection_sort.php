<?php

$start_time = microtime(true); 

if ($argc > 1) {
	$tab = explode(';', $argv[1]);
	$compar = 0;
	$iter = 0;
    $temp;

	echo "Série : " . $argv[1];

	for ($i = 0; $i < count($tab); $i++)
	{
            $iter++;
			$min = $i;
            for($j = $i + 1; $j < count($tab); $j++)
            {
				$compar++;
				$iter++;
                if($tab[$j] < $tab[$min])
                {
                    $min = $j;
                }
            }
        $temp = $tab[$i];
        $tab[$i] = $tab[$min];
        $tab[$min] = $temp;     
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