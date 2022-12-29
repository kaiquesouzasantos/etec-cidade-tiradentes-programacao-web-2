<?php 
    function escreveHeader($nomePagina){
        echo('
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <meta name="author" content="Kaique Souza Santos">
            <title>Aula 05 | '.$nomePagina.'</title>
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

                h5, p{
                    text-align: center;
                }
            </style>
        ');
    }

    function escreveFormulario(){
        echo('
        <form method="POST" action="postFormulario.php">
            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="txtNome" id="txtNome" required>
            </div>
            <div class="mb-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" name="txtCPF" id="txtCPF" required max-length=15>
            </div>
            <button type="submit" class="btn btn-primary col-12" id="btnEnviar">Cadastrar</button>
        </form>
        ');
    }

    function validaCPF($cpf){
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        if (strlen($cpf) != 11) {return false;}	
        $digitos = substr($cpf, 0, 9);

        if(
            $digitos == "111111111" && $digitos == "222222222" && $digitos == "333333333"
            && $digitos == "444444444" && $digitos == "5555555555" && $digitos == "666666666"
            && $digitos == "777777777" && $digitos == "888888888" && $digitos == "999999999"
        ) return false;

        function calc_digitos_posicoes( $digitos, $posicoes = 10, $soma_digitos = 0 ) {
            for($i = 0; $i < strlen($digitos); $i++) {
                $soma_digitos = $soma_digitos + ($digitos[$i] * $posicoes);                    
                $posicoes--;
            }
    
            $soma_digitos = $soma_digitos % 11;
    
            if ($soma_digitos < 2) {$soma_digitos = 0;
            } else {$soma_digitos = 11 - $soma_digitos;}

            return $digitos . $soma_digitos;            
        }

        $novo_cpf = calc_digitos_posicoes($digitos );
        $novo_cpf = calc_digitos_posicoes($novo_cpf, 11);
        
        return $novo_cpf === $cpf;
    }
?>