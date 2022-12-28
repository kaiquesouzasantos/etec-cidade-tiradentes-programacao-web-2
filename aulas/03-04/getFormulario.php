<?php
    $default = "Não Informado";
    $informado = "Documento Recebido";
    $nome = $_GET['txtNome'];
    $email = $_GET['txtEmail'];
    $turma = $_GET['slTurma'];
    $periodo = $_GET['rdPeriodo'];
    $rg = isset($_GET['ckRg']) ? $informado : $default;
    $historico = isset($_GET['ckHistorico']) ? $informado : $default;
    $endereco = isset($_GET['ckEndereco']) ? $informado : $default; 

    if($periodo == "1"){
        $periodo = "Manhã";
    }elseif($periodo == "2"){
        $periodo = "Tarde";
    }else{
        $periodo = $default;
    }

    if($turma == "0"){
        $turma = $default;
    }elseif($turma == "1"){
        $turma = "1° DS";
    }elseif($turma == "2"){
        $turma = "2° DS";
    }else{
        $turma = "3° DS";
    }

    require("functions.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php escreveHeader("GET");?>
</head>

<body>
    <div class="title-container">
        <h1>AULA 03-04 | GET</h1>
    </div>

    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">DADOS INFORMADOS</h5>
                <?php
                    escreveExibicao($nome, $email, $turma, $periodo, $rg, $historico, $endereco);
                ?>
                <a class="btn btn-dark col-12" href="index.php">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>