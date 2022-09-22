<?php 
    require_once("../../router.php");
    ViewController::getHead();
?>

<style>
    .container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .alert{
        text-align: center;
    }
</style>

<body>
    <div class="title-container"><h1>Exercicio 04 | Aviso</h1></div>
    <div class="container">
        <div class="alert alert-danger" role="alert">
            Não Foi Possivel Cadastrar as Informações Fornecidas, Verifique Eventuais Inconsistencias.
        </div>
        <div class="card mb-3">
            <a class="btn btn-dark" href="../../index.php">Voltar</a>
        </div>
    </div>
</body>
</html>