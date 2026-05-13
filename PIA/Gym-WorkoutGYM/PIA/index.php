<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/cosmo/bootstrap.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arima:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Workout GYM</title>
</head>
<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Workout GYM</a>
    </nav>

    <div class="container">
    <div class="container2">
      <div class="categoría">
      <img src="img/H1.jpg" class="card-img-top" alt="...">
      </div>
    </div>

    <div class="container2">
        <div class="categoría2">
            <h2>Registra tu proxima visita!</h2>
        </div>
        <form class="row g-3 needs-validation" method="POST">
                <div class="col-md-8 position-relative">
                <label for="InputNombre" class="form-label"></label>
                <input type="text" name="name" class="form-control" id="InputNombre"  placeholder="Nombre" required>
                </div>
                <div class="col-md-8 position-relative">
                <label for="InputApellido" class="form-label"></label>
                <input type="text" name="apellido" class="form-control" id="InputApellido" placeholder="Apellido" required>
                </div>
                <div class="col-md-8 position-relative">
                <label for="InputCorreo" class="form-label"></label>
                <div class="input-group has-validation">
                    <input type="email" name="correo" class="form-control" id="InputCorreo" 
                    aria-describedby="validationTooltipUsernamePrepend" placeholder="Correo" required>
                </div>
                </div>
                <div class="col-md-8 position-relative">
                <label for="InputTelefono" class="form-label"></label>
                <input type="number" name="telefono" class="form-control" id="InputTelefono" placeholder="Télefono" required>
                </div>
                <div class="col-md-8 position-relative">

                <br><label for="InputFecha" class="form-label"> Fecha de Visita</label><br><br>
                <input type="date" name="fecha" class="form-control" id="InputFecha" required>
                </div>
                <div class=" boton">
                <input type="submit" name="register" onclick='return enviarFormulario()' class="btn btn-primary" value="Enviar" />
                </div>
            </form>
            <br>
    </div>  
            <h1><?php 
                    include ("registrar.php");
                ?></h1>
    
    <script src="visita.js"></script>
</body>
</html>