<?php 
session_start(); 
include_once "connection.php";

//Caso o POST seja efetuado
if (isset($_POST['email']) && isset($_POST['password'])) {

    //validação
    function validate($data){
        $data = trim($data); // Remove espaços em branco extras no início e no final do valor.
        $data = stripslashes($data);
        $data = htmlspecialchars($data); // Resumo Google: Converte caracteres especiais em entidades HTML. Isso é feito para evitar ataques de injeção de código (como ataques de cross-site scripting, XSS) e garantir que os dados sejam exibidos de forma segura em páginas da web.
        return $data;
    }
 
    $email = validate($_POST['email']);
    $senha = validate($_POST['password']);

	$_SESSION['email_usuario'] = $email;
 
    //Caso o email esteja em branco
    if (empty($email)) {
        //dar um valor à "error" e um valor à "email"(sendo o mesmo já digitado)
		header("Location: ../login.php?error=O Email é obrigatório");
	    exit();
	}else if(empty($senha)){
        header("Location: ../login.php?error=A Senha é obrigatória");
	    exit();
	}
    //Caso NÃO tenha nada em branco
    else{
        //Checar email = email no banco de dados
		$sql = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
		$result = mysqli_query($conn, $sql);

        //Se alguma linha for encontrada:
		if (mysqli_num_rows($result)) {
			$row = mysqli_fetch_assoc($result);
            //Se o email for estritamente igual o email digitado e senha...
            if ($row['email'] === $email && password_verify($senha, $row['senha'])) {
                //dados da session
            	$_SESSION['id'] = $row['ID'];
            	$_SESSION['nome'] = $row['nome'];
            	$_SESSION['email'] = $row['email'];
            	$_SESSION['senha'] = $row['senha'];
            	$_SESSION['phone'] = $row['phone'];
            	$_SESSION['sexo'] = $row['sexo'];
            	$_SESSION['peso'] = $row['peso'];
            	$_SESSION['altura'] = $row['altura'];
            	header("Location: ../home.php");
		        exit();
            }else{
				header("Location: ../login.php?error=Email ou Senha incorreto");
		        exit();
			}
		}else{
			header("Location: ../login.php?error=Email ou Senha incorreto");
	        exit();
		}
	}

}else{
    //Caso seja digitado 'a mão', voltar para o login.php
	header("Location: ../login.php");
	exit();
}

?>