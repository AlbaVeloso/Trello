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
        <form action="/path/to/login/handler" method="POST">
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" id="username" name="username" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Login</button>
        </form>
        <p>Todavía no tienes cuenta? <a href="<?= base_url() ?>main/register">Regístrate aquí.</a></p>
    </div>
</body>
</html>