<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Proyecto</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Detalle del Proyecto</h1>
        <p><strong>Título:</strong> <?= htmlspecialchars($data["proyecto"]->titulo) ?></p>
        <p><strong>Descripción:</strong> <?= htmlspecialchars($data["proyecto"]->descripcion) ?></p>
        <p><strong>Creado por Usuario ID:</strong> <?= htmlspecialchars($data["proyecto"]->usuario_id) ?></p>
        <a href="<?= base_url() ?>gestor" class="btn btn-secondary">Volver</a>
    </div>
</body>

</html>