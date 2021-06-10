<?php
    $filasM=3;
    $columnasM=3;
	$filas = $_POST['Filas'];
	$columnas = $_POST['Columnas'];
	$grados = $_POST['Grados'];
    $angulo = ($grados* M_PI)/180;
    $A = [[round(cos($angulo),1),round(-sin($angulo),1),0],[round(sin($angulo),1),round(cos($angulo),1),0],[0,0,1]];

    echo("\nMatriz 1\n");

    for ($i=0; $i<$filasM; $i++){
		print($A[$i]);
	}

    echo("\nMatriz 2\n");
    $B=[];

    for ($i=0; $i<$filas;$i++){
		$B[0]*$columnas;
	}

    for ($i=0;$i<$filas;$i++){
		for ($j=0;$j<$columnas;$j++){
			$B[$i][$j] = float(input("Ingresa el valor (%d,%d): " % ($i,$j)));
		}
	}

    for ($i=0; $i<$filas; $i++){
		echo($B[$i]);
	}
    
    echo("\nResultado\n");

    $C=[];

    for ($i=0;$i<$filas;$i++){
		$C[0]*$columnas;
	}

    for ($i=0;$i<$filasM;$i++){
		for ($j=0;$j<$columnas;$j++){
			for ($k=0;$j<$columnasM;$j++){
				$C[$i][$j] += $A[$i][$k] * $B[$k][$j];
			}
		}
           
	}

    for ($i=0;$i<$filas;$i++){
		$R=[];
        for ($j=0;$j<$columnas;$j++){
			$R(round($C[$i][$j],2));
        echo($R);
		}
	}

?>