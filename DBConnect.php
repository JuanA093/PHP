<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $No_Identificacion = $_POST["No_Identificacion"];
        $Nombres = $_POST["Nombres"];
        $Apellidos = $_POST["Apellidos"];
        $Correo = $_POST["Correo"];
        $Telefono = $_POST["Telefono"];
        $Direccion = $_POST["Direccion"];

        conectarBD($No_Identificacion, $Nombres, $Apellidos, $Correo, $Telefono, $Direccion);

    }

    function conectarBD($No_Identificacion, $Nombres, $Apellidos, $Correo, $Telefono, $Direccion){
        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "uninpahu";

        $connect = new mysqli($servername, $username, $password, $database);



        if($connect->connect_error){
            die("Conexion fallida" . mysqli_connect_error());
        }

        
        $conexionBD = "INSERT INTO usuarios (No_Identificacion, Nombres, Apellidos, Correo, Telefono, Direccion) VALUES ($No_Identificacion, '$Nombres', '$Apellidos', '$Correo', '$Telefono', '$Direccion')";

        if($connect->query($conexionBD) === TRUE) {
            echo "<div id ='exito'>Datos almacenados con exito. Bienvenid@ $Nombres!</div>";
            echo "<script>
                setTimeout(function(){

                    var mensajeExito = document.getElementById('exito');
                
                    if(mensajeExito){
                        mensajeExito.style.display = 'none';
                    }
                }, 3000); //3s
            </script>";

        }else{
            echo "No se han podido almacenar los datos" . mysqli_connect_error();
        }

        mysqli_close($connect);

    }
?>



