<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<
        <!--TRAER DATOS CATEGORIAS-->
        <label>Docente</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Docente">
            <option selected disabled>--Seleccione Docente--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql1 = "SELECT * FROM docentes WHERE Id_docente=".$row['Id_docente'];
                $resultado1 = $conn->query($sql1);

                $row1 = $resultado1->fetch_assoc();
//trae el id del docente inscrito
                echo "<option selected value='".$row1['Id_docente']."'>".$row1['nombre_d']."</option>";
//trae el ciclo
                $sql2 = "SELECT * FROM docentes";
                $resultado2 = $conn->query($sql2);
//me muestra los demas docentes
                while ($Fila = $resultado2->fetch_array()) {
                    echo "<option value='".$Fila['Id_docente']."'>".$Fila['nombre_d']."</option>";
                }
            ?>   
        </select>
        <label>Asignatura</label>
        <select class="form-select mb-3" aria-label="Default select example" name="Asignatura">
            <option selected disabled>--Seleccione la Asignatura--</option>
            <?php
                include ("../Config/Conexion.php");

                $sql3 = "SELECT * FROM asignatura WHERE Id_a=".$row['Id_a'];
                $resultado3 = $conn->query($sql3);

                $row3 = $resultado3->fetch_assoc();

                echo "<option selected value='".$row3['Id_a']."'>".$row3['Nombre_a']."</option>";

                $sql4 = "SELECT * FROM asignatura";
                $resultado4 = $conn->query($sql4);

                while ($Fila = $resultado4->fetch_array()) {
                    echo "<option value='".$Fila['Id_a']."'>".$Fila['Nombre_a']."</option>";
                }
            ?>   
        </select>

        <div class="mb-3">
            <label class="form-label">Nombre Completo</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $row['nombrecompleto']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input type="text" class="form-control" name="edad" value="<?php echo $row['edad']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Correo</label>
            <input type="text" class="form-control" name="correo" value="<?php echo $row['correo']; ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

</body>