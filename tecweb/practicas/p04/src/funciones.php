<?php

function multiplo5y7($numero) {
    if (($_GET['numero']%5 && $_GET['numero']%7) == 0){
        return $_GET['numero'].' Es multiplo de 5 y 7';
    }
    else{
        return $_GET['numero'].' no es multiplo';
    }
}

function genrepetitiva($cont, $num){
    $_POST['num']=0;
    $_POST['cont']=0;
    $it= 100;
    for($i=0; $i<$it; $i++){
        $_POST['cont']++;
        for($j=0; $j<3; $j++){
            $array[$i][$j] = rand(1, 100);
            if($array[$i][$j] % 2 == 0){
                $_POST['num']++;
                //$i++;
            }
            /*if(($array[$i][0]%2 && $array[$i][2]%2) == 1){//error
                if($array[$i][1]%2 == 0){
                    $i++;
                    $num++;
                }
            }*/
        }
    }
    return $_POST['num'].' numeros obtenidos en '.$_POST['cont'].' iteraciones';
}

?>