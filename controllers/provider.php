<?php 
namespace controllers;
include_once('./person.php');

class Provider extends \Person {
    private $account;
    private $bank;

    function sendProducts(){
        $anonymus = new class($this->account, 1) extends Person{

            private $dividend;
            private $divisor;
        
            public function __construct($dividend,$divisor){
                $this->see();
                $this->dividend = $dividend;
                $this->divisor = $divisor;
        
            }
        
            public function run(){
        
            }
        
            public function dividedBy(){
                $plus = $this->dividend + $this->divisor;
        
                echo 'soy la clase anonima '.$plus;
        
            }
        };
    }

    function run(){
        echo 'proveedor corriendo';
    }
}

?>