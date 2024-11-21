<?php

require_once('../auto/conexion.php');
require_once('../auto/clases/auto.php');


    public static function leerautos($conexion)
    {
        $sql = "SELECT * FROM autos";
        $resultado = mysqli_query($conexion, $sql);

        if (mysqli_num_rows($resultado) > 0) {
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "ID: " . $fila["id"] . " -marca : " . $fila["marca"] . " - modelo: " . $fila["modelo"] . " - año: " . $fila["año"] . "<br>";
            }
        } else {
            echo "0 resultados";
        }
    }
    
?>