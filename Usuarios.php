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
                    echo "<div class='tabla'>
                                <table>
                                    <thead>
                                        <tr>
                                            <th>No_Identificacion</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Correo</th>
                                            <th>Telefono</th>
                                            <th>Direccion</th>    
                                         </tr>   
                                    </thead>
                                    <tbody>
                            ";
                while($row = mysqli_fetch_array($result)){
                                        
                    echo "<tr>";
                        echo "<td>".$row["No_Identificacion"]."</td>";
                        echo "<td>".$row["Nombres"]."</td>";
                        echo "<td>".$row["Apellidos"]."</td>";
                        echo "<td>".$row["Correo"]."</td>";
                        echo "<td>".$row["Telefono"]."</td>";
                        echo "<td>".$row["Direccion"]."</td>"."<br>";
                        echo "<td>". "<form action='' method='post' class='form'>
                        <input  type='hidden' name='No_Identificacion' value='" . $row['No_Identificacion']. "'>
                        <input  type='hidden' name='Nombres' value='" . $row['Nombres']. "'>
                        <input  type='hidden' name='Apellidos' value='" . $row['Apellidos']. "'>
                        <input  type='hidden' name='Correo' value='" . $row['Correo']. "'>
                        <input  type='hidden' name='Telefono' value='" . $row['Telefono']. "'>
                        <input  type='hidden' name='Direccion' value='" . $row['Direccion']. "'>
                        <button type='submit' class='eliminar' name='eliminar'>Eliminar</button>
                        </form" . "</td>";
                    echo "</tr>";                                
                }            
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


            $query = "DELETE FROM usuarios WHERE No_Identificacion='$No_Identificacion'";

            $result = elQuery($query);


            if($result === TRUE){
                
                echo "<div id='msg' class='msg' style='color: #670002; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold;' >Se han eliminado los datos correctamente!</div>";
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

        if(isset($_POST["actualizar"])){

            $query = "UPDATE usuarios SET Nombres = '$Nombres', Apellidos = '$Apellidos', Correo = '$Correo', Telefono = '$Telefono', Direccion = '$Direccion' WHERE No_Identificacion = '$No_Identificacion'";    
            $result = elQuery($query);

            if ($result){

                echo "<div id='msg' class='msg' style='color: green; text-align: center; margin-top: 50px; font-size: 20px; font-weight: bold;'>Datos actualizados correctamente!</div>";
                echo "<script>
                    setTimeout(function(){

                        var mensajeExitoso = document.getElementById('msg');

                        if(mensajeExitoso){
                            mensajeExitoso.style.display = 'none';
                        }
                    },4000); //3s dilay
                </script>";
            }
        }


    }
    
    
?>