<?php
    $conexion = @mysqli_connect(
        'localhost:3310',
        'valdo',
        'olvera21',
        'marketzone2'
    );

    /**
     * NOTA: si la conexión falló $conexion contendrá false
     **/
    if(!$conexion) {
        die('¡Base de datos NO conextada!');
    }
?>