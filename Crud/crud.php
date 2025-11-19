<?php
$conn = mysqli_connect("localhost","root","","MiPhone");
$resultado = mysqli_query($conn, "SELECT * FROM productos");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Base</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <h1 class="m-3">tabla productos</h1>
    <table class="table table-striped mx-3 p-2" style="width: 1000px;">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">nombre_producto</th>
            <th scope="col">precio</th>
        
        </tr>
    </thead>
    <tbody>
        <?php while ($fila = mysqli_fetch_assoc($resultado)){?>
            <tr>
                <td><?= $fila ['id']?></td>
                <td><?= $fila ['nombre_producto']?></td>
                <td><?= $fila ['precio']?></td>
             
                <td>
                    <a href="editar.php?id=<?= $fila['id'] ?>">Editar</a>
                   <a href="eliminar.php?id=<?= $fila['id'] ?>" onclick="return confirm('¿estas segura')">Eliminar</a>
                </td>
                </td>
            </tr>
        <?php } ?>
     </tbody>
     <a class="btn btn-outline-dark mx-3" href="agregar.php" role="button">Agregar producto</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      
</body>
</html>