<?php 
    require "model/Aluno.php";
    require "controller/AlunoController.php";
    require "controller/ViewController.php";

    $controller = new AlunoController();
    $controllerView = new ViewController();

    if(!$controller->validaCPF($_POST['txtCPF'])){
        header("Location: index.php");
    }

    $aluno = new Aluno(
        $_POST['txtNome'], $_POST['txtMatricula'], $_POST['txtCPF'], $controller->getDestino()
    );

    $controllerView->getHead();
?>

<style>
    .container_especial {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<body>
    <div class="title-container">
        <h1>Aula 08 | Orientação a Objetos</h1>
    </div>
    <div class="container">
        <?php
                echo('
                <div class="card mb-3 container_especial" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="'.$aluno->getImg().'" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">DADOS CADASTRAIS</h5>
                                <p class="card-text">
                                    <br>
                                    <b>Nome</b>['.$aluno->getNome().']
                                    <br>
                                    <b>Matricula</b>['.$aluno->getMatricula().']
                                    <br>
                                    <b>CPF</b>['.$aluno->getCPF().']
                                </p>
                                <p class="card-text">
                                    <small class="text-muted"><br>
                                        Cadastrado em '.date('d/m/Y').'
                                    </small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                ');
            ?>
    </div>
</body>

</html>