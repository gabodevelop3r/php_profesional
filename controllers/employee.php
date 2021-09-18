<?php 
namespace controllers;
include_once('../poo/person.php');
include_once('../poo/respiration.php');


class Employee extends \Person implements \Respiration {

    private $position;
    private $schedule;

    function cook(){

    }
    function run(){
        echo 'empleado corriendo';
    }

    public function nasalCavity(){

    }
    public function mouth(){

    }
    public function trachea(){

    }
    public function bronchi(){

    }
    public function lungs(){
        
    }




}

?>