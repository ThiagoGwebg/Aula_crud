<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <h1>Login</h1>

        <?php if (!empty($_SESSION["erro_login"])): ?>
            <p><?php echo $_SESSION["erro_login"]; ?></p>
            <?php unset($_SESSION["erro_login"]) ?>
        <?php endif; ?>

        <form action="index.php?action=facaLogin" method="POST">

            <h3>Email:</h3>
            <input type="text" name="email" placeholder="email@gmail.com">

            <h3>Senha:</h3>
            <input type="text" name="senha" placeholder="senha">

            <button type="submit" Entrar>Entrar</button>
        </form>
    </div>

</body>

</html>