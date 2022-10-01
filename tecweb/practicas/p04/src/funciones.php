<?php

function multiplo5y7($numero) {
    if (($_GET['numero']%5 && $_GET['numero']%7) == 0){
        return $_GET['numero'].' Es multiplo de 5 y 7';
    }
    else{
        return $_GET['numero'].' no es multiplo';
    }
}

?>