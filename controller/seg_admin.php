<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/normalize.css">
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
            <a href="main.html">inicio</a>
            <a href="seguimiento.html">seguimiento</a>
            <a href="ayuda.html">ayuda</a>
            <div class="user-btn-responsive">
                <a href="perfil-usuario.html"><img src="IMG/user (1).png" alt="user btn"></a>
            </div>
        </nav>

        <div class="user-btn">
            <a href="perfil-usuario.html"><img src="IMG/user (1).png" alt="user btn"></a>
        </div>
    </header>

    <section class="seguimiento" id="seguimiento">
        <h1 class="heading"> SEGUIMIENTO </h1>
        <div class="caja-contenedor">

        <?php
include('conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablas_prueba/tabla.css">
    <title>Document</title>
</head>
<body>
  
    <table>
        <caption>alumno</caption>
        <thead>
          <tr>
            <th class="primary" scope="col">N°</th>
            <th scope="col">Materia</th>
            <th scope="col">Notas</th>
          </tr>
          <?php
            $sql="SELECT notas.nota, notas.id as nota_id, materias.id as materias_id, materias.nombre
            FROM notas LEFT JOIN materias ON materias.id=notas.materias_id
            WHERE notas.usuarios_id=7";
            $resultado=$conexion->query($sql);

            $cont=0;
            while($mostar=mysqli_fetch_array($resultado)){
                  $cont++;
            ?>
        </thead>
        <tbody>
          <tr>
            <th scope="row"><?php echo $cont?></th>
            <td><?php echo $mostar['nombre']?></td>
            <td><?php echo $mostar['nota']?></td>
          </tr>

          <?php
            }
          ?>
        </tbody>
        
      </table>
    
</body>
</html>
           
         </div>
    </section>

</body>