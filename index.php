<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de empleados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="shortcut icon" href="img/registro.png">
</head>
<body>
    <h1 style="text-align: center;">Registro de empleados</h1>
    <form action="arreglo.php" method="post">

        <?php

        $empleados = array('Empleado1'=> array('Nombre'=> 'nombre1', 'Apellido'=> 'apellido1', 'Cedula'=> 'cedula1', 'Trabajo'=> 'trabajo1', 'Departamento'=> 'departamento1', 'Sueldo'=> 'sueldo1'), 'Empleado2'=> array('Nombre'=> 'nombre2', 'Apellido'=> 'apellido2', 'Cedula'=> 'cedula2', 'Trabajo'=> 'trabajo2', 'Departamento'=> 'departamento2', 'Sueldo'=> 'sueldo2'), 'Empleado3'=> array('Nombre'=> 'nombre3', 'Apellido'=> 'apellido3', 'Cedula'=> 'cedula3', 'Trabajo'=> 'trabajo3', 'Departamento'=> 'departamento3', 'Sueldo'=> 'sueldo3'));

        $i = 0;

        foreach ($empleados as $empleado){
        echo '<br/>';
        echo '<h2 style="text-align: center;"> Empleado '.($i+1).'</h2>';
        $i++;
        foreach ($empleado as $dato => $respuesta) {
            ?>
            <div class="row mt-4 mx-5">
            <div class="container col-12 col-lg-6 p-3">
            <tr>
                <td><p><?php echo $dato;?>:</p></td>
                <td><input type="text" name="<?php echo $respuesta;?>" required></td>
            </tr>
        </div>
        </div>
        <?php
    }
    }
        ?>
        <div class="position-absolute top-95 start-50 translate-middle">
            <br/>
            <td><input type="submit" name="btn" value="Registrar"></td>
            <td><input type="reset" name="btn" value="Limpiar"></td>
        </div>
    </form>
</body>
</html>