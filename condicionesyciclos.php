<?php

$age = 40;

if( $age >= 18 && $age <= 30):
    //sentencia
    echo "Puedes ver la pelicula";
elseif( $age > 30 ):
    echo "No puedes ver la pelicula eres mayor a 30";

else:
    echo "No puedes ver la pelicula, tu edad es menor a 18";
    echo "No puedes ver la pelicula";
endif



?>