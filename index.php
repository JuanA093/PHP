<?php
    if($_SERVER ["REQUEST_METHOD"] == "POST"){
        $dato1 = $_POST['dato1'];
        $dato2 = $_POST['dato2'];
        $dato3 = $_POST['dato3'];
        $dato4 = $_POST['dato4'];
        $dato5 = $_POST['dato5'];
        $dato6 = $_POST['dato6'];
        $dato7 = $_POST['dato7'];
        $dato8 = $_POST['dato8'];
        $dato9 = $_POST['dato9'];
        $dato10 = $_POST['dato10'];
    }

    $datos = array($dato1, $dato2, $dato3, $dato4, $dato5, $dato6, $dato7, $dato8, $dato9, $dato10);

    function calcularMedia($datos){

        $total = array_sum($datos);
        $media = $total / sizeof($datos);

        return $media;

    }

    function calcularMediana($datos){

        sort($datos);

        $mediana = $datos;
        $longitudDatos = count($mediana);
        $posicionMedia = floor($longitudDatos / 2);

        if($longitudDatos % 2 != 0){

            $valorMediana = $mediana[$posicionMedia];

            return $valorMediana;

        }else{

            $posicionIzquierda = ($longitudDatos / 2 ) - 1;
            $posicionDerecha = $longitudDatos / 2;
            $izquierda = $mediana[$posicionIzquierda];
            $derecha = $mediana[$posicionDerecha];

            $valorMediana = ($izquierda + $derecha) / 2;

            return $valorMediana;

        }
    }

    function calcularModa($datos){

        sort($datos);

        $repeticiones = array();

        foreach($datos as $i){
            if(isset($repeticiones[$i])){
                $repeticiones[$i]++;
            }else{

                $repeticiones[$i] = 1;

            }
        }

        $moda = array_search(max($repeticiones), $repeticiones);

        return $moda;

    }
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles.css">
    <title>Document</title>
</head>
<body>
    <section class="TablaResultados">
        <table>
            <tr>
                <th>Media</th>
                <th>Mediana</th>
                <th>Moda</th>
            </tr>
            
            <tr>
                <td><?php echo calcularMedia($datos)?></td>
                <td><?php echo calcularMediana($datos)?></td>
                <td><?php echo calcularModa($datos)?></td>
            </tr>
        </table>


    </section>
    
</body>
</html>