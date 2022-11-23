<?php
include('../model/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../tablas_prueba/tabla.css">
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