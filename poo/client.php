<?php 
include_once('./person.php');

class Client extends Person{
    private $common;
    private $correo;

    function eat(){
        echo parent::talk();
    }
}

?>