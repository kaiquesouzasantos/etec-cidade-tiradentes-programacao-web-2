<?php 
    header("Location: index.php");
    setcookie('corCookie', $_POST['corSelecao'], time()+180);
?>