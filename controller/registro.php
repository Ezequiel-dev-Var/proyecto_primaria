<?php
include ('../model/conexion.php');
if(isset($_POST['enviar'])){

    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $dni=$_POST['dni'];
    $gmail=$_POST['correo'];
    $contraseña=$_POST['contraseña'];

    $cargaDeDato = "INSERT INTO usuarios (nombre, apellido, DNI, gmail, contraseña, rol_id) VALUES ('$nombre', '$apellido', $dni, '$gmail', '$contraseña', 2)";
    $resul=mysqli_query($conexion,$cargaDeDato);
    if($resul){
        ?>
        <h3 class="ok">registro completado</h3>
        <?php
        header("location: ../view/register.html");
    }
}
?>