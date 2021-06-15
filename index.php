<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./style.css" />
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <title>Rotación</title>
</head>

<body>
  <header class="principal">
    <ul>
      <li><a href="https://github.com/Rodrigo-JM108/Rotacion/">Repositorio</a></li>
    </ul>
  </header>
  <section class="rotacion">
    <h1>Rotación</h1>
  </section>
  <section class="datos">
    <div class="card">
      <div>
        <form action="index.php" method='POST' class="Entradas">
          <input type="number" name="lados" id="lados" placeholder="Lados" />
          <input type="submit" name="btn1" id="button1" class="btn-material" placeholder="Enviar" />
        </form>
        <br>
        <br>
        <?php
        // leer el numero de lados para colocar los componentes dinamicos
        if (isset($_POST['btn1'])) {
          $n1 = $_POST['lados'];
          operacion($n1);
        }
        function operacion($lados)
        {
          echo "<form action='codigo.php' method='POST' class='Entradas'>";
          echo " <div>";
          for ($i = 0; $i < $lados; $i++) {
            echo " <input type='number' name='valorx", $i, "' id='numero' placeholder='x'>";
            echo " <input type='number' name='valory", $i, "' id='numero' placeholder='y'><br>";
          }
          echo "<br><br><input type='text' name='lados' id='lados' placeholder='Lados ingresados' value='", $lados, "'/>";
          echo "<input type='text' name='angulo' id='angulo' placeholder='Ingresa un angulo'/>";

          echo "<br><br><input type='submit' value='Enviar' name = 'btn2' class = 'btn-material'>";
          echo "</div></form>";
        }
        ?>
      </div>
    </div>
  </section>
</body>

</html>