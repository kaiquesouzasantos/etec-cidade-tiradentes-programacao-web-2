<?php require("functions.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php escreveHeader("Array");?>
</head>
<body>
    <div class="title-container">
        <h1>AULA 05 | Formulario</h1>
    </div>
    
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Dados Informados</h5>
                <p class="card-text" align="center">
                <?php
                    $vetorAluno = array(
                        0 => $_POST['txtNome'],1 => $_POST['txtCPF']
                    );

                    for($i = 0; $i < 2; $i++){
                        echo($vetorAluno[$i]." ");
                    }
                ?>
                </p>
            </div>
        </div>
    </div>
</body>
</html>