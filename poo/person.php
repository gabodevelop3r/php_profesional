<?php

class Person{

    public $name;
    public $lastname;
    public $sex;
    public $nationality;
    public $age;

    static $color = 'Rojo';

    function run(){

    }

    function see(){
        # echo "yo veo una camisa ".self::$color;
        $this->sendOrder('see');
    }

    protected function talk(){
        echo "dijo mi padre que jugaria conmigo";
    }

    private function sendOrder( $order ){

        switch ($order) {
            case 'run':
                # code...
                echo "correr";
                break;
            case 'see':
                # code...
                echo "ver";

                break;
            case 'talk':
                # code...
                echo "hablar";
                break;
            default:
                echo "no se encontro la orden";

                break;
        }
    }


}


?>