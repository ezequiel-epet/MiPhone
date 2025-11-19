<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <h1 class="m-3">Agregar producto</h1>

</head>
<body>
    <form action="insertar.php" method="POST" class="mx-3 p-2" style="width: 1000px;">
    <div class="mb-3">
        <label for="nombre" class="form-label">nombre_producto</label>
        <input type="text" name="nombre" class="form-control" id="nombre" required>
    </div>
    <div class="mb-3">
        <label for="edad" class="form-label">precio</label>
        <input type="number" name="edad" class="form-control" id="edad" required>
    </div>
    <button type="submit" class="btn btn-outline-dark">Guardar</button>
    <a class="btn btn-outline-dark mx-3" href="index.php" role="button">Volver</a>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-jlC1D7MgGQl27QbaqlwQq2ZA6C6MBthvENWjHnFYGFormFCozFSXQBwxHkO" crossorigin="anonymous"></script>
</body>
</html>