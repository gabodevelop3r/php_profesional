<?php

class Autoloader{

    private function loadClass($class){
        $path = "../".strtolower(str_replace( '\\' , '/' , $class ).".php");
    
        echo $path."<br>";
        if( file_exists($path) ){
            
            require_once $path;
        }else{
            echo "no entro:".$path."<br>";
        }
    }

    public function load(){
        spl_autoload_register(array($this,'loadClass'));
    }

}




?>