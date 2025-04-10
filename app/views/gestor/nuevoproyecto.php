<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Proyecto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Crear Nuevo Proyecto</h1>
        <form action="<?= base_url() ?>gestor/crearProyecto" method="POST">
            <div class="form-group">
                <label for="titulo">Título del Proyecto</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingrese el título del proyecto" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción del Proyecto</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" placeholder="Ingrese la descripción del proyecto" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Crear Proyecto</button>
        </form>
        <a href="<?= base_url() ?>gestor/dashboard" class="btn btn-secondary mt-2">Volver</a>
    </div>
</body>

</html>
