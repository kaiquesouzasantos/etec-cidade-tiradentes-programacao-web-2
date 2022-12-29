<?php require("functions.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php escreveHeader("CADASTRO DE VACINAÇÃO");?>
</head>

<body>
    <div class="title-container">
        <h1>CADASTRO DE VACINAÇÃO</h1>
    </div>

    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">GET</h5>
                <?php escreveFormulario("GET","getFormulario.php");?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">POST</h5>
                <?php escreveFormulario("POST","postFormulario.php");?>
            </div>
        </div>
    </div>
</body>
</html>