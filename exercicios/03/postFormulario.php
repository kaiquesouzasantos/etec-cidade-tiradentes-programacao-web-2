<?php 
    require("functions.php");
    setcookie("cpf_validacao", validaCPF($_POST['txtCPF']));
    header("Location: index.php");
?>