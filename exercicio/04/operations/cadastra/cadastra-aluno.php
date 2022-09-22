<?php 
    require_once("../../router.php");

    if(!AlunoController::validaCPF($_POST['txtCPF']) or !AlunoController::verificaPreenchimento()){
        header("Location: ../../view/avisos/aviso-falha.php");
    }else{
        AlunoDAO::cadastrar(
            $_POST['txtNome'], $_POST['txtCPF'], AlunoController::getDestino(), $_POST['slTurma']
        );
    
        header("Location: ../../view/avisos/aviso-sucesso.php");
    }
?>