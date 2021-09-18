<?php

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $adress = $_POST['adress'];
    $phone = $_POST['phone'];
    $sex = $_POST['sex'];
    
    echo "$sex";

    header( "location: index.php?answer= datos recibidos& name={$name}" ); 
}


?>