<?php 
include_once('./person.php');
include_once('./operation.php');

class Client extends Person{

    use Operation;

    private $common;
    private $email;

    function __construct(){
        # echo 'Inicio';
        $this->common = '';
        $this->email = 'default@default';
    }
    
    /**
     * Get the value of common
     */ 
    public function getCommon() : int
    {
        return $this->common;
    }

    /**
     * Set the value of common
     *
     * @return  self
     */ 
    public function setCommon( int $common )
    {
        $this->common = $common;

    }

    /**
     * Get the value of email
     */ 
    public function getEmail() : String
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail( String $email )
    {
        $this->email = $email;

    }
    function run(){
        echo 'cliente corriendo';
    }
    function eat(){
        echo parent::talk();
    }

    function pay(){
        echo 'El dinero que gaste fue:'.$this->plus( 89, 17 );
    }

    function say(Employee $employee){
        echo "{$this->getName()} felicitame {$employee->getName()}";
    }


    function __destruct(){
        # echo 'Limpieza';
    }

    


}

?>