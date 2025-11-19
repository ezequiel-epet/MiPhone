<?php
$conn = mysqli_connect("localhost", "root", "", "MiPhone");
$id = $_GET['id'];
$resultado = mysqli_query($conn, "SELECT * FROM productos WHERE id = $id");
$fila = mysqli_fetch_assoc($resultado);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update form</title>
    <link rel="stylesheet" href="estilos/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
      <h1 class="m-3">Editar Alumno</h1>
    <form action="actualizar.php" method="POST" class="mx-3 p-2" style="width: 1000px;">
        <input type="hidden" name="id" value="<?= $fila['id'] ?>">
        <div class="mb-3">
            <label for="nombre_producto" class="form-label">nombre_producto</label>
            <input type="text" name="nombre_producto" class="form-control" id="nombre_producto" value="<?= $fila['nombre_producto'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" name="precio" class="form-control" id="precio" value="<?= $fila['precio'] ?>" required>
        </div>
        <button type="submit" class="btn btn-outline-dark mx-3">Actualizar</button>
        <a class="btn btn-outline-dark mx-3" href="index.php" role="button">Volver</a>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>