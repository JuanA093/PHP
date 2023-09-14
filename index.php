<?php
    # Salida de datos
    echo "<h1>Codigo PHP</h1>";
    print("Hola mundo de PHP,\n");

    # Variables
    //$nombre = "Juan";
    $nombre = $_GET["nombre"];
    $texto = "Que diceee $nombre";
    $altura = $_GET["altura"];
    $resultadoTexto = "Su altura es: "."<h1>".$altura."</h1>"."<h1>".$texto."</h1>";

    echo $resultadoTexto;
    echo $resultadoTexto;
    $resultadoTexto = "<h1>"."cambiando el contenido de la variable"."</h1>";
    echo $resultadoTexto;

    #GET
    echo "<hr>";
    echo $_GET["nombre"];

    #Condiciones
    if($altura >= 170){
        echo '<h3 style="color:red;">Juan es alto</h3>'; 
    }
    else{
        echo '<h3 style="color:green;">Juan es alto</h3>'; 
    }

    #Funciones  #isset == existe

    function comprobarNombre(){
        if(isset($_GET["nombre"])){

        }

    }

    #Arrays

    $personas = ['Paco', 'Tomás', 'Touré', 'Peter'];
    echo $personas[2];

?>

<h1>Lista</h1>
<ul>
    <?php
        foreach($personas as $nombre){
            echo "<li>$nombre</li>";

        }
    ?>
</ul>