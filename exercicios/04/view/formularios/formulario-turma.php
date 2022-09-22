<?php 
    require_once("../../router.php");
    
    include_once(rota("security/controladores/verificador-permanencia.php"));
    ViewController::getHead();
?>

<body>
    <div class="title-container"><h1>Exercicio 04 | Cadastro de Turma</h1></div>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">CADASTRO DE TURMA</h5>
                <form method="POST" action="../../operations/cadastra/cadastra-turma.php">
                    <div class=" mb-3">
                        <label class="form-label">Nome da Turma</label>
                        <input type="text" class="form-control" name="txtNome" required>
                    </div>               
                    <button type="submit" class="btn btn-primary" id="btnEnviar">Cadastrar</button>
                </form>
            </div>
        </div>
        <div class="card mb-3">
            <a class="btn btn-dark" href="../../index.php">Voltar</a>
        </div>
        <div class="card mb-3">
            <a class="btn btn-danger" href="../../security/controladores/logout.php">Encerrar Sessão</a>
        </div>
    </div>
</body>
</html>