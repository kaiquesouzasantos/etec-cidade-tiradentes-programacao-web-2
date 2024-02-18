<?php 
    require("functions.php");

    setcookie("cpf_validacao", validaCPF($_POST['txtCPF']));
    setcookie("nome", $_POST['txtNome']);
    setcookie("cpf", $_POST['txtCPF']);

    header("Location: index.php");
?>