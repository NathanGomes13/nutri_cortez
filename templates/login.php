<?php

include_once "php-logic/connection.php";

session_start();

// requisita o backup do campo já preenchido
$email_usuario = isset($_SESSION['email_usuario']) ? $_SESSION['email_usuario'] : '';

unset($_SESSION['email_usuario']);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/75fe04cf12.js" crossorigin="anonymous"></script>
    <!-- Site -->
    <link rel="stylesheet" href="../static/styles/style.css">
    <link rel="stylesheet" href="../static/styles/cadastro-login.css">
    <title>LOGIN Nutri Cortez</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>

    <?php
        include_once "header-login.php"
    ?>

    <section id="cadastro-login-sec">
        <div class="container">
            <div class="box-form">
                <h3>Entrar</h3>
                <span>Não tem uma conta? <a class="text-primary" href="cadastro.php">Registre-se</a></span>
                <form action="php-logic/login-logic.php" method="POST">
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error regular"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for="email"><span>Email</span>
                    <input type="email" id="email" name="email" value="<?php echo $email_usuario; ?>">
                    <i class="fa-solid fa-envelope"></i>
                    </label>

                    <label for="password"><span>Senha</span>
                    <input type="password" id="password" name="password">
                    <i style="cursor: pointer;" id="togglePassword" class="fa-solid fa-eye-slash"></i>
                    </label>

                    <button class="button orange-button mt-4" type="submit">Entrar</button>
                </form>
            </div>
        </div>
    </section>
    <script>
        // Capture o elemento do ícone e o campo de senha
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        // Adicione um evento de clique ao ícone
        togglePassword.addEventListener('click', function () {
        // Alterne o tipo de campo de senha entre 'password' e 'text'
        if (passwordField.type === 'password') {
            passwordField.type = 'text';
            togglePassword.classList.remove('fa-eye-slash');
            togglePassword.classList.add('fa-eye');
        } else {
            passwordField.type = 'password';
            togglePassword.classList.remove('fa-eye');
            togglePassword.classList.add('fa-eye-slash');
        }
        });
    </script>
    <!-- bootstrap -->
    <script src="../static/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>