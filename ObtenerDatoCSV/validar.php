<?php
    if(isset($_POST['submit'])){

      if(empty($datoEnviar)){

        echo "<p>Introduce un C.P.</p>";

      }else{
        $fila = 1;
        $file = fopen("craneo.csv", "r"); //Modificar nombre de archivo CSV y ruta 

        if ($file) {
          while (($datos = fgetcsv($file, 1000, ","))) {
            $numero = count($datos); 
            for ($c=0; $c < $numero; $c++) {
              if($datos[$c] === $datoEnviar){
                echo  "</br>C.P.: " . $datos[$c] . "</br>Nombre: " . $datos[($c-2)] . "</br>Apellido: " . $datos[($c-1)] . "</br>" ;
              }
            }
            $fila++;
          }
          fclose($file);
        }
      }
    }
?>