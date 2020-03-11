<?php

$start_time = microtime(true); 

if ($argc > 1) {
	$tab = explode(';', $argv[1]);
	$compar = 0;
    $iter = 0;

	echo "Série : " . $argv[1];

    $res = merge_sort($tab);

	$end_time = microtime(true); 
	$execution_time = number_format($end_time - $start_time,2); 

	echo "\nRésultat : " . implode(";", $res);
	echo "\nNb de comparaison : " . $compar;
	echo "\nNb d'itération : " . $iter;
	echo "\nTemps (sec) : " .  $execution_time . "\n";
	
} else
    echo "\033[31m/!\ \033[0mVeuillez entrer un argument" . "\n";

function merge_sort($tab)
    {
        global $compar;
        global $iter;

        if (count($tab) <= 1)
            return $tab;
 
 
        $left = merge_sort(array_splice($tab, floor(count($tab) / 2)));
 
        $right = merge_sort($tab);
 
        $result = array();
 
        while (count($left) > 0 && count($right) > 0) {
            $iter++;
            if ($left[0] <= $right[0]) {
                $compar++;
                array_push($result, array_shift($left));
            } else {
                $compar++;
                array_push($result, array_shift($right));
            }
        }
        while (count($left) > 0) {
            $iter++;
            array_push($result, array_shift($left));
        }
 
        while (count($right) > 0) {
            $iter++;
            array_push($result, array_shift($right));
        }
 
        return $result;
    }

?>