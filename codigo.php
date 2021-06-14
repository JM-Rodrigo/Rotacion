<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html"; charset=UTF-8>
        <title>Rotacion</title>  
    </head>
    <body>

        <form method="POST">
<?php
    if (isset ($_POST['filasB']) && isset ($_POST['columnasB']))
    {
     
        $filasA=3;
        $columnasA=3;
        $filasB=intval($_POST['filasB']);
        $columnasB= intval($_POST['columnasB']);

        if ($filasA<1 || $columnasA<1 || $filasB<1 ||$columnasB<1 || $columnasA != $filasB)
        {
            echo 'Las matrices no se puden multiplicar.<br><br>';
            unset ($_POST['filasB']);
            unset ($_POST['columnasB']);
            unset ($_POST['grados']);

        }else{
    ?>
            Valores de la matriz A:
            <table border="1" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr aling="center"><td>&nbsp;&nbsp;<b>A</b>&nbsp;&nbsp;</td>
    <?php
    $grados=$_POST['grados'];
    $angulo = ($grados* M_PI)/180;
    $a = array([round(cos($angulo),1),round(-sin($angulo),1),0],[round(sin($angulo),1),round(cos($angulo),1),0],[0,0,1]);
    $filasA = count($a);
    $columnasA = count($a[0]);
   
    for($j=0; $j<$columnasA; $j++)
        echo "<td><b>$j</b></td>";
    echo '</tr>';

    for($i=0; $i<$filasA; $i++)
    {
        echo "<tr aling=\"center\"><td><b>$i</b></td>";
        for($j=0; $j<$columnasA; $j++)
           echo '<td>&nbsp;&nbsp;' . $a[$i][$j] . '&nbsp;&nbsp;</td>';
            echo '</tr>'; 
    }

    ?>
                </tbody>
            </table>

            Ingrese los elementos de la matriz B:
            <table border="1" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr aling="center"><td>&nbsp;&nbsp;<b>B</b>&nbsp;&nbsp;</td>
    <?php
    for($j=0; $j<$columnasB; $j++)
        echo "<td><b>$j</b></td>";
    echo '</tr>';
    for($i=0; $i<$filasB; $i++)
    {
        echo "<tr aling=\"center\"><td><b>$i</b></td>";
        for($j=0; $j<$columnasB; $j++)
            echo '<td><input name="b[' . $i . '][' . $j . ']" type="text" size="4"></td>';
        echo '</tr>';
    }

    ?>
                </tbody>
            </table>
    <?php
  
        }
    }
    
    if (!isset ($_POST['filasB']) || !isset ($_POST['columnasB'])|| !isset ($_POST['grados']))
    {
    ?>
    
       <table>
            <tbody>
                <tr>
                    <td>Ingrese el numero de  filas de la matriz B :</td>
                    <td><input type="text" name="filasB"  size="4"></td>
                </tr>
                <tr>
                    <td>Ingrese el numero de  columnas de la matriz B:</td>
                    <td><input type="text" name="columnasB"  size="4"></td>
                </tr>
                <tr>
                    <td>Ingrese el angulo:</td>
                    <td><input type="text" name="grados"  size="4"></td>
                </tr>
            </tbody>
        </table>
    <?php
    }
    ?>
            <input type="submit" value="Continuar">
        </form>
        <br>
    <?php
        
        if (isset ($_POST['a']) && isset ($_POST['b']))
        {
            $a=$_POST['a'];
            $b=$_POST['b'];
            $filasA = count($a);
            $columnasA = count($a[0]);
            $filasB = count($b);
            $columnasB = count($b[0]);
            $c = array();

            for($i=0; $i<$filasA; $i++)
            {
                array_push($c, array());
                for($j=0; $j<$columnasB; $j++)
                {
                    array_push($c[$i], 0.0);
                    for($k=0; $k<$filasB; $k++)
                    {
                        $c[$i][$j] += $a[$i][$k] * $b[$k][$j];

                    }
                }
            }
    ?>
        Resultado:
        <table border="1" cellpadding="0" cellspacing="0">
            <tbody>
    <?php
        
        for($i=0; $i<$filasA; $i++)
        {
            echo '<tr aling="center">';
            for($j=0; $j<$columnasB; $j++)
               echo '<td>&nbsp;&nbsp;' . $c[$i][$j] . '&nbsp;&nbsp;</td>';
            echo '</tr>';
        }
    ?>
        
        </tbody>
            </table>
    <?php
        }
    ?>    

    </body> 
</html>