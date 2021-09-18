<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="form.php" method="POST">
        <table>

            <?php
                $array = array('name'=>'Nombre', 'lastname'=>'Apellido','adress'=>'Direccion','phone'=>'Telefono');

                foreach ($array as $key => $value):
            ?>
                    <tr >
                        <td><?php echo $value ?></td>
                        <td><input type="text" name="<?php echo $key ?>"></td>
                    </tr>
            <?php
                endforeach;
            ?>
            <tr>
                <td>Sexo</td>
                <td>
                    <input type="radio" name="sex" value="Mujer">Mujer 
                    <input type="radio" name="sex" value="Hombre"> Hombre
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Submit" value="guardar">
                </td>
            </tr>
        </table>
    </form>

    <h1>  <?php echo " {$_GET['answer']} gracias {$_GET['name']}"; ?></h1>
</body>
</html>