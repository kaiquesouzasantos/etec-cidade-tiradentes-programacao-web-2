<?php 
    function escreveHeader($nomePagina){
        echo('
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <meta name="author" content="Kaique Souza Santos">
            <title>Aula 03-04 | '.$nomePagina.'</title>
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
                    margin-bottom: 35px;
                }

                .title-container p {
                    text-align: center;
                    color: #fff;
                    margin-bottom: 5px;
                }

                h5 {
                    text-align: center;
                }
            </style>
        ');
    }

    function escreveFormulario($metodo, $arquivoEnvio){
        echo('
        <form method="'.$metodo.'" action="'.$arquivoEnvio.'">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="txtNome" id="txtNome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="txtEmail" id="txtEmail" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Turma</label><br>
                <select class="form-select" name="slTurma" required>
                    <option value="0">Selecione uma Turma</option>
                    <option value="1">1° DS</option>
                    <option value="2">2° DS</option>
                    <option value="3">3° DS</option>
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Periodo</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="rdPeriodo" id="rdPeriodo" value="1">Manhã<br>
                    <input class="form-check-input" type="radio" name="rdPeriodo" id="rdPeriodo" value="2">Tarde
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Documentos Entregues</label><br>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="ckRg" id="ckRg" value="1">RG<br>
                    <input type="checkbox" class="form-check-input" name="ckHistorico" id="ckHistorico" value="1">Histórico do Ensino Fundamental<br>
                    <input type="checkbox" class="form-check-input" name="ckEndereco" id="ckEndereco" value="1">Comprovante de Endereco<br>
                </div>
            </div>

            <button type="submit" class="btn btn-primary col-12" id="btnEnviar">Cadastrar</button>
        </form>
        ');
    }
?>