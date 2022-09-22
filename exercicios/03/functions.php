<?php 
    function escreveHeader($nomePagina){
        echo('
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
            <meta name="author" content="Kaique Souza Santos">
            <title>'.$nomePagina.'</title>
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
                    background-color: #00DBDE;
                    background-image: linear-gradient(90deg, #00DBDE 0%, #FC00FF 100%);
                    margin-top: 0;
                    margin-bottom: 35px;
                }

                .title-container p {
                    text-align: center;
                    color: #fff;
                    margin-bottom: 5px;
                }

                h2 {
                    text-align: center;
                }
            </style>
        ');
    }

    function escreveFormulario(){
        echo('
        <form method="POST" action="postFormulario.php">
            <div class="mb-3">
                <input type="text" class="form-control" placeholder="Informe o CPF" name="txtCPF" id="txtCPF" required>
            </div>
            <button type="submit" class="btn btn-primary" id="btnEnviar">Verificar</button>
        </form>
        ');
    }

    function validaCPF($cpf){
        // Tratamento
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
        if (strlen($cpf) != 11) {echo 'CPF com Numeros Insuficeintes<br>'; return false;}	
        $digitos = substr($cpf, 0, 9);

        if(
            $digitos == "111111111" && $digitos == "222222222" && $digitos == "333333333"
            && $digitos == "444444444" && $digitos == "5555555555" && $digitos == "666666666"
            && $digitos == "777777777" && $digitos == "888888888" && $digitos == "999999999"
        ) return false;

        // Calculo
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
        $novo_cpf = calc_digitos_posicoes($novo_cpf, 11 );
        
        // Verificacao - Comparacao
        if($novo_cpf === $cpf) {echo "CPF Informado é <b>VALIDO</b>. <br>";
        } else {echo "CPF Informado é <b>INVALIDO</b>. <br>";}
    }
?>