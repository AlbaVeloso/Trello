<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - FormacomTrello</title>
    <link rel="stylesheet" href="/path/to/your/styles.css">
</head>

<body>
    <div class="container">
        <h1>Login a FormacomTrello</h1>
        <form action="<?= base_url() ?>main/login" method="POST">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="contraseña">Contraseña:</label>
                <input type="password" id="contraseña" name="contraseña" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Todavía no tienes cuenta? <a href="<?= base_url() ?>main/register">Regístrate aquí.</a></p>
    </div>
</body>

</html>