<?php

include_once "php-logic/connection.php";

session_start();

// requisita os backups dos campos já preenchidos
$nome_usuario = isset($_SESSION['nome_usuario']) ? $_SESSION['nome_usuario'] : '';
$email_usuario = isset($_SESSION['email_usuario']) ? $_SESSION['email_usuario'] : '';
$sexo_usuario = isset($_SESSION['sexo_usuario']) ? $_SESSION['sexo_usuario'] : '';
$peso_usuario = isset($_SESSION['peso_usuario']) ? $_SESSION['peso_usuario'] : '';
$altura_usuario = isset($_SESSION['altura_usuario']) ? $_SESSION['altura_usuario'] : '';
$phone_usuario = isset($_SESSION['phone_usuario']) ? $_SESSION['phone_usuario'] : '';
$idade_usuario = isset($_SESSION['idade_usuario']) ? $_SESSION['idade_usuario'] : '';
$ativ_fisica_usuario = isset($_SESSION['ativ_fisica_usuario']) ? $_SESSION['ativ_fisica_usuario'] : '';
$objetivo_usuario = isset($_SESSION['objetivo_usuario']) ? $_SESSION['objetivo_usuario'] : '';

unset($_SESSION['nome_usuario']);
unset($_SESSION['email_usuario']);
unset($_SESSION['sexo_usuario']);
unset($_SESSION['peso_usuario']);
unset($_SESSION['altura_usuario']);
unset($_SESSION['phone_usuario']);
unset($_SESSION['idade_usuario']);
unset($_SESSION['ativ_fisica_usuario']);
unset($_SESSION['objetivo_usuario']);

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
    <title>CADASTRO Nutri Cortez</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>

    <?php
        include_once "header-login.php"
    ?>

    <section id="cadastro-login-sec">
        <div class="container">
            <div class="box-form">
                <h3>Registrar-se</h3>
                <span>Já têm uma conta? <a class="text-primary" href="login.php">Entrar</a></span>
                <form name="form_cadastro" method="POST" action="php-logic/cadastro-logic.php">
                   
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error regular"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    
                    <label for="name"><span>Nome</span>
                    <input type="text" id="name" name="name" value="<?php echo $nome_usuario; ?>">
                    <i class="fa-solid fa-user"></i>
                    </label>

                    <label for="email"><span>Email</span>
                    <input type="email" id="email" name="email" value="<?php echo $email_usuario; ?>">
                    <i class="fa-solid fa-envelope"></i>
                    </label>

                    <label for="phone"><span>Telefone (Opcional)</span>
                    <input type="number" id="phone" name="phone" value="<?php echo $phone_usuario; ?>">
                    <i class="fa-solid fa-phone"></i>
                    </label>

                    <label for="password1"><span>Senha</span>
                    <input type="password" id="password1" class="password-input" name="password1">
                    <i style="cursor: pointer;" class="toggle-password fa-solid fa-eye-slash" data-target="password1"></i>
                    </label>

                    <label for="password2"><span>Confirmar Senha</span>
                    <input type="password" id="password2" class="password-input" name="password2">
                    <i style="cursor: pointer;" class="toggle-password fa-solid fa-eye-slash" data-target="password2"></i>
                    </label>

                    <h2 class="text-center" style="color: #F26B23;">Informações Essenciais</h2>

                    <label for="gender"><span>Sexo</span>
                    <select id="gender" name="gender" value="<?php echo $sexo_usuario; ?>">
                        <option value="feminino">Feminino</option>
                        <option value="masculino">Masculino</option>
                    </select>
                    </label>

                    <label for="idade"><span>Idade</span>
                    <input type="number" id="idade" name="idade" value="<?php echo $idade_usuario; ?>">
                    <i class="fa-solid fa-arrow-up-9-1"></i>
                    </label>

                    <label for="weight"><span>Peso (kg)</span>
                    <input type="number" id="weight" name="weight" value="<?php echo $peso_usuario; ?>">
                    <i class="fa-solid fa-weight-scale"></i>
                    </label>

                    <label for="height"><span>Altura (cm)</span>
                    <input type="number" id="height" name="height" value="<?php echo $altura_usuario; ?>">
                    <i class="fa-solid fa-arrows-up-down"></i>
                    </label>

                    <label for="objetivo"><span>Objetivo</span>
                    <select id="objetivo" name="objetivo" value="<?php echo $objetivo_usuario; ?>">
                        <option value="perder_peso">Perder peso</option>
                        <option value="manter_peso" selected>Manter o peso</option>
                        <option value="ganhar_peso">Ganhar peso</option>
                        <option value="ganhar_massa_muscular">Ganhar massa muscular</option>
                    </select>
                    </label>

                    <label for="ativ_fisica_usuario"><span>Atividade Física</span>
                    <select id="ativ_fisica_usuario" name="ativ_fisica_usuario" value="<?php echo $ativ_fisica_usuario; ?>">
                        <option value="sedentario">Sedentário</option>
                        <option value="leve" selected>Leve (exercício leve 1-3 dias/semana)</option>
                        <option value="moderado">Moderado (exercício moderado 3-5 dias/semana)</option>
                        <option value="ativo">Ativo (exercício pesado 6-7 dias/semana)</option>
                        <option value="muito_ativo">Muito Ativo (exercício diário, atividade física intensa)</option>
                    </select>
                    </label>
                    <input class="hide" type="date" id="semana_peso" name="semana_peso">
                    <button class="button orange-button mt-4" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </section>

    <script>
        const togglePasswordElements = document.querySelectorAll('.toggle-password');
        const passwordInputElements = document.querySelectorAll('.password-input');

        // Adicionar evento de clique a cada elemento de alternância de senha
        togglePasswordElements.forEach(function (togglePassword) {
        togglePassword.addEventListener('click', function () {
            // Obter o ID alvo a partir do atributo 'data-target'
            const targetId = togglePassword.getAttribute('data-target');
            const targetPasswordInput = document.getElementById(targetId);

            // Alternar o tipo de campo de senha entre 'password' e 'text'
            if (targetPasswordInput.type === 'password') {
                targetPasswordInput.type = 'text';
                togglePassword.classList.remove('fa-eye-slash');
                togglePassword.classList.add('fa-eye');
            } else {
                targetPasswordInput.type = 'password';
                togglePassword.classList.remove('fa-eye');
                togglePassword.classList.add('fa-eye-slash');
            }
        });
        });
    </script>
    <script>
        // Função para obter o primeiro dia da semana atual
        function getFirstDayOfCurrentWeek() {
            const today = new Date();
            const dayOfWeek = today.getDay();
            const firstDayOfWeek = new Date(today);
            firstDayOfWeek.setDate(today.getDate() - dayOfWeek);
            return firstDayOfWeek.toISOString().slice(0, 10); // Formato YYYY-MM-DD
        }
        // Preencher automaticamente o campo de data com o primeiro dia da semana atual
        const dataSemanalInput = document.getElementById('semana_peso');
        dataSemanalInput.value = getFirstDayOfCurrentWeek();
    </script>
    <!-- bootstrap -->
    <script src="../static/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
