<?php 
    $array = array(); 
    for ($i = 0; $i < 20 ; $i++) { //sorteia os números e popula o array
        $array[$i] = rand(1, 10);
    }
    echo 'Array sorteado: <br>';
    echo '<pre>';
    print_r($array);
    echo '</pre>';
    echo '<hr>';

    $arrays = array_count_values($array); //cria um novo array, contando quantos números de cada existe
    $novo = array();
    $j = 0;
    foreach ($arrays as $key => $value) {//popula o array final com os números que não se repetiram 
        if($value === 1) {
            $novo[$j] = $key;
            $j++;
        }
    }
    echo 'Números que não se repetem: <br>';
    echo '<pre>';
    print_r($novo);
    echo '</pre>';

?>