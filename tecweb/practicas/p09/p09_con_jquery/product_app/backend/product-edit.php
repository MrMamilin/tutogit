<?php

include_once __DIR__ . '/database.php';
$producto = file_get_contents('php://input');
$data = array(
    'status'  => 'error',
    'message' => 'No se  pudo actualizar'
);

if (isset($producto)) {

    $jsonOBJ = json_decode($producto);
    $sql_1 = "SELECT * FROM productos WHERE nombre = '{$jsonOBJ->nombre}' and marca = '{$jsonOBJ->marca}' and modelo = '{$jsonOBJ->modelo}' and precio = {$jsonOBJ->precio} and detalles = '{$jsonOBJ->detalles}' and unidades = {$jsonOBJ->unidades} and imagen = '{$jsonOBJ->imagen}'";

    $pro = $conexion->query($sql_1);

    if ($pro->num_rows == 0) {
        $sql = "UPDATE productos SET nombre = '{$jsonOBJ->nombre}', marca = '{$jsonOBJ->marca}', modelo = '{$jsonOBJ->modelo}', precio = {$jsonOBJ->precio}, detalles = '{$jsonOBJ->detalles}', unidades = {$jsonOBJ->unidades}, imagen = '{$jsonOBJ->imagen}' WHERE id = '{$jsonOBJ->id}'";
        $result = $conexion->query($sql);

        $conexion->set_charset("utf8");
        if ($conexion->query($sql)) {
            $data['status'] =  "success";
            $data['message'] =  "Producto actualizado";
        } else {
            $data['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
        }
    } else {
        $data['status'] =  "success";
        $data['message'] =  "No se puede actualizar si se repiten los datos";
    }

    $conexion->close();

    // Conversion a Json
    echo json_encode($data, JSON_PRETTY_PRINT);
}