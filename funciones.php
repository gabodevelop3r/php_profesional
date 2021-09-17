<?php


function subjects(){

    echo "Matematicas, Biologia, Español, Ciencias, Geografia";
}

# echo "Jose tus materias son: ";
# subjects();

# echo "<br> Hola amiga espero y estes bien tus materias son";
# subjects();


/*** Argumentos de funciones  */

function divideBy( $divisor, $dividendo = 2 ){

    $result = $divisor/$dividendo;
    echo " El resultado de la division es: $result";

}

# divideBy( 15, 5 );

/*** Argumentos por referencia */
function plus ( $param1 , $param2 ){

    $param1 = $param1 + $param2;

    echo "El resultado de la suma es $param1";
}

$arg1 = 20 ;
$arg2 = 5;

# plus( $arg1, $arg2 );

# echo "\n El argumento es $arg1";


/*** funciones recursivas */

function call ( $value ){
    if ( $value <= 10 ) {
        # code...
        echo "$value \n";
        call( ++$value );
    }
}
# call( 1 );

/** Retornar valores */
function operation ( $num1 , $num2 ){
    return array ( $num1 - $num2, $num1 + $num2, $num1 / $num2) ;
}

list ( $minis, $plus, $divideBy ) = operation( 15, 5 );
echo "La suma es: $plus,  la resta es: $minis, la division es:$divideBy ";


?>