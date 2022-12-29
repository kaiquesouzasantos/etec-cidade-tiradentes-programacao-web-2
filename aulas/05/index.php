<?php require("functions.php");?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php escreveHeader("Array");?>
</head>

<body>
    <div class="title-container">
        <h1>AULA 05 | Array</h1>
    </div>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">FORMULARIO</h5>
                <?php 
                    if(isset($_COOKIE['cpf_validacao'])){
                        if($_COOKIE['cpf_validacao'] == true){
                            echo("
                                <p style='color: #149c68;'><strong>CPF VALIDO</strong></p>
                                <p>Nome[".$_COOKIE['nome']."] | CPF[".$_COOKIE['cpf']."]</p>
                            ");
                        } 
                    } else {
                        echo("<p style='color: #e03e36;'><strong>CPF INVALIDO</strong></p>");
                    }

                    escreveFormulario();
                ?>
            </div>
        </div>
    </div>
</body>
</html>