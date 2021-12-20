<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/cabecera.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">
</head>
<body>
   <form action="validar.php" method="post">

   <h1 class="animate__animated animate__backInLeft">NF IMPRESOS</h1>

   <p>Nombre<input type="text" placeholder="ingrese su nombre" name="nombre"></p><br>

   <p>Apellido Paterno<input type="text" placeholder="ingrese su apellido paterno" name="apellido paterno"></p><br>

   <p>Apellido Materno<input type="text" placeholder="ingrese su apellido materno" name="apellido materno"></p><br>

   <p>Usuario <input type="text" placeholder="ingrese su usuario" name="usuario"></p><br>

   <p>Email<input type="text" placeholder="ingrese su email" name="emial"></p><br>

   <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="contraseña"></p><br>
   
   <p>Confirmar contraseña <input type="password" placeholder="repita contraseña" name=" confirmar contraseña"></p><br>


   <input type="submit" value="Registrar">
   <div class="form-group">
   <div class="col-md-12 control">
  <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
Ya cuentas con una cuenta! <a href="index.php">Iniciar aquí</a>
                                         </div>
                                        </div>
                                    </div>   
   
  </body>
</html>