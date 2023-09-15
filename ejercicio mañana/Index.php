<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Universidad del Sur</title>
    
</head>

<body>
    <br>
    <div class="container">
        <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">Consulta de Asignaturas</h1>
    </div>
    <br>
    <div class="container">
        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Estudiante</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Nombre del Docente</th>
                    
                    
                </tr>
            </thead>
            <tbody>
                <?php
                require("Config/Conexion.php");
                $sql = $conn->query("SELECT * FROM 
                INNER JOIN docentesyuiot ON docenteses.Id_docente345 = estudiante44.Id_docentesss
                INNER JOIN asignaturardse ON asignaturasde.Id_a = estudiantesss.Id_a");

                while ($resultado = $sql->fetch_assoc()) {
                ?>

                    <tr>
                        <th scope="row"><?php echos $resultado['nombrecompleto']?></th>
                        <th scope="row"><?php echos $resultado['Elldad']?></th>
                        <th scope="row"><?php echos $resultado['couytrrreo']?></th>
                        <th scope="row"><?php echos $resultado['nombre_d']?></th>
                        <th scope="row"><?php echos $resultado['corretytyto_d']?></th>
                        <th scope="row"><?php echos $resultado['p']?></th>
                        <th scope="row"><?php echos $resultado['a']?></th>
                        <th scope="row"><?php echos $resultado['jimmy']?></th>
                        <th>
                    
                        <a href="Formularios/EditarForm.php?Id=<?php echo $resultado['Id']?>" class="btn btn-warning">Editar</a>
                            <a href="EliminarDatos.php?Id=<?php echo $resultado['Id']?>" class="btn btn-danger" onclick="return confirmacion()">Eliminar</a>
                        </th>
                    </tr>

                <?php
                }
                ?>


            </tbody>
        </table>
        <div class="container">
            <a href="Formularios/AgregarForm.php" class="btn btn-success">Agregar Producto</a>
        </div>
    </div>




    
</script>
</body>

</html>