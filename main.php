<?php include("conexion.php");?>

<?php include("header.php") ?>
    


    <div class="container mt-5 ">
        <div class="row">
            <div class="card card-body col-3">
                <form action="create.php" method="POST"  >
                    <h1>Ingresar los datos</h1>
                        
                    <input class="form-control mb-3" type="text"  placeholder="Nombre" name="nombre" required>
                          
                    
                    <input class="form-control mb-3" type="text" placeholder="Apellido" name="apellido" required>
                    <input class="form-control mb-3" type="number" min="10" max ="18" placeholder="Edad" name="edad" required>
                    <input type="submit" class="btn btn-primary" name="guardar">
                </form>
            </div>
            <div class="col-8">
                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDO</th>
                            <th>EDAD</th>
                            <th>ACCIÓN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = "SELECT * FROM primero";
                        $resul = mysqli_query($conecc,$query);

                        while($row = mysqli_fetch_array($resul)){?>
                            <tr>
                                <td> <?php echo $row['id']?></td>
                                <td> <?php echo $row['nombre']?></td>
                                <td> <?php echo $row['apellido']?></td>
                                <td> <?php echo $row['edad']?></td>
                                
                                <td>
                                    
                                    <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id'] ?>">Eliminar</a>
                                    <a class="btn btn-secondary" href="update.php?id=<?php echo $row['id']?>">Modificar</a>
                                </td>
                            </tr>
                            

                        <?php } ?>    
                        
                    </tbody>
                
                </table>
            </div>
        </div>
    </div>

    <script src="libreria/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>