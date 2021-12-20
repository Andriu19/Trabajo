<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$conexion=mysqli_connect("localhost","root",'',"o_nuestras_ferias");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$perfil=mysqli_fetch_array($resultado);

if($perfil('id_rol'==1)){ //administrador
    header("location:admin.php");

}elseif($perfil('id_rol'==2)){ //trabajador
header("location:trabajador.php");
}elseif($perfil('id_rol'==3)){ //cliente
header("location:cliente.php");
}
else{
    ?>
    <?php
    include("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
