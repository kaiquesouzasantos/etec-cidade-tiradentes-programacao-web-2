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
                <form>
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label class="form-label">Nome</label>
                            <input type="text" class="form-control" value="<?php echo($nome);?>" required readonly>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control" value="<?php echo($email);?>" required readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-6">
                            <label class="form-label">Turma</label>
                            <input type="text" class="form-control" value="<?php echo($turma);?>" required readonly>
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label">Periodo</label>
                            <input type="text" class="form-control" value="<?php echo($periodo);?>" required readonly>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-4">
                            <label class="form-label">RG</label>
                            <input type="text" class="form-control" value="<?php echo($rg);?>" required readonly>
                        </div>
                        <div class="mb-3 col-4">
                            <label class="form-label">Histórico</label>
                            <input type="text" class="form-control" value="<?php echo($historico);?>" required readonly>
                        </div>
                        <div class="mb-3 col-4">
                            <label class="form-label">Endereço</label>
                            <input type="text" class="form-control" value="<?php echo($endereco);?>" required readonly>
                        </div>
                    </div>
                </form>
                <a class="btn btn-dark col-12" href="index.php">Voltar</a>
            </div>
        </div>
    </div>
</body>
</html>