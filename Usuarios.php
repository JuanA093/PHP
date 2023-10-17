<?php
    include "index.php";
    require_once "conexion.php";
    
    

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        
        $No_Identificacion = $_POST["No_Identificacion"];
        $Nombres = $_POST["Nombres"];
        $Apellidos = $_POST["Apellidos"];
        $Correo = $_POST["Correo"];
        $Telefono = $_POST["Telefono"];
        $Direccion = $_POST["Direccion"];

        if(isset($_POST["buscar"])){
            
            $query = "SELECT * FROM usuarios";

            $result = elQuery($query);

            if($result){
                while($row = mysqli_fetch_array($result)){
                    echo "Nombre: ".$row["Nombres"]." ";
                    echo "Apellido: ".$row["Apellidos"]." ";
                    echo "Correo: ".$row["Correo"]." ";
                    echo "Telefono: ".$row["Telefono"]." ";
                    echo "Direccion: ".$row["Direccion"]." ";
                    echo "No_Identificacion: ".$row["No_Identificacion"]."<br>";
                }    

            }else{

                echo "Error al consultar la info :(" . mysqli_error($conexion);

            }       
        }    

        if(isset($_POST["enviar"])){


            $query = "INSERT INTO usuarios (No_Identificacion, Nombres, Apellidos, Correo, Telefono, Direccion) VALUES ($No_Identificacion, '$Nombres', '$Apellidos', '$Correo', '$Telefono', '$Direccion')";
    
            $result = elQuery($query);


            if ($result === TRUE){
                echo "<div id='msg' class='msg' style='color: #ffff; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold;'>Datos almacenados correctamente. Bienvenid@ $Nombres!</div>";
                echo "<script>
                    setTimeout(function(){

                        var mensajeExitoso = document.getElementById('msg');

                        if(mensajeExitoso){
                            mensajeExitoso.style.display = 'none';
                        }
                    },4000); //3s dilay
                </script>";
            }else{
                echo "No se almacenaron los datos, error " . mysqli_error($conexion);
            }    

        }

        if(isset($_POST["eliminar"])){

            $query = "DELETE FROM usuarios";

            $result = elQuery($query);


            if($result === TRUE){
                echo "<div id='msg' class='msg' style='color: red; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold;' >Se han eliminado los datos correctamente!</div>";
                echo "<script>
                    setTimeout(function(){

                        var mensajeExitoso = document.getElementById('msg');

                        if(mensajeExitoso){
                            mensajeExitoso.style.display = 'none';
                        }
                    },4000); //3s dilay
                </script>";
            }else{
                echo "No se han podido eliminar los datos, verifique e intente nuevamente" . mysqli_error($conexion);
            }
        }

    }   
?>