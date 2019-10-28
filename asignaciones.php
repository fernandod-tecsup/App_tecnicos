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
    <a href="tecnicos.php" class="btn btn-info">Regresar</a>
    <hr align="center">
    <?php
      //include 'conexion.php';
      $sql ="SELECT p.idAtencion_Pendiente AS IdAtencionPendiente, p.IdAgencia, a.Terminal, a.Nombre AS Agencia, a.Direccion,
      (SELECT NombreDepartamento FROM Departamento d WHERE a.idDepartamento = d.idDepartamento) AS Departamento,
      (SELECT NombreProvincia FROM Provincia pr WHERE a.idProvincia = pr.idProvincia) AS Provincia,
      (SELECT NombreDistrito FROM Distrito di WHERE a.idDistrito = di.idDistrito) AS Distrito,
      (SELECT NombreJRegional FROM Contactos_JefeRegionales jr LEFT JOIN Contactos_Promotoras pro ON jr.idContactos = pro.idContactos WHERE pro.idContactos_Promotoras = a.idContactos_Promotoras) AS NombreJefeRegional,
      (SELECT TelefonoJefeRegional FROM Contactos_JefeRegionales jr LEFT JOIN Contactos_Promotoras pro ON jr.idContactos = pro.idContactos_Promotoras WHERE pro.idContactos_Promotoras = a.idContactos_Promotoras) AS TelefonoJefeRegional,
      (SELECT CONCAT(ApellidoP, ' ', ApellidoM) AS Apellidos FROM Contactos_JefeRegionales jr LEFT JOIN Contactos_Promotoras pro ON jr.idContactos = pro.idContactos WHERE pro.idContactos_Promotoras = a.idContactos_Promotoras) AS ApellidosJefeRegional,
      IdTecnico, a.Canal, DATE_FORMAT(p.fechaProgramada, '%d %M %Y') AS FechaProgramada
      FROM Atencion_Pendiente p JOIN Agencia a ON a.idAgencia = p.idAgencia WHERE IdTecnico = 2 AND estado = 1";
      $link = mysqli_connect("201.148.107.83", "aresm2m_programa", "@Ar35_m2M", "aresm2m_desk");
      $res = mysqli_query($link,$sql);
        ?>
        <table class="table">
        <thead>
          <tr>
              <th>Id Atencion</th>
              <th>Id Agencia</th>
              <th>Terminal</th>
              <th>Agencia</th>
              <th>Direccion</th>
              <th>Departamento</th>
              <th>Provincia</th>
              <th>Distrito</th>
              <th>Jefe Regional</th>
              <th>Tel. Jefe Reg.</th>
              <th>Ape. Jefe Regional</th>
              <th>id tecnico</th>
              <th>Canal</th>
              <th>Fecha Programada</th>
          </tr>
        </thead>
        <?php while ($row = mysqli_fetch_array($res)){ ?>
        <tbody>
          <tr>
            <td><?php echo $row['IdAtencionPendiente'];?></td>
            <td><?php echo $row['IdAgencia'];?></td>
            <td><?php echo $row['Terminal'];?></td>
            <td><?php echo $row['Agencia'];?></td>
            <td><?php echo $row['Direccion'];?></td>
            <td><?php echo $row['Departamento'];?></td>
            <td><?php echo $row['Provincia'];?></td>
            <td><?php echo $row['Distrito'];?></td>
            <td><?php echo $row['NombreJefeRegional'];?></td>
            <td><?php echo $row['TelefonoJefeRegional'];?></td>
            <td><?php echo $row['ApellidosJefeRegional'];?></td>
            <td><?php echo $row['IdTecnico'];?></td>
            <td><?php echo $row['Canal'];?></td>
            <td><?php echo $row['FechaProgramada'];?></td>
          </tr>
      <?php
        }
    ?>
      </tbody>
    </table>
    </div>
  </body>
</html>
