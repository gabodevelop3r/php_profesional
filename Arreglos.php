<?php

/***
 *  Arreglos indexados
 * 
 */
$colors = array('rojo','morado','verde');
# print_r($colors);
# echo $colors[2];
$colors[1] = 'azul';
# print_r($colors);

/*** Arreglos Asiciativos */

$person = array( 
            'nombre' => 'Marines',
            'lastname' => 'Mendez',
            'age' => 123
        );

print_r( $person );

echo $person['lastname'];
$person['lastname'] = 'gallegos';
print_r( $person );



?>