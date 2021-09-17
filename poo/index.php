<?php

# require('./person.php'); # establece que el codigo del archivo invocado es requerido (obligatorio)
# include() # si no encuentra el error retorna warning no detiene la ejecucion
require_once('./person.php'); # permite la carga de un archivo una sola vez
# include_once() # permite la inclusion de un archivo una sola vez


require_once('./client.php');
require_once('./employee.php');
/*** variables de instancia */
$jose = new Person();

$jose->name = 'Jose';
$jose->lastname = 'Lopez';


$carla = new Person();
$carla->name = 'Carla';
# echo $carla->see();

Person::$color = 'Azul';

$luren = new Client();
$luren->eat();


$gael = new Employee();
$gael->run();



?>