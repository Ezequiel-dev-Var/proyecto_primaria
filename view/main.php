<?php
session_start();
$usuario=$_SESSION['correo'];
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

    <section class="inicio" id="inicio">
        <div class="content">
            <H3> Bienvenido </H3>
            <p>"La educación es el arma más poderosa que puedes usar para cambiar el mundo."</p>
        </div>

        <div class="image">
            <img src="../IMG/Thesis-rafiki (2).png" alt="">
        </div>
    </section>
</body>