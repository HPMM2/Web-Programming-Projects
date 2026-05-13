<?php
    include ("con_db.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['name']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['correo']) >= 1 && strlen($_POST['telefono']) >= 1 
        && strlen($_POST['fecha']) >= 1){
            $name = trim($_POST['name']);
            $apellido = trim($_POST['apellido']);
            $correo = trim($_POST['correo']);
            $telefono = trim($_POST['telefono']);
            $fecha = trim($_POST['fecha']);
            $consulta = "INSERT INTO datos(name, apellido, correo, telefono, fecha) VALUES ('$name','$apellido','$correo','$telefono','$fecha')";
            $resultado = mysqli_query($conex, $consulta);
            if ($resultado){
                ?>
                    <h3 class="success">Registrado correctamente</h3>
                <?php
            }else{
                ?>
                <h3 class="error">Ha ocurrido un error</h3>
            <?php
            }
        }
    }
?>