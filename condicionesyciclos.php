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



?>