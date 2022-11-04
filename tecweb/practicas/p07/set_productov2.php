<?php
//if(isset($nombre) || isset($marca) || isset($modelo) || isset($precio) || isset($detalles) || isset($unidades) || isset($imagen) || isset($eliminado)){
$nombre = $_POST["nombre"];
$marca  = $_POST["marca"];
$modelo = $_POST["modelo"];
$precio = $_POST["precio"];
$detalles = $_POST["detalles"];
$unidades = $_POST["unidades"];
$imagen   = $_POST["imagen"];
$eliminado = 0;

/** SE CREA EL OBJETO DE CONEXION */
@$link = new mysqli('localhost:3310', 'valdo', 'olvera21', 'marketzone2');

/** comprobar la conexión */
if ($link->connect_errno) {
    die('Falló la conexión: ' . $link->connect_error . '<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
}

if ($nombre != "" && $marca != "" && $modelo != "" && $precio != "" && $detalles != "" && $unidades != "" && $imagen != "") {
$sql = "UPDATE productos SET nombre= '{$nombre}', marca='{$marca}', modelo='{$modelo}', precio={$precio}, detalles='{$detalles}', unidades={$unidades}, imagen='{$imagen}' ";
    if ($link->query($sql)) {
        echo '<p style="font-family: Arial, Helvetica, sans-serif;">';
        echo '<strong>Producto cargado</strong> <br><br> <strong>ID: </strong>' . $link->insert_id;
        echo '<br><br><strong>Nombre: </strong>' . $nombre;
        echo '<br><br><strong>Marca: </strong>' . $marca;
        echo '<br><br><strong>Modelo: </strong>' . $modelo;
        echo '<br><br><strong>Precio: </strong>' . $precio;
        echo '<br><br><strong>Detalles: </strong>' . $detalles;
        echo '<br><br><strong>Unidades: </strong>' . $unidades;
        echo '<br><br><strong>Imagen: </strong><br> <img src=http://localhost:8008/tecnologiasweb/p05-base/' . $imagen . ' width="200px" height="200px" />';
        echo '</p>';
        echo '<a href="formulario_productos.html">Regresar</a>';
    } else {
        echo '<br><strong>UN ELEMENTO O VARIOS ESTAN EN UN FORMATO INCORRECTO. FAVOR DE CORREGIR ESOS DATOS</strong>';
    }
} else {
    echo '<a href="formulario_productos.html">Regresar</a>';
}

$link->close();
//}
?>