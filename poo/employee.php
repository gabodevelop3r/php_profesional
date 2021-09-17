<?php 
include_once('./person.php');


class Employee extends Person {

    private $position;
    private $schedule;

    function cook(){

    }
    function run(){
        echo 'empleado corriendo';
    }
}

?>