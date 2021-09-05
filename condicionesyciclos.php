<?php

    $age = 40;

    if( $age >= 18 && $age <= 30):
        //sentencia
        // echo "Puedes ver la pelicula";
    elseif( $age > 30 ):
        // echo "No puedes ver la pelicula eres mayor a 30";

    else:
        // echo "No puedes ver la pelicula, tu edad es menor a 18";
        // echo "No puedes ver la pelicula";
    endif;

    $shirt = 'Rojo';

    switch ($shirt):
        case 'Rojo':
            echo "Color rojo";
            break;
        case 'Azul':
            echo "Color Azul";
            break;
        case 'Rosa':
            echo "Color Rosa";
            break;
        case 'Amarillo':
            echo "Color Amarillo";
            break;
        default:
            echo "No encontramos lo que buscabas";
            break;
    endswitch;
    echo "<br>";

    for ( $i = 10; $i >= 1 ; --$i ) { 
        # code...
        echo "Anuncio a repetir $i <br>";
    }

    $cont = 1;

    while( $cont <=12 ){
        echo "zapato numero $cont <br>";
        ++$cont;
    }

    do{
        echo "Zapato numero $cont <br>";
        ++$cont;
    }while( $cont <= 12);


    $animals = array('gato','perro','panda');
    $datas = array('nombre'=>'Marines','Apellido'=>'Mendez', 'Sexo'=>'Femenino');

    foreach($animals as $animal){
        echo "El animal es $animal <br>";
    }

    foreach($datas as $clave => $animal){
        echo "La clave es $clave y el animal es $animal <br>";
    }

?>