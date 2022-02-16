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
    <form action="index.php" method="post">
    <div class="row mt-4 mx-5">
    <div class="container col-12 col-lg-6 p-3">
    <?php
    if(isset($_POST['btn']) && $_POST['btn'] == 'Registrar') {

        $empleados = array('Empleado1'=> array('Nombre'=> $_POST['nombre1'], 'Apellido'=> $_POST['apellido1'], 'Cedula'=> $_POST['cedula1'], 'Trabajo'=> $_POST['trabajo1'], 'Departamento'=> $_POST['departamento1'], 'Sueldo'=> $_POST['sueldo1']), 'Empleado2'=> array('Nombre'=> $_POST['nombre2'], 'Apellido'=> $_POST['apellido2'], 'Cedula'=> $_POST['cedula2'], 'Trabajo'=> $_POST['trabajo2'], 'Departamento'=> $_POST['departamento2'], 'Sueldo'=> $_POST['sueldo2']), 'Empleado3'=> array('Nombre'=> $_POST['nombre3'], 'Apellido'=> $_POST['apellido3'], 'Cedula'=> $_POST['cedula3'], 'Trabajo'=> $_POST['trabajo3'], 'Departamento'=> $_POST['departamento3'], 'Sueldo'=> $_POST['sueldo3']));

        $i = 0;

        foreach($empleados as $empleado){
            echo "<h2> Empleado ".($i+1)."</h2>";
            $i++;
            foreach ($empleado as $dato => $respuesta) {
                echo "<p>".$dato . ": " . $respuesta."</p>";
            }
        }
        echo'<div class="position-absolute top-10 start-50 translate-middle">';
        echo'<input type="submit" name="btn" value="Regresar">';
        echo'</div>';
    }
    ?>
    </div>
</div>
</body>
</html>