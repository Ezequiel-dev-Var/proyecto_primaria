<?
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];

session_start();

$_SESSION['correo']=$correo;

include('conexion.php');

$consultas="SELECT*FROM usuarios where gmail='$correo' and contraseña='$contraseña'";

$resultado= $conexion->query($consultas);

$tomaDatos=mysqli_num_rows($resultado);

if($tomaDatos){
    header("location:../view/main.php");
}else{
    ?>
    <?php
    include("../view/index.php");
    echo "el usuario o contraseña son incorrectos";
}
msqli_free_result($resultado);
msqli_close($conexion);
?>