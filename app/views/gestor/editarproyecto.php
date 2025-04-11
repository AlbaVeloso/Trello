<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Proyecto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Editar Proyecto</h1>

        <?php if (isset($data["proyecto"])): ?>
            <form action="<?= base_url() ?>gestor/editarProyecto/<?= $data["proyecto"]->proyecto_id ?>" method="POST">
                <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo"
                        value="<?= htmlspecialchars($data["proyecto"]->titulo) ?>" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" required><?= htmlspecialchars($data["proyecto"]->descripcion) ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            </form>
        <?php else: ?>
            <p>El proyecto no existe o no se ha encontrado.</p>
        <?php endif; ?>

        <a href="<?= base_url() ?>gestor" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>

</html>