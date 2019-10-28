<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Administrar Pendientes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div style="margin:30px;">
    <h1 align="center">Asignacion de Pendientes</h1>
    <hr align="center">
    <?php
      //include 'conexion.php';
      $sql ="SELECT idTecnico,Nombre,ApellidoP,ApellidoM,Telefono FROM Tecnico";
      $link = mysqli_connect("201.148.107.83", "aresm2m_programa", "@Ar35_m2M", "aresm2m_desk");
      $res = mysqli_query($link,$sql);
        ?>
        <table class="table">
        <thead>
          <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Ape Paterno</th>
              <th>Ape Materno</th>
              <th>Telefono</th>
              <th>Asignar</th>
          </tr>
        </thead>
        <?php while ($row = mysqli_fetch_array($res)){ ?>
        <tbody>
          <tr>
            <td><?php echo $row['idTecnico'];?></td>
            <td><?php echo $row['Nombre'];?></td>
            <td><?php echo $row['ApellidoP'];?></td>
            <td><?php echo $row['ApellidoM'];?></td>
            <td><?php echo $row['Telefono'];?></td>
            <td><a href="asignar.php" class="btn btn-info" role="button">Asignar</a></td>
            <td><a href="asignaciones.php" class="btn btn-success"  role="button">Asignaciones</a></td>
          </tr>
      <?php
        }
    ?>
      </tbody>
    </table>
    </div>
  </body>
</html>
