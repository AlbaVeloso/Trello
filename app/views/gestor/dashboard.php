<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tus proyectos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="my-4">Tus Proyectos</h1>

        <?php if (!empty($data["projects"])): ?>
            <div class="list-group">
                <?php foreach ($data["projects"] as $proyecto): ?>
                    <div class="list-group-item mb-3">
                        <h5><strong>Título:</strong> <?= htmlspecialchars($proyecto->titulo) ?></h5>
                        <p><strong>Descripción:</strong> <?= htmlspecialchars($proyecto->descripcion) ?></p>
                        <p><strong>Creado por Usuario ID:</strong> <?= htmlspecialchars($proyecto->usuario_id) ?></p>
                        <a href="<?= base_url() ?>gestor/detalleProyecto/<?= $proyecto->proyecto_id ?>" class="btn btn-info">Ver Detalles</a>
                        <a href="<?= base_url() ?>gestor/editarProyecto/<?= $proyecto->proyecto_id ?>" class="btn btn-warning">Editar</a>
                        <form action="<?= base_url() ?>gestor/eliminarProyecto/<?= $proyecto->proyecto_id ?>" method="POST" class="d-inline">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else: ?>
            <p>No tienes proyectos registrados.</p>
        <?php endif; ?>

        <a href="<?= base_url() ?>gestor/nuevoProyecto" class="btn btn-success mt-3">Crear Nuevo Proyecto</a>
    </div>

    <div class="container mt-5">
        <h2>Tus Colaboradores</h2>
        <div class="list-group">
            <?php if (!empty($data["colaboradores"])): ?>
                <?php foreach ($data["colaboradores"] as $colaborador): ?>
                    <a href="#" class="list-group-item list-group-item-action">
                        <?= htmlspecialchars($colaborador->nombre) ?>
                    </a>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No tienes colaboradores registrados.</p>
            <?php endif; ?>
        </div>
        <a href="<?= base_url() ?>colaborador/nuevoColaborador" class="btn btn-success mt-3">Alta Nuevo Colaborador</a>
    </div>
</body>

</html>