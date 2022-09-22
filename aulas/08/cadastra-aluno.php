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

<body>
    <div class="title-container">
        <h1>Aula 08 | Orientação a Objetos</h1>
    </div>
    <div class="container">
        <div class="card mb-3">
            <?php
                echo('
                <img src="'.$aluno->getImg().'" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">'.$aluno->getNome().'</h5>
                    <p class="card-text"><b>Matricula: </b> '.$aluno->getMatricula().'</p>
                    <p class="card-text"><b>CPF: </b>'.$aluno->getCPF().'</p>
                </div>
                ');
            ?>
        </div>
    </div>
</body>
</html>