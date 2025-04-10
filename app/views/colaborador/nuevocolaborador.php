<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Colaborador</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container">
        <h1>Alta Nuevo Colaborador</h1>
        <form action="<?= base_url() ?>colaborador/crearColaborador" method="POST">
            <div class="form-group">
                <label for="usuario_colab">Email:</label>
                <input type="email" id="usuario_colab" name="email" required class="form-control">
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required class="form-control">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required class="form-control">
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required class="form-control">
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" id="telefono" name="telefono" class="form-control">
            </div>
            <div class="form-group">
                <label for="foto">Foto de perfil URL:</label>
                <input type="text" id="foto" name="foto" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
        <a href="<?= base_url() ?>gestor/dashboard" class="btn btn-secondary mt-2">Volver</a>
    </div>
</body>

</html>
