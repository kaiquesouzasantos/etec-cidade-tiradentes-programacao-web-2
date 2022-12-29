<?php require("functions.php");?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php escreveHeader("Validacao de CPF");?>
</head>

<body>
    <div class="title-container">
        <h1>VALIDAÇÃO DE CPF</h1>
    </div>

    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">CPF</h2>
                <?php 
                    if(isset($_COOKIE['cpf_validacao'])){
                        if($_COOKIE['cpf_validacao'] == true){
                            echo("
                                <p style='color: #149c68;'><strong>CPF VALIDO</strong></p>
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