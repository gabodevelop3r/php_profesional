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

# print_r( $person );

# echo $person['lastname'];
$person['lastname'] = 'gallegos';
# print_r( $person );


/***Arreglos multidimensionales */

$battleship = array( 
                    'A' => array('Mar','BARCO','Mar','Mar'),
                    'B' => array('Mar','Mar','Mar','Mar'),
                    'C' => array('Mar','Mar','Mar','Mar'),
                    'D' => array('Mar','Mar','Mar','Mar')
                );

print_r( $battleship );

$coodinates = $battleship['A'][0];
echo $coodinates;

$coodinates = $battleship['A'][1];
echo $coodinates;



?>