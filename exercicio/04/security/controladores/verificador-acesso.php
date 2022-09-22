<?php 
    $usuario = $_POST['txtUsuario'];
    $senha = $_POST['txtSenha'];

    if(($usuario == "acessoCadastro") && ($senha == "acessoCadastro")){
        session_start();
        $_SESSION['usuario-session'] = $usuario;
        $_SESSION['senha-session'] = $senha;
    }
    
    header("Location: ../../index.php");
?>