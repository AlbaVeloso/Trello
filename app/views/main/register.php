<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - FormacomTrello</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/estilos.css" rel="stylesheet"> <!-- Asegúrate de enlazar tu archivo CSS aquí -->
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Crea tu cuenta</h2>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="usuario_colab">Email:</label>
                                <input type="text" id="usuario_colab" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="contraseña">Contraseña:</label>
                                <input type="password" id="contraseña" name="contraseña" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nombre">Nombre:</label>
                                <input type="text" id="nombre" name="nombre" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="apellidos">Apellidos:</label>
                                <input type="text" id="apellidos" name="apellidos" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="telefono">Teléfono:</label>
                                <input type="text" id="telefono" name="telefono" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="foto">Foto de perfil URL:</label>
                                <input type="text" id="foto" name="foto" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Registrar</button>
                        </form>
                        <p class="text-center mt-3">Ya tienes una cuenta? <a href="<?= base_url() ?>main/login">Entra aquí.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
