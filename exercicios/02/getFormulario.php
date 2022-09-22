<?php
    $nome = $_GET['txtNome'];
    $cpf = $_GET['txtCPF'];
    $dtNascimento = $_GET['dtNascimento'];
    $dtAplicacao = $_GET['dtAplicacao'];
    $doseAplicacao = isset($_GET['rdDose']) ? $_GET['rdDose'] : "<b>Não Informado</b>"; 
    $UBS = $_GET['slUBS']; 

    if($UBS == "0"){
        $UBS = "<b>Nao Informado</b>";
    }elseif($UBS == "1"){
        $UBS = "150 - Cidade Tiradentes";
    }elseif($UBS == "2"){
        $UBS = "120 - jd. Soares";
    }elseif($UBS == "3"){   
        $UBS = "87 - Santa Etelvina";
    }else{
        $UBS = "43 - Carlos Gentili";
    }

    $comprovante = "UBS: ".$UBS."<br>Foi registrada a aplicação da ".$doseAplicacao."° dose para o paciente sr(a) ".$nome.".<br>São Paulo,".$dtAplicacao;

    require("functions.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php escreveHeader("COMPROVANTE DE VACINAÇÃO");?>
</head>
<body>
    <div class="title-container">
        <h1>CADASTRO DE VACINAÇÃO | COMPROVANTE</h1>
    </div>

    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <p class="card-text" align="center"><?php echo($comprovante);?></p>
            </div>
        </div>
        <a href="index.php" class="btn btn-primary">Registrar Outro Paciente</a>
    </div>
</body>
</html>