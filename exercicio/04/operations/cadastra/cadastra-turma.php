<?php 
    require_once("../../router.php");

    if(empty($_POST['txtNome'])){
        header("Location: ../../view/avisos/aviso-falha.php");
    }else{
        TurmaDAO::cadastrar($_POST['txtNome']);
        header("Location: ../../view/avisos/aviso-sucesso.php");
    }
?>