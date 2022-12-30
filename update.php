<?php 
include("conexion.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "SELECT * FROM primero WHERE id = ('$id')";
    $resul = mysqli_query($conecc,$query);
    if(mysqli_num_rows($resul)==1){
        $row = mysqli_fetch_array($resul);
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $edad = $row['edad'];

    }
}

if(isset($_POST['guardar'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $query = "UPDATE primero set nombre = '$nombre',apellido = '$apellido',edad = '$edad' WHERE id = $id" ;

    $resul = mysqli_query($conecc,$query);

    header("Location: main.php");
}




?>
<?php include("header.php") ?>
<div class="container mt-5">
        <div class="row">
            <div class="col-3 mx-auto">
                <form action="update.php?id=<?php echo $_GET['id']?>" method="POST">
                    <h1>Modificar</h1>
                    
                    <input class="form-control mb-3" type="text"  name="nombre" value="<?php echo $nombre ?>">
                    <input class="form-control mb-3" type="text"  name="apellido" value="<?php echo $apellido?>">
                    <input class="form-control mb-3" type="text"  name="edad" value="<?php echo $edad?>">
                    <input type="submit" class="btn btn-primary" name="guardar">
                </form>
            </div>
        </div>
</div>
<?php include("footer.php")?>