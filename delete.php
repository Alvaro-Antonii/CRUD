<?php 
include("conexion.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM primero WHERE id = ($id)";
    $resul = mysqli_query($conecc,$query);

    header("Location: main.php");
}


?>