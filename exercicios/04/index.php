<?php 
    require_once("router.php");

    ViewController::getHead();
?>

<style>
    .container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }
</style>

<body>
    <div class="title-container">
        <h1>Exercicio 04 | Cadastro de Aluno e Turma</h1>
    </div>
    <div class="container">
        <div class="card mb-3">
            <a class="btn btn-dark" href="view/formularios/formulario-aluno.php">Cadastrar Aluno</a>
        </div>
        <div class="card mb-3">
            <a class="btn btn-dark" href="view/formularios/formulario-turma.php">Cadastrar Turma</a>
        </div>
        <div class="card mb-3">
            <a class="btn btn-success" href="view/lista-registros/lista-registros-aluno.php">Listar Alunos</a>
        </div>
    </div>
</body>
</html>