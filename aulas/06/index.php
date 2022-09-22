<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="author" content="Kaique Souza Santos">
    <title>Aula 06 | Cookie</title>
    <style>
        h1 {
            text-align: center;
            margin-top: 5px;
            color: #fff;
        }

        .title-container {
            padding: 10px;
            width: 100%;
            height: 100px;
            background: rgb(131, 58, 180);
            background: linear-gradient(90deg, rgba(131, 58, 180, 1) 0%, rgba(253, 29, 29, 1) 50%, rgba(252, 176, 69, 1) 100%);
            margin-top: 0;
            margin-bottom: 5px;
        }

        .title-container p {
            text-align: center;
            color: #fff;
            margin-bottom: 5px;
        }

        h5 {
            text-align: center;
        }

        .corAltera {
            padding: 10px;
            width: 100%;
            height: 100px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="title-container">
        <h1>AULA 06 | Cookie</h1>
    </div>
    <?php 
        if (isset($_COOKIE['corCookie'])){
            echo("<div class='corAltera' style='background-color:".$_COOKIE['corCookie']."'></div>");
        }else {
            echo("<div class='corAltera' style='background-color:black'></div>");
        }
    ?>
    <div class="container">
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">FORMULARIO</h5>
                <form method="POST" action="functions.php">
                    <div class="mb-3">
                        <label class="form-label">Cor</label><br>
                        <select class="form-select" name="corSelecao" required>
                            <option value="pink">ROSA</option>
                            <option value="blue">AZUL</option>
                            <option value="red">VERMELHO</option>
                            <option value="green">VERDE</option>
                        </select>                       
                    </div>
                    <button type="submit" class="btn btn-primary" id="btnEnviar">Alterar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>