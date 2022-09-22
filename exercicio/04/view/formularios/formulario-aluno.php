<?php 
    require_once("../../router.php");

    include_once(rota("security/controladores/verificador-permanencia.php"));
    ViewController::getHead();
?>

<body>
    <div class="title-container"><h1>Exercicio 04 | Cadastro de Aluno</h1></div>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">CADASTRO DE ALUNO</h5>
                <form method="POST" action="../../operations/cadastra/cadastra-aluno.php" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="txtNome" pattern="[aA-zZ\s]+$" required>
                    </div>
                    <div class="mb-3">
                        <div class="col">
                            <label class="form-label data-form">CPF</label>
                            <input type="text" class="form-control" name="txtCPF" minlength="11" maxlength="15" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="col">
                            <label class="form-label data-form">Turma</label>
                            <select class="form-select" name="slTurma" required>
                                <?php echo(TurmaController::listagemTurmas()) ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label data-form">Foto</label>
                        <input type="file" class="form-control" accept="image/*" name="imgFoto" required>
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