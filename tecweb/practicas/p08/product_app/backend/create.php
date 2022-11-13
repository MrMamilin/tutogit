<?php
    include_once __DIR__.'/database.php';

    // SE OBTIENE LA INFORMACIÓN DEL PRODUCTO ENVIADA POR EL CLIENTE
    $producto = file_get_contents('php://input');
    if(!empty($producto)) {
        $json = json_decode($producto, true);
        $name = $json["nombre"];
        $brand = $json["marca"];
        $model = $json["modelo"];
        $price = $json["precio"];
        $details = $json["detalles"];
        $units = $json["unidades"];
        $image = $json["imagen"];

        $query = $conexion->query("SELECT * FROM productos WHERE nombre='{$name}' AND eliminado=0");
        if ($query->num_rows != 0) {
            echo "El producto ya existe";
        }
        else {
            if ( $result = $conexion->query("INSERT INTO productos VALUES (NULL, '{$name}', '{$brand}', '{$model}', '{$price}', '{$details}', '{$units}', '{$image}', '0')") ) {
                echo "Se ha insertado correctamente :)";
            }
            else {
                die('Query Error: '.mysqli_error($conexion));
                echo "Fallo al insertar :(";
            }
        }
        $conexion->close();
    }
?>