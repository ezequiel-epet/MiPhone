<?php
 $conn = mysqli_connect("localhost", "root", "", "MiPhone");
$nombre = $_POST['id'];
$edad = $_POST['nombre_productos'];
$curso = $_POST['precio'];
mysqli_query($conn, "INSERT INTO productos(nombre_producto, precio)VALUES ('$nombre_producto','$precio)");
header("Location: index.php");
?>