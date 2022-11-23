<?php
require ('../model/conexion.php');
$enlace=$conexion;

    if(isset($_POST['enviarDatos'])){
        
        echo "entro";

        $año=$_POST['año'];
        $nota=$_POST['nota'];
        $materia=intval($_POST['materia']);

        $cargaDeDato = "INSERT INTO notas (año, nota, materias_id) values('$año', '$nota', '$materia')";

        echo $cargaDeDato;

        $consulta = $enlace->query($cargaDeDato);

    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1d22e229bb.js" crossorigin="anonymous"></script>
    <title>Primaria</title>
</head>
<body>
    <header>
        <a href="" class="logo">
            Primaria
        </a>

        <input type="checkbox" id="menu-bar">
        <label for="menu-bar" class="fa fa-bars"></label>
        <nav class="navbar">
            <a href="main.php">inicio</a>
            <a href="seguimiento.html">seguimiento</a>
            <a href="#ayuda">ayuda</a>
            <div class="user-btn-responsive">
                <a href="perfil-usuario.html"><img src="../IMG/user (1).png" alt="user btn"></a>
            </div>
        </nav>

        <div class="user-btn">
            <a href="perfil-usuario.html"><img src="../IMG/user (1).png" alt="user btn"></a>
        </div>
    </header>

    <section id="carga_notas">
            <h1 class="heading">Carga de notas</h1>
        <form action="#" name="formulario" method="POST">
            <div id="countainer_carga">

                <label for="" class="label_notas">Año:</label>
                <input type="text" class="input_carga" name="año" placeholder="ingrese el año">

                <label for=""class="label_notas">Nota:</label>
                <input type="number" class="input_carga" name="nota" placeholder="ingrese la nota">

                <label for=""class="label_notas">Materia:</label>
                <select class="input_carga" name="materia">
                    <option value="">seleccione la materia</option>
                    <option value="1">Matematica</option>
                    <option value="2">Lengua</option>
                </select>
                    <div class="botones">
                        <input type="submit" name="enviarDatos" placeholder="Enviar" class="btn">
                        <input type="reset" value="Borrar" class="btn">
                    </div>
            </div>
       </form>
    </section>

</body>