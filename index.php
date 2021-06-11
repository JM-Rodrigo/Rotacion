<!DOCTYPE html>
<html lang="es">
<head>
  <title>Rotación</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

<!-- agregamos la hoja de estilos de bootstrap -->
</head>
<body>
<br>
<br>
<br>
  <div class="position-relative">
  <divclass="position-absolute top-50 start-0 translate-middle-x">
  <form action="index.php" method="POST" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="col-12">
    <input type="text" name="numero1" id="numero" class="form-control"placeholder="Lados">
  </div>
  <div class="col-12">
  <input type="submit" value="Enviar" class="btn btn-primary" name = "btn1">
  </div>
</form>
  </div>
  </div>
<br>
<br>
<?php
  // leer el numero de lados para colocar los componentes dinamicos
  if (isset($_POST['btn1']))
  {
    $n1=$_POST['numero1'];
    operacion($n1);
  }
  function operacion($lados){
      
    for ($i = 0 ; $i<$lados ; $i++){
      echo "<form action='index.php' method='POST' class='row row-cols-lg-auto g-3 align-items-center'>";
      echo " <div class='col-12'>";
      echo " <input type='number' name='valorx",$i,"' id='numero' class='form-control' placeholder='x'>";
      echo "</div><div class='col-12'>";
      echo " <input type='number' name='valory",$i,"' id='numero' class='form-control' placeholder='y'>";
      echo "</div></form>";
    }
    echo "<br><form action='index.php' method='POST' class='row row-cols-lg-auto g-3 align-items-center'>";
    echo "<div class='col-12'>";
    echo "<input type='text' name='numero1' id='numero' class='form-control'placeholder='Angulo'>";
    echo "</div></form><div class='col-12'>";
    echo "<br><input type='submit' value='Enviar' class='btn btn-info' name = 'btn2'></div>";
  }
  
?>

</form>

</div>
<div class="col-md-4"></div>
</div>
</body>
</html>