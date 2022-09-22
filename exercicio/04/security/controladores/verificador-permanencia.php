<?php 
    session_start();

    if( ($_SESSION['usuario-session'] != "acessoCadastro") || ($_SESSION['senha-session'] != "acessoCadastro") ){
        header("Location: ../../view/formularios/formulario-login.php");
    }
?>