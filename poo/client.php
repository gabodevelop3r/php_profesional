<?php 
include_once('./person.php');

class Client extends Person{
    private $common;
    private $email;

    // public function __set( $nameAttribute, $value ){
    //     $this->$nameAttribute = $value;
    // }

    // public function __get($nameAttribute){
    //     return $this->$nameAttribute;
    // }

    
    function eat(){
        echo parent::talk();
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

}

?>