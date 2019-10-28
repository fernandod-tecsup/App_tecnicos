<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Asignacion de Pendiente</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <div style="margin:30px;">
      <h1 align="center">Ingresar Datos del Pendiente</h1>
      <a href="tecnicos.php" class="btn btn-info">Regresar</a>
      <hr align="center">
      <form class="" action="index.html" method="post">
        <div class="form-group">
          <label for="exampleFormControlInput1">Direccion: </label>
          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Direccion....">
        </div>
        <?php
          $sql ="SELECT Nombre FROM Tecnico";
          $link = mysqli_connect("201.148.107.83", "aresm2m_programa", "@Ar35_m2M", "aresm2m_desk");
          $res = mysqli_query($link,$sql);
        ?>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Tecnico: </label>
          <?php while ($row = mysqli_fetch_array($res)){ ?>
            <select class="form-control" id="exampleFormControlSelect1">
              <option><?php echo $row['Nombre'];?></option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </div>
      </form>
    </div>

  </body>
</html>
