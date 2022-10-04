<?php

function multiplo5y7($numero) {
    if (($_GET['numero']%5 && $_GET['numero']%7) == 0){
        return $_GET['numero'].' Es multiplo de 5 y 7';
    }
    else{
        return $_GET['numero'].' no es multiplo';
    }
}

function genrepetitiva($it){
    $it= 1;
    $cont=0;
    for($i=0; $i<$it; $i++){
        for($j=0; $j<3; $j++){
            $array[$i][$j] = rand(1, 100);
            //echo $array[$i][$j].', ';
            $cont = ++$cont;
        }
        if($it>0){
            $it = ++$it;}
        if($array[$i][0]%2 == 1 && $array[$i][1]%2 == 0 && $array[$i][2]%2 == 1){//error
            break;
        }
    }
    return $cont.' numeros obtenidos en '.($it-1).' iteraciones';
}

function randmultiplo($numero){
    $i = 0;
    $array[$i] = rand(1, 100);
    while (($array[$i] % $_GET['numero']) != 0) {
        $i++;
        $array[$i] = rand(1, 100);
        if($_GET['numero'] % $array[$i] == 0){
            break;
        }
    }
    return 'Se encontró que el numero '.$array[$i].' es multiplo de '.$_GET['numero'];
}

function randmultiplodowhile($numero){
    $i = 0;
    $array[$i] = rand(1, 100);
    do {
        $i++;
        $array[$i] = rand(1, 100);
        if($_GET['numero'] % $array[$i] == 0){
            break;
        }
    } while (($array[$i] % $_GET['numero']) != 0);
    return 'Se encontró que el numero '.$array[$i].' es multiplo de '.$_GET['numero'];
}

?>