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
echo "<h2>1. </h2>";
echo $_myvar, ", ", $_7var, ", ", /*myvar*/ $myvar, ", ", $var7, ", ", $_element1/*, $house*/;
unset($_myvar, $_7var, $myvar, $var7, $_element1);

echo "<h2>2. </h2>";
$a = "ManejadorSQL";
$b = 'MySQL';
$c = &$a;
echo $a, "<br>", $b, "<br>", $c, "<br>";
$a = "PHP server";
$b = &$a;
echo "<b>En esta segunda asignación, se imprime la variable a
y b pasa a hacer una referencia a la variable.
Por eso se imprime a 2 veces</b><br>", $a, "<br>", $b, "<br>", $c;
unset($a, $b, $c);