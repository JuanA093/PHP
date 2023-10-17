<?php
    function conectar(){

       $servername = "127.0.0.1";
       $username = "root";
       $password = "";
       $database = "uninpahu";

       $conexion = mysqli_connect($servername, $username, $password, $database);
        
       if(!$conexion){
        die("Conexion fallida: ". mysqli_connect_error());
       }

       return $conexion;

    }

    function elQuery($query){
        $conexion = conectar();
        $result = mysqli_query($conexion, $query);
        return $result;
        desconectar($conexion);

    }

    function desconectar($conexion){
        mysqli_close($conexion); 
    }
?>