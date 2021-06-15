<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>Rotación</title>
</head>

<body>
    <header class="principal">
        <ul>
            <li><a href="./rotacion.php">Rotación</a></li>
        </ul>
    </header>
    <section class="rotacion">
        <h1>Resultados</h1>

    </section>
    <section class='tabs'>

        <?php
        function mostrar_tabla($matriz1, $matriz2, $nombreTabla)
        {
            echo "";
            echo "<table class='tablas'>";
            echo "<caption>$nombreTabla</caption>";
            echo "<tr class='table-head'><th>x</th><th>y</th></tr>";
            for ($j = 0; $j < count($matriz1); $j++) {
                
                echo "<tr><td>$matriz1[$j]</td><td>$matriz2[$j]</td></tr>";
            }
            echo "</table>";
        }
        if (isset($_POST['angulo']) && isset($_POST['lados'])) {
            $angulo = $_POST['angulo'];       //angulo a rotar
            $coordenadasx = [];
            $coordenadasy = [];
            $relleno = [];
            $numero_lados = $_POST["lados"];  //numero de lados de la figura
            $cosenos = cos($angulo);
            $senos = sin($angulo);

            //recolectar puntos cartecianos de ./index.php
            for ($i = 0; $i < $numero_lados; $i++) {
                array_push($coordenadasx, $_POST["valorx$i"]);
                array_push($coordenadasy, $_POST["valory$i"]);
                array_push($relleno, 1);
            }
            $a = array(
                array($cosenos, -$senos, 0),
                array($senos, $cosenos, 0),
                array(0, 0, 1)
            );
            $b = array($coordenadasx, $coordenadasy, $relleno);

            $c = array();
            $filasA = count($a);
            $columnasA = count($a[0]);
            $filasB = count($b);
            $columnasB = count($b[0]);

            if ($filasA < 1 || $columnasA < 1 || $filasB < 1 || $columnasB < 1 || $columnasA != $filasB) {
                echo "<strong class ='Error'>ERROR: NO SE PUEDEN MULTIPLICAR</strong>";
            } else {
                for ($i = 0; $i < $filasA; $i++) {
                    array_push($c, array());
                    for ($j = 0; $j < $columnasB; $j++) {
                        array_push($c[$i], 0.0);
                        for ($k = 0; $k < $filasB; $k++) {
                            $c[$i][$j]  += ($a[$i][$k] * $b[$k][$j]);
                        }
                        $c[$i][$j] = round($c[$i][$j],2);
                    }
                }
                mostrar_tabla($b[0],$b[1],"Original");
                mostrar_tabla($c[0],$c[1],"Resultado"); 
            }
        }
        ?>

    </section>
</body>
</body>

</html>