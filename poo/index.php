<?php
declare (strict_types = 1);
# require('./person.php'); # establece que el codigo del archivo invocado es requerido (obligatorio)
# include() # si no encuentra el error retorna warning no detiene la ejecucion
require_once('./person.php'); # permite la carga de un archivo una sola vez
# include_once() # permite la inclusion de un archivo una sola vez


require_once('./client.php');
require_once('./employee.php');
require_once('./provider.php');
/*** variables de instancia */
/**** Person es una clase abstracta por lo que dejo de ser instanciable */
# $jose = new Person();

# $jose->name = 'Jose';
# $jose->lastname = 'Lopez';


# $carla = new Person();
# $carla->name = 'Carla';
# echo $carla->see();

# Person::$color = 'Azul';

$client = new Client();
$employee = new Employee();
$provider = new Provider();


# $client->eat();
$client->setEmail('correo@gmail.com');
# echo $client->getEmail();


# $client->pay();
# echo $client->plus( 100, 30 );
# $client->run();
# $employee->run();
# $provider->run();
$client->setName('juanito');
$provider->setName('allan');
$employee->setName('felicitame a juanito');
$client->say($employee);


?>