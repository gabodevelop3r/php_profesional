<?php

    /** COMPARACION */

    $age = '19';

    /**
     * 
     *  == Igual
     *  echo var_dump($age == 18);
     * 
     *  === Identico
     *  echo var_dump( $age === 18 );
     * 
     *  !=  <> Diferente
     *  echo var_dump( $age <> 18 );
     * 
     *  !== No identico
     *  echo var_dump( $age !== 18 );
     * 
     *  > mayor que
     *  echo var_dump( $age > 18 );
     * 
     *  < Menor que 
     *  echo var_dump( $age > 18 );
     *  
     *  <= Menor o igual que
     *  echo var_dump( $age <= 18 );
     *   
     *  >= Mayor o igual que
     *  echo var_dump( $age >= 18 );
     *  
     *  <=> Nave espacial ( retorna -1 si el valor es menor , 0 si el valor es igual y 1 si el valor es mayor )
     *  echo var_dump( $age <=> 18 );
     * 
     */


    /*** ARITMETICOS */

    $operando1 = 2;
    $operando2 = 2;

    $result = $operando1 ** $operando2;
    /***
     * 
     *  Adicion +
     *  $result = $operando1 + $operando2;
     * 
     *  Sustraccion
     *  $result = $operando1 - $operando2;
     * 
     *  Multiplicacion *
     *  $result = $operando1 * $operando2;
     * 
     *  Division
     *  $result = $operando1 / $operando2;
     * 
     *  Modulo
     *  $residuo = $operando1 % $operando2;
     * 
     *  Exponenciacion
     *  $result = $operando1 ** $operando2;
     *  
     * 
     */

    /*** ASIGNACION */

    $a = 15;
    $b = &$a;

    // echo "$a <br>";
    // echo "$b <br>";

    // $a = 70;

    // echo "$a <br>";
    // echo "$b <br>";


    /*** OPERADORES LOGICOS */

    $attendance = 5;
    $average = 7;
    $result = ( $average >= 7 or $attendance == 6 );
    //echo var_dump($result);

    /**
     *  Operador y && 
     *  $result = ( $average >= 7 && $attendance == 6 );
     * 
     *  Operador O ||
     *  $result = ( $average >= 7 || $attendance == 6 );
     *  
     *  Operador not !
     *  $result = !( $average >= 8 );
     * 
     *  Operador AND, OR Y XOR (uno de los valores debe ser verdadero)
     *  $result = ( $average >= 7 xor $attendance == 6 );
     * 
     */


    /*** INCREMENTO Y DECREMENTO */

    $a = 5;
    // echo 'Pos incremento '. $a++. '<br>';
    // echo 'resultado pre'. ++$a .'<br>';
    // echo 'Pos decremento '. $a--. '<br>';
    // echo 'resultado '. $a;


?>