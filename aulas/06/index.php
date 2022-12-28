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
</head>

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

    h5, option {
        text-align: center;
    }

    .corAltera {
        padding: 10px;
        width: 100%;
        height: 100px;
        margin-bottom: 20px;
        border-radius: 10px;
    }
</style>

<body>
    <div class="title-container">
        <h1>AULA 06 | Cookie</h1>
    </div>
    <div class="container">
        <?php 
            if (isset($_COOKIE['corCookie'])){
                echo("<div class='corAltera mb-3' style='background-color:".$_COOKIE['corCookie']."'></div>");
            }else {
                echo("<div class='corAltera mb-3' style='background-color:black'></div>");
            }
        ?>
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">FORMULARIO</h5>
                <form method="POST" action="functions.php">
                    <div class="mb-3">
                        <label class="form-label">Selecione uma cor:</label><br>
                        <select class="form-select" name="corSelecao" required>
                            <option value="#060212">PRETO</option>
                            <option value="#3b3e37">CINZA</option>

                            <option value="#fc284f">ROSA</option>
                            <option value="#eb5e7f">ROSA SUAVE</option>
                            <option value="#bd0d59">ROSA ESCURO</option>

                            <option value="#059b9a">AZUL</option>
                            <option value="#095169">AZUL SUAVE</option>
                            <option value="#0c0636">AZUL ESCURO</option>

                            <option value="#e03e36">VERMELHO ESCURO</option>
                            <option value="#fc1a1a">VERMELHO INTENSO</option>
                            <option value="#fc284f">VERMELHO SUAVE</option>

                            <option value="#ff824a">LARANJA</option>
                            <option value="#fe5412">LARANJA INTENSO</option>
                            <option value="#f1731f">LARANJA ESCURO</option>

                            <option value="#9fd86b">VERDE</option>
                            <option value="#53ba83">VERDE CLARO</option>
                            <option value="#149c68">VERDE INTENSO</option>
                            <option value="#56704b">VERDE MUSGO</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-dark col-12" id="btnEnviar">Alterar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>