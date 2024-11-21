<?php
require_once('../auto/conexion.php');
require_once('../auto/clases/Estudiante.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $año = $_POST['año'];

    $estudiante = new auto($conexion, $marca, $modelo, $año);
    $estudiante-> registrar_auto();
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Registrar auto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center pt-5">Registrar Estudiante</h1>
    <form method="POST" class="w-50 mx-auto p-5 ">
        <div class="mb-3">
            <label for="marca" class="form-label">marca</label>
            <input type="text" class="form-control" name="marca" placeholder="marca" required>
        </div>
        <div class="mb-3">
            <label for="modelo" class="form-label">modelo</label>
            <input type="number" class="form-control" name="modelo" placeholder="modelo" required>
        </div>
        <div class="mb-3">
            <label for="año" class="form-label">año</label>
            <input type="email" class="form-control" name="año" placeholder="año" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>
