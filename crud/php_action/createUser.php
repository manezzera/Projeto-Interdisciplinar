<?php
//sessão 
session_start();
//conexão
require_once 'db_connect_user.php';

if(isset($_POST['btn-cadastrarUsuario'])):
    $usuario = mysqli_escape_string($connect, $_POST['usuario']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

if($usuario == "" || $usuario == null):
        $_SESSION['mensagem'] = "Preecha as informações";
        header('Location: ../php_login/cadastrar_usuario.php');

    else:
      if($logarray == $usuario):

        $_SESSION['mensagem'] = "Usuário já cadastrado!";
        header('Location: ../php_login/cadastrar_usuario.php');
        die();

      else:
        $sql = "INSERT INTO usuarios (usuario, senha) VALUES ('$usuario','$senha')";
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
            header('Location: ../php_login/cadastrar_usuario.php');

        else:
            $_SESSION['mensagem'] = "Erro ao cadastrar!";
            header('Location: ../php_login/cadastrar_usuario.php');

        endif;
    endif; 
endif;  
endif;

