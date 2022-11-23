<?php
include('../model/conexion.php');

if(isset($_GET['cerrar_sesion'])){
    session_unset();

    session_destroy();
}

if(isset($_SESSION['rol'])){
    switch($_SESSION['rol']){
        case 1:
            header('location: ../view/admin.php');
        break;


        case 2:
            header('location: ../view/main.php');
        break;

        default:
    }
}

    if(isset($_POST['correo']) && isset($_POST['contraseña'])){
        $correo=$_POST['correo'];
        $contraseña=$_POST['contraseña'];

        $consultas="SELECT*FROM usuarios where gmail='$correo' and contraseña='$contraseña'";
        $resultado= $conexion->query($consultas);

        $tomaDatos=mysqli_fetch_array($resultado);
        if($tomaDatos){
            
            //pudo validar los datos
            $rol= $tomaDatos[6];
            $_SESSION['rol'] = $rol;
            switch($_SESSION['rol']){
                case 1:
                    header('location: ../view/admin.php');
                break;
        
        
                case 2:
                    header('location: ../view/main.php');
                break;
        
                default:
            }
        }else{ 
            header('location: ../view/index.html');
            ?>
            <h1 id="rol">cdbcgdyh</h1>
            <?php
            
        }
    }
    session_start();
    $_SESSION['correo']=$correo;
?>