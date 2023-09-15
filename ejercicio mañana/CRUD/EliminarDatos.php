<?php
      include ("../Config/Conexion.php");

   
    $query = mysqli_query($conn,$sql);
    if ($query === TRUE) {
        header("Location:Index.php");
    }

?>