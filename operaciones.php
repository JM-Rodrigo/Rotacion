<?php
        // operaciones
          $numero_lados = $_POST["lados"];  //numero de lados de la figura
          $angulo = $_POST['angulo'];       //angulo a rotar
          $coordenadasx=[];
          $coordenadasy = [];

        //   recolectar puntos cartecianos
          for($i = 0; $i <$numero_lados; $i++){
            $coordenadasx[] =$numerox =$_POST["valorx$i"];
            $coordenadasy[] =$numeroy =$_POST["valory$i"];
          }