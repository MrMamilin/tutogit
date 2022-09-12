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

echo "<h2>3.</h2>";
$a = "PHP5"; var_dump($a); echo "<br>";
$z[] = &$a; var_dump($z); echo "<br>";
$b = "5a version de PHP"; var_dump($b); echo "<br>";
$c = $b*10; var_dump($c); echo "<br>"; //no se puede porque b es string
$a .= $b; var_dump($a); echo "<br>";
$b *= $c; var_dump($b); echo "<br>";//por ende está tampoco se puede realizar
$z[0] = "MySQL"; var_dump($z);
unset($a, $b, $c, $z);

echo "<h2>4.</h2>";
function prueba(){
var_dump($GLOBALS["a"]); echo "<br>";
var_dump($GLOBALS["z"]); echo "<br>";
var_dump($GLOBALS["b"]); echo "<br>";
var_dump($GLOBALS["c"]); echo "<br>"; //no se puede porque b es string
var_dump($GLOBALS["a"]); echo "<br>";
var_dump($GLOBALS["b"]); echo "<br>";//por ende está tampoco se puede realizar
var_dump($GLOBALS["z"]);
}
$a = "PHP5";
$z[] = &$a;
$b = "5a version de PHP";
$c = (int)$b*10;
$a .= $b;
$b = (int)$b*$c;
$z[0] = "MySQL"; 
prueba();
unset($a, $b, $c, $z); 

echo "<h2>5. </h2>";
$a = "7 personas";
$b = (int) $a;
$a = "9E3";
$c = (double) $a;
echo $a, "<br>", $b, "<br>", $a, "<br>", $c;
unset($a,$b,$c);

echo "<h2>6. </h2>";
$a = "0";
$b = "TRUE";
$c = FALSE;
$d = ($a OR $b);
$e = ($a AND $c);
$f = ($a XOR $b);
var_dump($a,$b,$c,$d,$e,$f);
echo "<br>", (boolval($c) ? 'true' : 'false'), "\n";
echo "<br>", (boolval($e) ? 'true' : 'false'), "\n";
unset($a,$b,$c,$d,$e,$f);

echo "<h2>7. </h2>";
/*foreach($_SERVER as $nombre_campo => $valor){
    $asignacion = "$" . $nombre_campo . "= . $valor . ";
    echo "<br>" . $asignacion;
  }*/
  echo "<b>Versión de Apache y PHP:</b> ", $_SERVER['SERVER_SIGNATURE'];
  echo "<br><b>Nombre del sistema operativo:</b> ", $_SERVER['HTTP_SEC_CH_UA_PLATFORM'];
  echo "<br><br><b>Idioma del navegador:</b> ", $_SERVER['HTTP_ACCEPT_LANGUAGE'];
?>