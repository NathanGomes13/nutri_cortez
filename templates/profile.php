<?php

session_start();
include_once "php-logic/connection.php";

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    $sql = "SELECT * FROM usuarios WHERE id = $id";
    $result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $nome_usuario = $row['nome'];
    $email_usuario = $row['email'];
    $senha_usuario = $row['senha'];
    $sexo_usuario = $row['sexo'];
    $peso_usuario = $row['peso'];
    $altura_usuario = $row['altura'];
    $phone_usuario = $row['phone'];
    $idade_usuario = $row['idade'];
    $ativ_fisica_usuario = $row['nivel_atividade'];
    $objetivo_usuario = $row['objetivo'];
    $is_admin = $row['is_admin'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/75fe04cf12.js" crossorigin="anonymous"></script>
    <!-- chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- Site -->
    <link rel="stylesheet" href="../static/styles/style.css">
    <link rel="stylesheet" href="../static/styles/user-page.css">
    <title>Perfil - <?php echo $nome_usuario ?></title>
    <link rel="shortcut icon" href="../static/imagens/favicon.ico" type="image/x-icon">
</head>
<body id="profile">
    <div id="preloader">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>
    
<?php
if(isset($_SESSION['error'])){
    echo $_SESSION['error'];
    unset($_SESSION['error']);
}
if(isset($_SESSION['success'])){
    echo $_SESSION['success'];
    unset($_SESSION['success']);
}
?>

<div  class="container">
    <!-- Acessibilidade -->
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink controllSize">
        <div class="boxCtrl" style="font-size: 23.5px;"> 
            <a href="javascript:void(0);" class="decrease-text" title="Diminuir fonte">A-</a> 
            <a href="javascript:void(0);" class="increase-text" title="Aumentar fonte">A+</a> 
            <a href="javascript:void(0);" class="normal-text" 	 title="Fonte normal">A</a> 
            <a href="javascript:void(0);" class="contrast-b" 	 title="Contraste preto/branco">A</a> 
            <a href="javascript:void(0);" class="contrast-w" 	 title="Contraste branco/preto" >A</a>
        </div>
    </nav>
    <div class="modal fade" id="confirmationPModal" tabindex="-1" role="dialog" aria-labelledby="confirmationPModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header py-4">
                    <h5 class="modal-title" id="confirmationPModalLabel">Confirmar Exclusão</h5>
                </div>
                <div class="modal-body py-3">
                    Tem certeza que deseja excluir sua conta?<br>
                    <span class="text-danger">Essa ação não poderá ser revertida.</span><br><br>
                    <form method="post" action="php-logic/deletar-conta-logic.php" class="no-grid" onsubmit="return validarSenha()">
                        <label for="senha-confirm">Senha *</label>
                        <input type="password" id="senha-confirm" name="senha-confirm" placeholder="Digite sua senha" required>
                        
                        <button class="btn btn-danger deletar" type="submit" name="excluir_conta">Excluir Conta</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="top-header">   
        <a  class="seta"href="home.php">
            <svg width="64px" height="64px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">

            <g id="SVGRepo_bgCarrier" stroke-width="0"/>
            
            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>
            
            <g id="SVGRepo_iconCarrier"> <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#000000" stroke-width=".8" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/> <path d="M13.26 15.53L9.73999 12L13.26 8.46997" stroke="#000000" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/> </g>
            </svg>
        </a> 

            
        <h1 class="orange">Editar Perfil</h1>
        <div class="deletar-perfil">
            <?php
                if($is_admin == 1){
                ?>
                <a href="admin.php" class="button green-button"><i class="fa-solid fa-gears"></i>Admin</a>
                <?php
                };
            ?>
            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmationPModal">Deletar Perfil</button>
        </div>
    </div>
    <?php if (isset($_GET['error'])) { ?>
        <p class="error regular"><?php echo $_GET['error']; ?></p>
    <?php } ?>
    <?php if (isset($_GET['success'])) { ?>
        <p class="success regular"><?php echo $_GET['success']; ?></p>
    <?php } ?>
    <form name="form_edit_profile" method="POST" action="php-logic/edit-profile-logic.php">
        
        <div class="form-group">
            <label for="name"><span>Nome</span>
            <input type="text" id="name" name="name" value="<?php echo $nome_usuario; ?>">
            <i class="fa-solid fa-user"></i>
            </label>
        </div>

        <div class="form-group">
            <label for="phone"><span>Telefone</span>
            <input type="number" id="phone" name="phone" value="<?php echo $phone_usuario; ?>">
            <i class="fa-solid fa-phone"></i>
            </label>
        </div>

        <div class="form-group span-2">
            <label for="email"><span>Email</span>
            <input type="email" id="email" name="email" value="<?php echo $email_usuario; ?>">
            <i class="fa-solid fa-envelope"></i>
            </label>
        </div>

        <div class="form-group">
            <label for="password1"><span>Senha</span>
            <input type="password" id="password1" class="password-input" name="password1">
            <i style="cursor: pointer;" class="toggle-password fa-solid fa-eye-slash" data-target="password1"></i>
            </label>
        </div>

        <div class="form-group">
            <label for="password2"><span>Confirmar Senha</span>
            <input type="password" id="password2" class="password-input" name="password2">
            <i style="cursor: pointer;" class="toggle-password fa-solid fa-eye-slash" data-target="password2"></i>
            </label>
        </div>

        <h4 class="text-center span-2" style="color: #F26B23;">Outras informações</h4>

        <div class="form-group">
            <label for="gender"><span>Sexo</span>
            <select id="gender" name="gender">
                <option value="feminino" <?php echo ($sexo_usuario === 'feminino') ? 'selected' : ''; ?>>Feminino</option>
                <option value="masculino" <?php echo ($sexo_usuario === 'masculino') ? 'selected' : ''; ?>>Masculino</option>
            </select>
            </label>
        </div>

        <div class="form-group">
            <label for="idade"><span>Idade</span>
            <input type="number" id="idade" name="idade" value="<?php echo $idade_usuario; ?>">
            <i class="fa-solid fa-arrow-up-9-1"></i>
            </label>
        </div>

        <div class="form-group">
            <label for="weight"><span>Peso (kg)</span>
            <input type="number" id="weight" name="weight" value="<?php echo $peso_usuario; ?>">
            <i class="fa-solid fa-weight-scale"></i>
            </label>
        </div>

        <div class="form-group">
            <label for="height"><span>Altura (cm)</span>
            <input type="number" id="height" name="height" value="<?php echo $altura_usuario; ?>">
            <i class="fa-solid fa-arrows-up-down"></i>
            </label>
        </div>

        <div class="form-group">
            <label for="objetivo"><span>Objetivo</span>
            <select id="objetivo" name="objetivo">
                <option value="perder_peso" <?php echo ($objetivo_usuario === 'perder_peso') ? 'selected' : ''; ?>>Perder peso</option>
                <option value="manter_peso" <?php echo ($objetivo_usuario === 'manter_peso') ? 'selected' : ''; ?>>Manter o peso</option>
                <option value="ganhar_peso" <?php echo ($objetivo_usuario === 'ganhar_peso') ? 'selected' : ''; ?>>Ganhar peso</option>
                <option value="ganhar_massa_muscular" <?php echo ($objetivo_usuario === 'ganhar_massa_muscular') ? 'selected' : ''; ?>>Ganhar massa muscular</option>
            </select>
            </label>
        </div>

        <div class="form-group">
            <label for="ativ_fisica_usuario"><span>Atividade Física</span>
            <select id="ativ_fisica_usuario" name="ativ_fisica_usuario" value="<?php echo $ativ_fisica_usuario; ?>">
                <option value="sedentario" <?php echo ($ativ_fisica_usuario === 'sedentario') ? 'selected' : ''; ?>>Sedentário</option>
                <option value="leve" <?php echo ($ativ_fisica_usuario === 'leve') ? 'selected' : ''; ?>>Leve (exercício leve 1-3 dias/semana)</option>
                <option value="moderado" <?php echo ($ativ_fisica_usuario === 'moderado') ? 'selected' : ''; ?>>Moderado (exercício moderado 3-5 dias/semana)</option>
                <option value="ativo" <?php echo ($ativ_fisica_usuario === 'ativo') ? 'selected' : ''; ?>>Ativo (exercício pesado 6-7 dias/semana)</option>
                <option value="muito_ativo" <?php echo ($ativ_fisica_usuario === 'muito_ativo') ? 'selected' : ''; ?>>Muito Ativo (exercício diário, atividade física intensa)</option>
            </select>
            </label>
        </div>
        <div class="box-buttons">
            <a href="home.php"  class="button cancel-button">Voltar</a>
            <button type="submit" class="button green-button" name="editar_perfil">Salvar</button>
        </div>
        <div class="nutri-profile-infos">
            <p class="text-center">Seu peso é: <strong><?php include_once 'php-logic/imc.php'; ?></strong></p>
            <div class="hide"><?php include_once 'php-logic/harris-benedict.php'; ?></div>
            <p class="text-center">Suas calorias necessárias são: <strong><span><?php echo round($necessidades_caloricas); ?> Calorias</strong></span></p>

            <input class="hide" type="date" id="semana_peso" name="semana_peso">

            <div class="grafico-div">
                <p>Para armazenar seu Peso Semanal, clique em <strong>salvar</strong> toda semana!</p>
                <div class="canva-grafico">
                    <?php include 'grafico-peso.php'; ?>
                </div>
            </div>
        </div>
    </form>
</div>

<script>
    function validarSenha() {
        let senha = document.getElementById("senha-confirm").value;

        if (senha != <?php echo $senha_usuario ?>) {
            alert("Senha incorreta. Tente novamente.");
            return false;
        }

        return true;
    }
</script>

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

<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../static/js/jquery.js"></script>
<script src="../static/js/wcag-font-size.js"></script>
<!-- preloader -->
<script src="../static/js/preloader.js"></script>

</body>
</html>
<?php 
} else {
    header("Location: login.php");
    exit();
}
}else{
    header("Location: login.php");
    exit();
}
?>