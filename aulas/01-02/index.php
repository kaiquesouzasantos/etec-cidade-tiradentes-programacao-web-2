<?php require("functions.php");?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="author" content="Kaique Souza Santos">
    <title>Aula 01-02 | Introdução ao PHP</title>
    <style>
        h1{
            text-align: center;
            margin-top: 5px;
            color: #fff;
        }        

        .title-container{
            padding: 10px;
            width: 100%;
            height: 100px;
            background: rgb(131,58,180);
            background: linear-gradient(90deg, rgba(131,58,180,1) 0%, rgba(253,29,29,1) 50%, rgba(252,176,69,1) 100%);
            margin-top: 0;
            margin-bottom: 35px;
        }
    </style>
</head>

<body>
    <div class="title-container">
        <h1>AULA 01-02 | Introdução ao PHP</h1>
    </div>
    <div class="container">
        <div class="card mb-3">
            <img src="img/anotacoes.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Anotações</h5>
                <p class="card-text" align="center"><b>//</b> anotacao | <b>#</b> anotacao | <b>*/</b> bloco_anotacao <b>/*</b></p>
            </div>
        </div>

        <div class="card mb-3">
            <img src="img/tiposDados.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Tipos de Variaveis/Dados</h5>
                <p class="card-text" align="center"><?php tipoVariaveis();?></p>
            </div>
        </div>

        <div class="card mb-3">
            <img src="img/operadoresAritm.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Operadores Aritméticos</h5>
                <p class="card-text"><?php operacoesAritmeticas();?></p>
            </div>
        </div>

        <div class="card mb-3">
            <img src="img/decisaoIf.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Fluxo Condicional com IF-ELSE</h5>
                <p class="card-text" align="center"><?php fluxoCondicionalIf();?></p>
            </div>
        </div>

        <div class="card mb-3">
            <img src="img/decisaoSwitch.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Fluxo Condicional com SWITCH</h5>
                <p class="card-text" align="center">Hoje é <b><?php fluxoCondicionalSwitch();?></p>
            </div>
        </div>
        <div class="card mb-3">
            <img src="img/lacoWhile.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Laço de Repetição WHILE</h5>
                <p class="card-text" align="center"><?php lacosRepticaoWhile();?></p>
            </div>
        </div>
        <div class="card mb-3">
            <img src="img/lacoDoWhile.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Laço de Repetição DO-WHILE</h5>
                <p class="card-text" align="center"><?php lacosRepticaoDoWhile();?></p>
            </div>
        </div>
        <div class="card mb-3">
            <img src="img/lacoFor.png" class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">Laço de Repetição FOR</h5>
                <p class="card-text" align="center"><?php lacosRepticaoFor();?></p>
            </div>
        </div>
    </div>
</body>
</html>