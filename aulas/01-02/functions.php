<?php 
    function tipoVariaveis(){
        $a = 10; 
        $b = "Kaique";
        $c = 8.5;

        echo("<b>INT</b>: ".$a." | <b>STRING</b>: ".$b." | <b>FLOAT</b>: ".$c);
    }

    function operacoesAritmeticas(){
        $valor_01 = 3;
        $valor_02 = 2;
        
        echo("<b>SOMA</b>: ".$valor_01." + ".$valor_02." = ".($valor_01+$valor_02)."<br>");
        echo("<b>SUBTRAÇÃO</b>: ".$valor_01." - ".$valor_02." = ".($valor_01-$valor_02)."<br>");
        echo("<b>MULTIPLICAÇÃO</b>: ".$valor_01." * ".$valor_02." = ".($valor_01*$valor_02)."<br>");
        echo("<b>DIVISÃO</b>: ".$valor_01." / ".$valor_02." = ".($valor_01/$valor_02)."<br>");
        echo("<b>DIVISÃO</b>(extraindo somente em inteiro): ".$valor_01." / ".$valor_02." = ".((int)($valor_01/$valor_02))."<br>");
        echo("<b>POTENCIA</b>: ".$valor_01." ** ".$valor_02." = ".($valor_01**$valor_02)."<br>");
        echo("<b>MODULO</b>: ".$valor_01." % ".$valor_02." = ".($valor_01%$valor_02)."<br>");
    }

    function fluxoCondicionalIf(){
        $num = 10;

        if($num > 0){
            echo("Numero <b>".$num."</b> é POSITIVO!<br>");
        }elseif ($num  < 0) {
            echo("Numero <b>".$num."</b> é NEGATIVO!<br>");
        }else{
            echo("Numero <b>".$num."</b> é NULO!<br>");
        }
        echo("</p>");
    }

    function fluxoCondicionalSwitch(){
        $diaSemana = 2;

        switch($diaSemana){
            case 1: case 7:
                echo("FINAL DE SEMANA");
                break;
            case 2:
                echo("SEGUNDA");
                break;
            case 3:
                echo("TERCA");
                break;
            case 4:
                echo("QUARTA");
                break;
            case 5: 
                echo("QUINTA");
                break;
            case 6:
                echo("SEXTA");
                break;
            default:
                echo("DIA INVALIDO!");
        }   
        echo("</b></p>");
    }

    function lacosRepticaoWhile(){
        $i = 1;
        $n = 5;
        echo("Tabuada do <b>".$n."</b><br>");
        while ($i<=10){
            $r = $i*$n;
            echo($n." x ".$i." = ".$r."<br>");
            $i++;
        }
    }

    function lacosRepticaoDoWhile(){
        $i = 1;
        $n = 7;
        echo("Tabuada do <b>".$n."</b><br>");
        do{
            $r = $i*$n;
            echo($n." x ".$i." = ".$r."<br>");
            $i++;
        }while($i<=10);
    }

    function lacosRepticaoFor(){
        $n = 8;
        echo("Tabuada do <b>".$n."</b><br>");
        for($i=1;$i<=10; $i++){
            $r = $i*$n;
            echo($n." x ".$i." = ".$r."<br>");
        }
    }
?>