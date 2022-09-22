<?php require("functions.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="author" content="Kaique Souza Santos">
    <title>Lista de Exercicios | 01</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 10px;
            color: #fff;
        }

        .title-container {
            padding: 10px;
            width: 100%;
            height: 100px;
            background-color: #00DBDE;
            background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
            margin-top: 0;
            margin-bottom: 35px;
        }
    </style>
</head>

<body>
    <div class="title-container">
        <h1>Lista de Exercicios | 01</h1>
    </div>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Exercicio 01</h5>
                <p class="card-text" align="center"><?php exercicio_01();?></p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Exercicio 02</h5>
                <p class="card-text" align="center"><?php exercicio_02();?></p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Exercicio 03</h5>
                <p class="card-text" align="center"><?php exercicio_03();?></p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Exercicio 04</h5>
                <p class="card-text" align="center"><?php exercicio_04();?></p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Exercicio 05</h5>
                <p class="card-text" align="center"><?php exercicio_05();?></p>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">Exercicio 06</h5>
                <p class="card-text" align="center"><?php exercicio_06();?></p>
            </div>
        </div>
    </div>
</body>

</html>