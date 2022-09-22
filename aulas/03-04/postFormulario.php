<?php
    $default = "Não Informado";
    $informado = "Documento Recebido";
    
    $nome = $_POST['txtNome'];
    $email = $_POST['txtEmail'];
    $turma = $_POST['slTurma'];
    $periodo = $_POST['rdPeriodo'];
    $rg = isset($_POST['ckRg']) ? $informado : $default;
    $historico = isset($_POST['ckHistorico']) ? $informado : $default;
    $endereco = isset($_POST['ckEndereco']) ? $informado : $default; 

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

    $saida = $nome."<br>".$email."<br>".$turma."<br>".$periodo."<br>".$rg."<br>".$historico."<br>".$endereco;

    require("functions.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php escreveHeader("POST");?>
</head>
<body>
    <div class="title-container">
        <h1>AULA 03-04 | POST</h1>
    </div>
    
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Dados Informados</h5>
                <p class="card-text" align="center"><?php echo($saida);?></p>
            </div>
        </div>
    </div>
</body>
</html>