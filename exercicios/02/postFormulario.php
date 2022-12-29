<?php
    require("functions.php");

    $nome = $_POST['txtNome'];
    $cpf = validaCPF($_POST['txtCPF']) ? $_POST['txtCPF'] : "Invalido";
    $dtNascimento = $_POST['dtNascimento'];
    $dtAplicacao = $_POST['dtAplicacao'];
    $doseAplicacao = isset($_POST['rdDose']) ? $_POST['rdDose'] : "<b>Não Informado</b>"; 
    $UBS = $_POST['slUBS']; 

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
                <p class="card-text">
                    <?php 
                        if($UBS == "<b>Nao Informado</b>" or $cpf == "Invalido"){
                            echo(" <p style='color: #e03e36;'><strong>NÃO FOI POSSIVEL REALIZAR O AGENDAMENTO</strong></p>");
                        } else {
                            echo(" <p style='color: #149c68;'><strong>VACINAÇÃO AGENDADA COM SUCESSO</strong></p>");  
                        }
                    ?>
                </p>
                <?php 
                    escreveExibicao($nome, $cpf, $dtAplicacao, $dtAplicacao, $doseAplicacao, $UBS);
                ?>
            </div>
        </div>
        <a href="index.php" class="btn btn-dark col-12">Registrar Outro Paciente</a>
    </div>
</body>
</html>