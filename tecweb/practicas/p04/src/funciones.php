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

function arrayindices(){
    for($i=97; $i<123; $i++){
        $indices[$i] = chr($i);
    }
    return $indices;
}

function parkcar(){
    //$_POST['matricula'];
    $autos = array();
    $autos['MEX0001'] = array(
            'auto' => array(
                'marca' => 'TOYOTA', 'modelo' => 2018, 'tipo' => 'sedan'
            ),
            'propietario' => array(
                'nombre' => 'Juan Manuel Cruz Hdz.', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Tres Cruces'
            )
        );
    $autos['MEX0002'] = array(
            'auto' => array(
                'marca' => 'HONDA', 'modelo' => 2009, 'tipo' => 'sedan'
            ),
            'propietario' => array(
                'nombre' => 'Modesto Gavidia Sanchez', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Xilotzingo'
            )
        );
    $autos['MEX0003'] = array(
            'auto' => array(
                'marca' => 'MAZDA', 'modelo' => 2021, 'tipo' => 'hatchback'
            ),
            'propietario' => array(
                'nombre' => 'Dulce Cruz Temis', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Jardines de San Manuel'
            )
        );
    $autos['MEX0004'] = array(
            'auto' => array(
                'marca' => 'SEAT', 'modelo' => 2019, 'tipo' => 'sedan'
            ),
            'propietario' => array(
                'nombre' => 'Liliana Torres del Angel', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Margaritas'
            )
        );
    $autos['MEX0005'] = array(
            'auto' => array(
                'marca' => 'CHEVROLET', 'modelo' => 2016, 'tipo' => 'camioneta'
            ),
            'propietario' => array(
                'nombre' => 'Jose de Jesus Corona', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Fondo de Bikini'
            )
        );
    $autos['MEX0006'] = array(
            'auto' => array(
                'marca' => 'MITSUBISHI', 'modelo' => 2012, 'tipo' => 'sedan'
            ),
            'propietario' => array(
                'nombre' => 'Enrique Peña Nieto', 'ciudad' => 'Valle de Chalco, EdoMex.', 'direccion' => 'Lomas de FOVISSSTE'
            )
        );
    $autos['MEX0007'] = array(
            'auto' => array(
                'marca' => 'CHEVROLET', 'modelo' => 2015, 'tipo' => 'hatchback'
            ),
            'propietario' => array(
                'nombre' => 'Doroteo Arango', 'ciudad' => 'Tlaxcala, Tlax.', 'direccion' => 'Valle San Juan'
            )
        );
    $autos['MEX0008'] = array(
            'auto' => array(
                'marca' => 'DODGE', 'modelo' => 1999, 'tipo' => 'camioneta'
            ),
            'propietario' => array(
                'nombre' => 'Javier Lopez', 'ciudad' => 'Xalapa, Ver.', 'direccion' => 'Jardines'
            )
        );
    $autos['MEX0009'] = array(
            'auto' => array(
                'marca' => 'HONDA', 'modelo' => 2021, 'tipo' => 'sedan'
            ),
            'propietario' => array(
                'nombre' => 'Alma María de la Garza', 'ciudad' => 'Xalapa, Ver.', 'direccion' => 'Los Naranjos'
            )
        );
    $autos['MEX0010'] = array(
            'auto' => array(
                'marca' => 'VOLKSWAGEN', 'modelo' => 2013, 'tipo' => 'hatchback'
            ),
            'propietario' => array(
                'nombre' => 'German Garmendia', 'ciudad' => 'Tulancingo, Hdo.', 'direccion' => 'Tulalandia'
            )
        );
    $autos['MEX0011'] = array(
            'auto' => array(
                'marca' => 'HYUNDAI', 'modelo' => 2004, 'tipo' => 'sedan'
            ),
            'propietario' => array(
                'nombre' => 'Alta Gracia Cruz Cruz', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Xilotzingo'
            )
        );
    $autos['MEX0012'] = array(
            'auto' => array(
                'marca' => 'NISSAN', 'modelo' => 2020, 'tipo' => 'camioneta'
            ),
            'propietario' => array(
                'nombre' => 'Juan Manuel Cruz Hdz.', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Tres Cruces'
            )
        );
    $autos['MEX0013'] = array(
            'auto' => array(
                'marca' => 'NISSAN', 'modelo' => 2017, 'tipo' => 'sedan'
            ),
            'propietario' => array(
                'nombre' => 'Uriel Diaz', 'ciudad' => 'Cholula, Pue.', 'direccion' => 'Atitla'
            )
        );
    $autos['MEX0014'] = array(
            'auto' => array(
                'marca' => 'KIA', 'modelo' => 2020, 'tipo' => 'camioneta'
            ),
            'propietario' => array(
                'nombre' => 'Katherine Amaro Diaz', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Anzures'
            )
        );
    $autos['MEX0015'] = array(
            'auto' => array(
                'marca' => 'SEAT', 'modelo' => 2018, 'tipo' => 'sedan'
            ),
            'propietario' => array(
                'nombre' => 'Luis Arturo Zudek', 'ciudad' => 'Puebla, Pue.', 'direccion' => 'Valsequillo'
            )
        );
    echo '<pre>';
    print_r($autos);
    echo '</pre>';
    $matricula = $_POST['matricula'];
    foreach($autos as $mat => $value){
        if($matricula==$mat){
            echo '<br>La info del auto con la matricula <strong>'.$mat.'</strong> es:<br>';
            echo '<pre>';
            print_r($value);
            echo '</pre>';
        }
    }
}

?>