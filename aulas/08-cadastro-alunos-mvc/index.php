<?php 
    require "controller/ViewController.php";
    $controllerView = new ViewController();
    $controllerView->getHead();
?>

<body>
    <div class="title-container"><h1>Aula 08 | Orientação a Objetos</h1></div>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">CADASTRO DE ALUNO</h5>
                <form method="POST" action="cadastra-aluno.php" enctype="multipart/form-data">
                    <div class=" mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" class="form-control" name="txtNome" required>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label data-form">Matricula</label>
                            <input type="text" class="form-control" name="txtMatricula" minlength="5"  maxlength="10" required>
                        </div>
                        <div class="col">
                            <label class="form-label data-form">CPF</label>
                            <input type="text" class="form-control" name="txtCPF" minlength="11" maxlength="15" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label data-form">Foto</label>
                        <input type="file" class="form-control" accept="image/*" name="imgFoto">
                    </div>                    
                    <button type="submit" class="btn btn-primary col-12" id="btnEnviar">Cadastrar</button>
                </form>
            </div>
    </div>
</body>
</html>