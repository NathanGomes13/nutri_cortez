<?php

session_start();
include_once("connection.php");

//Caso o POST seja efetuado
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password1'])  && isset($_POST['password2']) && isset($_POST['gender']) && isset($_POST['idade']) && isset($_POST['weight']) && isset($_POST['height'])) {

	//validação
    function validate($data){
        $data = trim($data); // Remove espaços em branco extras no início e no final do valor.
        $data = stripslashes($data); #Remove barras invertidas adicionadas a caracteres especiais. Isso pode ser útil para evitar problemas de escape duplicado.
        $data = htmlspecialchars($data); // Resumo Google: Converte caracteres especiais em entidades HTML. Isso é feito para evitar ataques de injeção de código (como ataques de cross-site scripting, XSS) e garantir que os dados sejam exibidos de forma segura em páginas da web.
        return $data;
    }

	$nome_usuario = validate($_POST['name']);
	$email_usuario = validate($_POST['email']);
    $senha_usuario = validate($_POST['password1']);
    $senha2_usuario = validate($_POST['password2']);
    $sexo_usuario = validate($_POST['gender']);
	$peso_usuario = validate($_POST['weight']);
	$altura_usuario = validate($_POST['height']);
	$idade_usuario = validate($_POST['idade']);
	$ativ_fisica_usuario = validate($_POST['ativ_fisica_usuario']);
	$objetivo_usuario = validate($_POST['objetivo']);
    if($_POST['phone']){
        $phone_usuario = validate($_POST['phone']);
    }else{
        $phone_usuario = null;
    }

	// espécie de backup para não limpar o formulário em caso de erro em um campo(input)
	$_SESSION['nome_usuario'] = $nome_usuario;
	$_SESSION['email_usuario'] = $email_usuario;
	$_SESSION['sexo_usuario'] = $sexo_usuario;
	$_SESSION['peso_usuario'] = $peso_usuario;
	$_SESSION['altura_usuario'] = $altura_usuario;
	$_SESSION['phone_usuario'] = $phone_usuario;
	$_SESSION['idade_usuario'] = $idade_usuario;
	$_SESSION['ativ_fisica_usuario'] = $ativ_fisica_usuario;
	$_SESSION['objetivo_usuario'] = $objetivo_usuario;
	
	//Erros no cadastro
    if (empty($nome_usuario)) {
        //dar um valor à "error"
		header("Location: ../cadastro.php?error=O Nome é obrigatório.");
	    exit();
	}else if(empty($email_usuario)){
        header("Location: ../cadastro.php?error=O Email é obrigatório.");
	    exit();
	}else if (!filter_var($email_usuario, FILTER_VALIDATE_EMAIL)) { //validar o email
        header("Location: ../cadastro.php?error=Insira um Email válido.");
	    exit();
	}else if(!empty($email_usuario)){ //verificar se já existe um email igual no db
		$sql = "SELECT * FROM usuarios WHERE email = '$email_usuario'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: ../cadastro.php?error=Este endereço de e-mail já está em uso.");
			exit();
		}else{ // else para não parar o script caso não seja um email já usado
			if(empty($senha_usuario)){
				header("Location: ../cadastro.php?error=A Senha é obrigatória.");
				exit();
			}else if(empty($senha2_usuario)){
				header("Location: ../cadastro.php?error=Confirme sua senha.");
				exit();
			}else if($senha_usuario !== $senha2_usuario){
				header("Location: ../cadastro.php?error=As senhas devem ser iguais.");
				exit();
			}else if(empty($sexo_usuario)){
				header("Location: ../cadastro.php?error=O campo Sexo é obrigatório.");
				exit();
			}else if(empty($idade_usuario)){
				header("Location: ../cadastro.php?error=O campo Idade é obrigatório.");
				exit();
			}else if(empty($peso_usuario)){
				header("Location: ../cadastro.php?error=O campo Peso é obrigatório.");
				exit();
			}else if(empty($altura_usuario)){
				header("Location: ../cadastro.php?error=O campo Altura é obrigatório.");
				exit();
			}
			//Caso NÃO tenha nada em branco
			else{
				$result_usuario = "INSERT INTO usuarios(nome, email, senha, phone, sexo, idade, peso, altura, nivel_atividade, objetivo) VALUES ('$nome_usuario','$email_usuario','$senha_usuario','$phone_usuario','$sexo_usuario','$idade_usuario','$peso_usuario','$altura_usuario','$ativ_fisica_usuario','$objetivo_usuario')";
				$resultado_usuario = mysqli_query($conn, $result_usuario);

				if(mysqli_affected_rows($conn) != 0){
					// Obtém o ID do usuário recém-inserido
					$usuario_id = mysqli_insert_id($conn);

					//SQL tabela 'peso_semanal'
					$semana_peso = $_POST['semana_peso'];
					$sql_semana_peso = "INSERT INTO peso_semanal(semana_peso, peso, id_usuario) VALUES ('$semana_peso', '$peso_usuario', '$usuario_id')";
					$result_semana_peso = mysqli_query($conn, $sql_semana_peso);	
								
					header("Location: ../login.php");
					exit();
				}else{
					header("Location: ../login.php?error=Ocorreu um erro, cadastre-se novamente por favor!");
					exit();
				}
			}
		}
	}
}
else{
    //Caso seja digitado 'a mão', voltar para o cadastro.php
	header("Location: ../cadastro.php");
	exit();
}
?>