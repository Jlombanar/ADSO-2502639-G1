<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Universidad del Sur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-black p-2 text-white text-center">Agregar Estudiante</h1>
    <br>
    <div class="container">
        <form action="../CRUD/insertarDatos.php" method="POST">
        <div class="mb-3">
            <label class="form-label">Nombre del estudiante</label>
            <input type="text" class="form-control" name="nombrecompleto">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input type="text" class="form-control" name="edad">
        </div>
        <div class="mb-3">
            <label class="form-label">Correo del estudiante</label>
            <input type="text" class="form-control" name="correo">
        </div>
        
        <label for="">Docentes</label>
        <select class="form-select mb-3" name="docentes">
            <option selected disabled>--Seleccionar el Docente--</option>
            <?php
            include ("../Config/Conexion.php");

               
                }
            ?>
        </select>
        <label for="">Programas</label>
        <select class="form-select mb-3" name="asignatura">
            <option selected disabled>--Seleccionar la Asignatura--</option>
            <?php
          include ("../Config/Conexion.php");

                $sql = $conn->query("SELECT * FROM asignatura");


                while ($resultado = $sql->fetch_assoc()) {
                    echo "<option value='".$resultado['Id_a']."'>".$resultado['Nombre_a']."</option>";
                }
            ?>
        </select>
       
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Enviar</button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>
        
    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
