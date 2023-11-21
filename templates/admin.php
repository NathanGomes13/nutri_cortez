<?php

session_start();
include_once "php-logic/connection.php";

if (isset($_SESSION['id'])) {
    $id = $_SESSION['id'];

    $confirm_delete_msg = "Confirmar Exclusão?";

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

if($is_admin == 1){
    
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
    <!-- Site -->
    <link rel="stylesheet" href="../static/styles/style.css">
    <link rel="stylesheet" href="../static/styles/admin.css">
    <title>Admin - <?php echo $nome_usuario ?></title>
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>
    <section>
        <nav id="navbar">
        <div class="profile-box">
            <a href="profile.php" class="regular button green-button user-button"><i class="fa-solid fa-user"></i><?php echo $nome_usuario; ?></a>
            <a href="profile.php" class="regular button logout-button"><i class="fa-solid fa-circle-chevron-left"></i></a>
        </div>
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
        <header class="topico">Admin Database</header>
        <ul>
            <li><a class="nav-link" href="#cafe_da_manha">Café Da Manhã</a></li>
            <li><a class="nav-link" href="#almoco_janta">Almoço e Janta</a></li>
            <li><a class="nav-link" href="#opcoes_montar">Opções Para Montar</a></li>
            <li><a class="nav-link" href="#lanches">Lanches</a></li>
            <li><a class="nav-link" href="#salada">Saladas</a></li>
            <li><a class="nav-link" href="#avaliacoes">Avaliações</a></li>
            <li><a class="nav-link" href="#usuarios">Usuários</a></li>
        </ul>
        </nav>
        <main id="main-doc">
            <div class="container">
            <?php
                if (isset($_GET['mensagem'])) {
                    $mensagem = urldecode($_GET['mensagem']);
                    echo '<div class="alert alert-success text-center">' . $mensagem . '</div>';
                }
            ?>
            <section id="cafe_da_manha" class="main-section">
                <header class="prato">Café da manhã</header>
                <a href="php-logic/admin-add-pratos.php?tabela=pratos_cafe_da_manha"><button type="button" class="btn btn-success mb-2"><i class="fa-solid fa-plus"></i><span class="px-2">Adicionar Prato</span></button></a>
                <article>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th class="text-center">Ação</th>
                                <th>Nome Prato</th>
                                <th class='text-center'>peso</th>
                                <th class='text-center'>cal</th>
                                <th class='text-center'>carboidratos</th>
                                <th class='text-center'>gorduras</th>
                                <th class='text-center'>proteinas</th>
                                <th>opção</th> 
                                <th class='text-center zeroum'>alto<br>carboidratos</th>
                                <th class='text-center zeroum'>baixa<br>proteinas</th>
                                <th class='text-center zeroum'>baixo<br>carboidrato</th>
                                <th class='text-center zeroum'>baixa<br>gordura</th>
                            </tr>
                        </thead>
                    <tbody>
                        <?php
                            $sql = "SELECT * FROM pratos_cafe_da_manha";
                            $result = mysqli_query($conn, $sql);
                            
                            if ($result && mysqli_num_rows($result) > 0) {
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<tr>";
                                    echo "<td>" . $row["id"] . "</td>";
                                    $id_this = $row["id"];
                                    $nome = $row['nome'];
                                    $tabela_this = $row["tabela_origem"];
                                    echo "<td>
                                            <a href='php-logic/admin-edit-pratos.php?id=$id_this&tabela=$tabela_this'><i class='fa-solid fa-pen text-warning px-2'></i></a>
                                            <a href='php-logic/admin-delete-pratos.php?id=$id_this&nome=$nome&tabela=$tabela_this' class='confirmation'><i class='fa-solid fa-trash text-danger px-2'></i></i></a>
                                        </td>";
                                    echo "<td>" . $row["nome"] . "</td>";
                                    echo "<td class='number'>" . $row["peso"] . "</td>";
                                    echo "<td class='number'>" . $row["calorias"] . "</td>";
                                    echo "<td class='number'>" . $row["carboidratos"] . "</td>";
                                    echo "<td class='number'>" . $row["gorduras"] . "</td>";
                                    echo "<td class='number'>" . $row["proteinas"] . "</td>";
                                    echo "<td>" . $row["opcao"] . "</td>";
                                    echo "<td class='number'>" . $row["muito_carboidratos"] . "</td>";
                                    echo "<td class='number'>" . $row["muita_proteina"] . "</td>";
                                    echo "<td class='number'>" . $row["pouco_carboidrato"] . "</td>";
                                    echo "<td class='number'>" . $row["pouca_gordura"] . "</td>";
                                    echo "</tr>";
                                };
                            }else{
                                echo "";
                            }
                        ?>
                    </tbody>
                    </table>
                    <article>
            </section>
            <!-- Almoço -->
            <section id="almoco_janta" class="main-section">
                <header class="prato">Almoço e Janta</header>
                <a href="php-logic/admin-add-pratos.php?tabela=pratos_almoco_e_janta"><button type="button" class="btn btn-success mb-2"><i class="fa-solid fa-plus"></i><span class="px-2">Adicionar Prato</span></button></a>
                <article>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th class="text-center">Ação</th>
                                <th>Nome Prato</th>
                                <th class='text-center'>peso</th>
                                <th class='text-center'>cal</th>
                                <th class='text-center'>carboidratos</th>
                                <th class='text-center'>gorduras</th>
                                <th class='text-center'>proteinas</th>
                                <th>opção</th> 
                                <th class='text-center zeroum'>alto<br>carboidratos</th>
                                <th class='text-center zeroum'>baixa<br>proteinas</th>
                                <th class='text-center zeroum'>baixo<br>carboidrato</th>
                                <th class='text-center zeroum'>baixa<br>gordura</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM pratos_almoco_e_janta";
                                $result = mysqli_query($conn, $sql);
                                
                                if ($result && mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        $id_this = $row["id"];
                                        $nome = $row['nome'];
                                        $tabela_this = $row["tabela_origem"];
                                        echo "<td>
                                                <a href='php-logic/admin-edit-pratos.php?id=$id_this&tabela=$tabela_this'><i class='fa-solid fa-pen text-warning px-2'></i></a>
                                                <a href='php-logic/admin-delete-pratos.php?id=$id_this&nome=$nome&tabela=$tabela_this' class='confirmation'><i class='fa-solid fa-trash text-danger px-2'></i></i></a>
                                            </td>";
                                        echo "<td>" . $row["nome"] . "</td>";
                                        echo "<td class='number'>" . $row["peso"] . "</td>";
                                        echo "<td class='number'>" . $row["calorias"] . "</td>";
                                        echo "<td class='number'>" . $row["carboidratos"] . "</td>";
                                        echo "<td class='number'>" . $row["gorduras"] . "</td>";
                                        echo "<td class='number'>" . $row["proteinas"] . "</td>";
                                        echo "<td>" . $row["opcao"] . "</td>";
                                        echo "<td class='number'>" . $row["muito_carboidratos"] . "</td>";
                                        echo "<td class='number'>" . $row["muita_proteina"] . "</td>";
                                        echo "<td class='number'>" . $row["pouco_carboidrato"] . "</td>";
                                        echo "<td class='number'>" . $row["pouca_gordura"] . "</td>";
                                        echo "</tr>";
                                    };
                                }else{
                                    echo "";
                                }
                            ?>
                        </tbody>
                    </table>
                <article>
            </section>
            
            <!-- Fim de Almoço -->


            <section id="opcoes_montar" class="main-section">
                <header class="prato">Opções Para montar</header>
                <a href="php-logic/admin-add-pratos.php?tabela=pratos_opcoes_separadas"><button type="button" class="btn btn-success mb-2"><i class="fa-solid fa-plus"></i><span class="px-2">Adicionar Prato</span></button></a>
                    <article>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th class="text-center">Ação</th>
                                <th>Nome Prato</th>
                                <th class='text-center'>peso</th>
                                <th class='text-center'>cal</th>
                                <th class='text-center'>carboidratos</th>
                                <th class='text-center'>gorduras</th>
                                <th class='text-center'>proteinas</th>
                                <th class='text-center zeroum'>alto<br>carboidratos</th>
                                <th class='text-center zeroum'>baixa<br>proteinas</th>
                                <th class='text-center zeroum'>baixo<br>carboidrato</th>
                                <th class='text-center zeroum'>baixa<br>gordura</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM pratos_opcoes_separadas";
                                $result = mysqli_query($conn, $sql);
                                
                                if ($result && mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        $id_this = $row["id"];
                                        $nome = $row['nome'];
                                        $tabela_this = $row["tabela_origem"];
                                        echo "<td>
                                                <a href='php-logic/admin-edit-pratos.php?id=$id_this&tabela=$tabela_this'><i class='fa-solid fa-pen text-warning px-2'></i></a>
                                                <a href='php-logic/admin-delete-pratos.php?id=$id_this&nome=$nome&tabela=$tabela_this' class='confirmation'><i class='fa-solid fa-trash text-danger px-2'></i></i></a>
                                            </td>";
                                        echo "<td>" . $row["nome"] . "</td>";
                                        echo "<td class='number'>" . $row["peso"] . "</td>";
                                        echo "<td class='number'>" . $row["calorias"] . "</td>";
                                        echo "<td class='number'>" . $row["carboidratos"] . "</td>";
                                        echo "<td class='number'>" . $row["gorduras"] . "</td>";
                                        echo "<td class='number'>" . $row["proteinas"] . "</td>";
                                        echo "<td class='number'>" . $row["muito_carboidratos"] . "</td>";
                                        echo "<td class='number'>" . $row["muita_proteina"] . "</td>";
                                        echo "<td class='number'>" . $row["pouco_carboidrato"] . "</td>";
                                        echo "<td class='number'>" . $row["pouca_gordura"] . "</td>";
                                        echo "</tr>";
                                    };
                                }else{
                                    echo "";
                                }
                            ?>
                        </tbody>
                    </table>
                    
                    </article>
            </section>
            <!-- Opções para montar -->
            <section id="lanches" class="main-section">
                <header class="prato">Lanches</header>
                <a href="php-logic/admin-add-pratos.php?tabela=pratos_lanches"><button type="button" class="btn btn-success mb-2"><i class="fa-solid fa-plus"></i><span class="px-2">Adicionar Prato</span></button></a>
                <article>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th class="text-center">Ação</th>
                                <th>Nome Prato</th>
                                <th class='text-center'>peso</th>
                                <th class='text-center'>cal</th>
                                <th class='text-center'>carboidratos</th>
                                <th class='text-center'>gorduras</th>
                                <th class='text-center'>proteinas</th>
                                <th class='text-center zeroum'>alto<br>carboidratos</th>
                                <th class='text-center zeroum'>baixa<br>proteinas</th>
                                <th class='text-center zeroum'>baixo<br>carboidrato</th>
                                <th class='text-center zeroum'>baixa<br>gordura</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM pratos_lanches";
                                $result = mysqli_query($conn, $sql);
                                
                                if ($result && mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        $id_this = $row["id"];
                                        $nome = $row['nome'];
                                        $tabela_this = $row["tabela_origem"];
                                        echo "<td>
                                                <a href='php-logic/admin-edit-pratos.php?id=$id_this&tabela=$tabela_this'><i class='fa-solid fa-pen text-warning px-2'></i></a>
                                                <a href='php-logic/admin-delete-pratos.php?id=$id_this&nome=$nome&tabela=$tabela_this' class='confirmation'><i class='fa-solid fa-trash text-danger px-2'></i></i></a>
                                            </td>";
                                        echo "<td>" . $row["nome"] . "</td>";
                                        echo "<td class='number'>" . $row["peso"] . "</td>";
                                        echo "<td class='number'>" . $row["calorias"] . "</td>";
                                        echo "<td class='number'>" . $row["carboidratos"] . "</td>";
                                        echo "<td class='number'>" . $row["gorduras"] . "</td>";
                                        echo "<td class='number'>" . $row["proteinas"] . "</td>";
                                        echo "<td class='number'>" . $row["muito_carboidratos"] . "</td>";
                                        echo "<td class='number'>" . $row["muita_proteina"] . "</td>";
                                        echo "<td class='number'>" . $row["pouco_carboidrato"] . "</td>";
                                        echo "<td class='number'>" . $row["pouca_gordura"] . "</td>";
                                        echo "</tr>";
                                    };
                                }else{
                                    echo "";
                                }
                            ?>
                        </tbody>
                    </table>
                </article>
            </section>

            <!-- FIM -->

            <!-- Saladas -->
            <section id="salada" class="main-section">
                <header class="prato">Saladas</header>
                <a href="php-logic/admin-add-pratos.php?tabela=pratos_salada"><button type="button" class="btn btn-success mb-2"><i class="fa-solid fa-plus"></i><span class="px-2">Adicionar Prato</span></button></a>
                <article>
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th class="text-center">Ação</th>
                                <th>Nome Prato</th>
                                <th class='text-center'>peso</th>
                                <th class='text-center'>cal</th>
                                <th class='text-center'>carboidratos</th>
                                <th class='text-center'>gorduras</th>
                                <th class='text-center'>proteinas</th>
                                <th class='text-center zeroum'>alto<br>carboidratos</th>
                                <th class='text-center zeroum'>baixa<br>proteinas</th>
                                <th class='text-center zeroum'>baixo<br>carboidrato</th>
                                <th class='text-center zeroum'>baixa<br>gordura</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM pratos_salada";
                                $result = mysqli_query($conn, $sql);
                                
                                if ($result && mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        $id_this = $row["id"];
                                        $nome = $row['nome'];
                                        $tabela_this = $row["tabela_origem"];
                                        echo "<td>
                                                <a href='php-logic/admin-edit-pratos.php?id=$id_this&tabela=$tabela_this'><i class='fa-solid fa-pen text-warning px-2'></i></a>
                                                <a href='php-logic/admin-delete-pratos.php?id=$id_this&nome=$nome&tabela=$tabela_this' class='confirmation'><i class='fa-solid fa-trash text-danger px-2'></i></i></a>
                                            </td>";
                                        echo "<td>" . $row["nome"] . "</td>";
                                        echo "<td class='number'>" . $row["peso"] . "</td>";
                                        echo "<td class='number'>" . $row["calorias"] . "</td>";
                                        echo "<td class='number'>" . $row["carboidratos"] . "</td>";
                                        echo "<td class='number'>" . $row["gorduras"] . "</td>";
                                        echo "<td class='number'>" . $row["proteinas"] . "</td>";
                                        echo "<td class='number'>" . $row["muito_carboidratos"] . "</td>";
                                        echo "<td class='number'>" . $row["muita_proteina"] . "</td>";
                                        echo "<td class='number'>" . $row["pouco_carboidrato"] . "</td>";
                                        echo "<td class='number'>" . $row["pouca_gordura"] . "</td>";
                                        echo "</tr>";
                                    };
                                }else{
                                    echo "";
                                }
                            ?>
                        </tbody>
                    </table>
                </article>
            </section>

                
            <!-- FIM -->

            <section id="avaliacoes" class="main-section">
                <header class="prato">Avaliações</header>
                <a href="php-logic/admin-add-avaliacoes.php?confirm=confirm"><button type="button" class="btn btn-success mb-2"><i class="fa-solid fa-plus"></i><span class="px-2">Adicionar Avaliação</span></button></a>
                <article>
                <!-- Avaliações -->
                    <table class="table table-striped">
                        <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th class="text-center">Ação</th>
                            <th>Nome</th>
                            <th style="width: 75% !important;">Descrição</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php
                                $sql = "SELECT * FROM avaliacoes";
                                $result = mysqli_query($conn, $sql);
                                
                                if ($result && mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)){
                                        echo "<tr>";
                                        echo "<td>" . $row["ID"] . "</td>";
                                        $id_this = $row["ID"];
                                        $nome = $row["nome"];
                                        echo "<td>
                                            <a href='php-logic/admin-edit-avaliacoes.php?id=$id_this'><i class='fa-solid fa-pen text-warning px-2'></i></a>
                                            <a href='php-logic/admin-delete-avaliacoes.php?id=$id_this&nome=$nome' class='confirmation'><i class='fa-solid fa-trash text-danger px-2'></i></i></a>
                                        </td>";
                                        echo "<td>" . $row["nome"] . "</td>";
                                        echo "<td>" . $row["descricao"] . "</td>";
                                        echo "</tr>";
                                    };
                                }else{
                                    echo "";
                                }
                            ?>
                        </tbody>
                    </table>
                    </article>
                </section>

                <section id="usuarios" class="main-section">
                    <header class="prato">Usuarios</header>
                    <!-- Usuário -->
                <article> 
                    <table class="table table-striped">
                    <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th class="text-center">Ação</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Phone</th>
                        <th class="text-center">Idade</th>
                        <th>Sexo</th>
                        <th class="text-center">Peso</th>
                        <th class="text-center">Altura</th>
                        <th>Nivel_atividade</th>
                        <th>Objetivo</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM usuarios";
                        $result = mysqli_query($conn, $sql);
                        
                        if ($result && mysqli_num_rows($result) > 0) {
                            while($row = mysqli_fetch_assoc($result)){
                                echo "<tr>";
                                echo "<td>" . $row["ID"] . "</td>";
                                $id_this = $row["ID"];
                                $nome = $row["nome"];
                                echo "<td>
                                        <a href='php-logic/admin-edit-usuarios.php?id=$id_this'><i class='fa-solid fa-pen text-warning px-2'></i></a>
                                        <a href='php-logic/admin-delete-usuarios.php?id=$id_this&nome=$nome' class='confirmation'><i class='fa-solid fa-trash text-danger px-2'></i></i></a>
                                    </td>";
                                echo "<td>" . $row["nome"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["phone"] . "</td>";
                                echo "<td class='number'>" . $row["idade"] . "</td>";
                                echo "<td>" . $row["sexo"] . "</td>";
                                echo "<td class='number'>" . $row["peso"] . "</td>";
                                echo "<td class='number'>" . $row["altura"] . "</td>";
                                echo "<td>" . $row["nivel_atividade"] . "</td>";
                                echo "<td>" . $row["objetivo"] . "</td>";
                                echo "</tr>";
                            };
                        }else{
                            echo "";
                        }
                    ?>
                </tbody>
            </table>
            </article>
        </section>
      </div>
    </main>
    </section>
    <!-- jquery -->
    <script src="../static/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <script src="../static/js/wcag-font-size.js"></script>
    <script type="text/javascript">
        $('.confirmation').on('click', function () {
            return confirm('Confirmar?');
        });
    </script>
</body>
</html>
<?php 
} else {
    header("Location: home.php");
    exit();
}
} else {
    header("Location: home.php");
    exit();
}
}else{
    header("Location: home.php");
    exit();
}
?>