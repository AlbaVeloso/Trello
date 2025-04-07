<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - FormacomTrello</title>
    <link rel="stylesheet" href="/path/to/your/styles.css">
</head>
<body>
    <div class="container">
        <h1>Crea tu cuenta</h1>
        <form action="/path/to/your/registration/handler" method="POST">
            <div class="form-group">
                <label for="usuario_colab">Email:</label>
                <input type="text" id="usuario_colab" name="usuario_colab" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" id="apellidos" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="telefono">Te:</label>
                <input type="text" id="telefono" name="telefono">
            </div>
            <div class="form-group">
                <label for="foto">Profile Picture URL:</label>
                <input type="text" id="foto" name="foto">
            </div>
            <div class="form-group">
                <label for="rol">Role:</label>
                <input type="text" id="rol" name="rol" required>
            </div>
            <button type="submit">Register</button>
        </form>
        <p>Already have an account? <a href="/path/to/login">Log in here</a>.</p>
    </div>
</body>
</html>