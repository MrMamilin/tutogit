<?php
/*Un nombre de variable válido tiene que empezar con una letra o un carácter de subrayado,
seguido de cualquier número de letras, números y caracteres de subrayado.*/
$_myvar=1;  
$_7var=2;
//myvar=3; le falta el $ para identificarla como una variable
$myvar=4;
$var7=5;
$_element1=6;
//$house*5=7; No se puede hacer una operación en una variable antes de definir su valor
echo $_myvar, $_7var, /*myvar*/ $myvar, $var7, $_element1/*, $house*/;

?>