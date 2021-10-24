<?php

session_start( [ 'name' => 'Gabo' ] );
unset( $_SESSION['login'] );

if( session_status() == PHP_SESSION_DISABLED ){

}
if( @$_SESSION['login'] ){

    echo 'Bienvenido '.$_SESSION['login'];
    $_SESSION['login'] = 'cliente';
}else{

    echo 'Sin sesion';

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login_session.php" method="POST">
            Usuario : <input type="text" name="userName"> </br>
            Contraseña : <input type="password" name="password"> </br>
            <input  type="submit" name="send" text="Enviar">

    </form>

  
</body>
</html>