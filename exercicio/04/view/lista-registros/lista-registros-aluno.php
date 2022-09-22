<?php
    require_once("../../router.php");
    ViewController::getHead();
?>

<style>
    table img{
        width: 40px;
        border-radius: 20%;
    }

    table{
        text-align: center;
    }
</style>

<body>
    <div class="title-container"><h1>Exercicio 04 | Listagem de Registros de Alunos</h1></div>
    <div class="container">
        <div class="card mb-3">
            <a class="btn btn-dark" href="../../index.php">Voltar</a>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Foto</th>
                    <th scope="col">Codigo</th>
                    <th scope="col">Nome</th>
                    <th scope="col">CPF</th>
                    <th scope="col">Turma</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    AlunoController::listaRegistros();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>