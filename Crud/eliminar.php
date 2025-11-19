<?php
$conn = mysqli_connect("localhost","root","","MiPhone");
$id = $_GET ['id'];
mysqli_query($conn, "DELETE FROM productos WHERE id=$id");
header("Location: index.php");
?>