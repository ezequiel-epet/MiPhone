<?php
$conn = mysqli_connect("localhost", "root", "", "MiPhone");
$id = $_POST['id'];
$nombre_producto = $_POST['nombre_producto'];
$precio= $_POST['precio'];
mysqli_query($conn, "UPDATE alumnos SET nombre_producto='$nombre_producto', precio='$precio' WHERE id=$id");
header("Location: index.php");
?>