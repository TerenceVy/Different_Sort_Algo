<?php

$start_time = microtime(true); 

if ($argc > 1) {
	$tab = explode(';', $argv[1]);
	$compar = 0;
    $iter = 0;

	echo "Série : " . $argv[1];

	$res = quick_sort($tab);
	
	$end_time = microtime(true); 
	$execution_time = number_format($end_time - $start_time,2); 

	echo "\nRésultat : " . implode(";", $res);
	echo "\nNb de comparaison : " . $compar;
	echo "\nNb d'itération : " . $iter;
	echo "\nTemps (sec) : " .  $execution_time . "\n";
	
} else
    echo "\033[31m/!\ \033[0mVeuillez entrer un argument" . "\n";

function quick_sort($tab)
{
    global $iter;
    global $compar;

    if (count($tab) == 0) {
        return $tab;
    }

    $pivot = $tab[0];
    $left = $right = array();
    for ($i = 1; $i < count($tab); $i++) {
        $iter++;
        if ($tab[$i] < $pivot) {
            $compar++;
            $left[] = $tab[$i];
        } else {
            $compar++;
            $right[] = $tab[$i];
        }
    }
    return array_merge(quick_sort($left), array($pivot), quick_sort($right));
}

?>