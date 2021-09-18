<?php

abstract class Person{

    private $name;
    private $lastname;
    private $sex;
    private $nationality;
    private $age;

    static $color = 'Rojo';

    abstract function run();

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



    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of lastname
     */ 
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @return  self
     */ 
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of sex
     */ 
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * Set the value of sex
     *
     * @return  self
     */ 
    public function setSex($sex)
    {
        $this->sex = $sex;

        return $this;
    }

    /**
     * Get the value of nationality
     */ 
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set the value of nationality
     *
     * @return  self
     */ 
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}


?>