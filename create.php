<?php
    include("conexion.php");
    if(isset($_POST['guardar'])){
        //Lo que recibo por método post, lo guardo en las variables que creo
        
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        //hacemos una consulta
        $query = "INSERT INTO primero (nombre,apellido,edad) VALUES ('$nombre','$apellido','$edad')";
        $resul = mysqli_query($conecc,$query);
        
        header("Location: main.php");
        

    }
?>