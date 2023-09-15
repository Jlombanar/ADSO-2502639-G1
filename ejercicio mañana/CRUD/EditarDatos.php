<?php

include_once("../Config/Conexion.php");

    

    $sql = "UPDATE estudiante SET 
                    Id_a='".$Materia."',
                    Id_docente='".$Docente."',
                    nombrecompleto='".$Nombre."',
                    edad='".$Edad."',
                    correo='".$Correo."'
                     WHERE Id=".$id."";

    if ($resultado = $conn->query($sql)) {
        header("location:../Index.php");
    }
