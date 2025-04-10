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
        <h1 class="my-4">¡Bienvenido, <?= htmlspecialchars($_SESSION['nombre']) ?>!</h1>
        <h2>Tus Proyectos</h2>
        <div class="list-group">
            <?php if (!empty($data["projects"])): ?>
                <?php foreach ($data["projects"] as $project): ?>
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <span><?= htmlspecialchars($project->titulo) ?></span>
                        <a href="<?= base_url() ?>gestor/detalleProyecto/<?= $project->id ?>" class="btn btn-primary btn-sm">Ver Detalle</a>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No tienes proyectos registrados.</p>
            <?php endif; ?>
        </div>
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
