<?php 
    function exercicio_01(){
        $numPlaca = "IPGE-4215";
        $numPlaca = str_split($numPlaca);
        $verifica = end($numPlaca);
        
        echo("O RODIZIO ACONTECE <b>");
        if($verifica == "1" or $verifica == "2"){
            echo("SEGUNDA");
        }elseif($verifica == "3" or $verifica == "4"){
            echo("TERCA");
        }elseif($verifica == "5" or $verifica == "6"){
            echo("QUARTA");
        }elseif($verifica == "7" or $verifica == "8"){
            echo("QUINTA");
        }elseif($verifica == "9" or $verifica == "0"){
            echo("SEXTA");
        }else{
            echo("DIA INVÁLIDO!");
        }
        echo("</b>");
    }

    function exercicio_02(){
        $array = array(3,4,6);
        $n = count($array);
        $max = $array[0];
        $min = $array[0];

        for ($i = 1; $i < $n; $i++){
            if ($max < $array[$i]){
                $max = $array[$i];
            }elseif($min > $array[$i]){
                $min = $array[$i];
            }
        }  

        //max($array)
        //min($array)
        echo("MAIOR NUMERO: <b>".$max."</b><br>");
        echo("MENOR NUMERO: <b>".$min."</b>");        
    }

    function exercicio_03(){
        $salarioFuncionario = 2332.2;
        $departamentoFuncionario = 2;
        // $depto = 1 = Operacional | $depto = 2 = Desenvolvimento
        $depto = array("Default","Operacional", "Desenvolvimento");
        $salarioAtualizado = 0;

        if($departamentoFuncionario == 1){
            $salarioAtualizado = $salarioFuncionario*1.15;
        }elseif($departamentoFuncionario == 2){
            if($salarioFuncionario >= 1500 and $salarioFuncionario < 1750){
                $salarioAtualizado = $salarioFuncionario*1.12;
            }elseif($salarioFuncionario >= 1750 and $salarioFuncionario < 2000){
                $salarioAtualizado = $salarioFuncionario*1.10;
            }elseif($salarioFuncionario >= 2000 and $salarioFuncionario < 3000){
                $salarioAtualizado = $salarioFuncionario*1.07;
            }elseif($salarioFuncionario > 3000){
                $salarioAtualizado = $salarioFuncionario*1.05;
            }
        }else{
            echo("DEPARTAMENTO INVALIDO!");
        }
        echo("SALARIO: <b>R$".$salarioFuncionario."</b><br>DEPARTAMENTO: <b>".$depto[$departamentoFuncionario]."</b><br>SALARIO ATUALIZADO: <b>R$".$salarioAtualizado."</b>");
    }

    function exercicio_04(){
        $base = 3;
        $expoente = 4;
        $resultado = 1;
        $k=1;
        
        while($k <= $expoente){
            $resultado *= $base;
            $k++;
        }
        echo("A POTENCICAÇÃO DE <b>".$base."</b> ELEVADO Á <b>".$expoente."°</b> É IGUAL Á <b>".$resultado."</b>");
    }

    function exercicio_05(){
        $numero = 10;
        $cont = 0;

        for($i = 1; $i <= $numero; $i++){
            if($numero % $i == 0){
                $cont++;
            }
        }

        if($cont == 2){
            echo("<b>".$numero."</b> É UM NUMERO <b>PRIMO!</b>");
        }else{
            echo("<b>".$numero."</b> É UM NUMERO <b>NÃO PRIMO!</b>");                     
        }
    }

    function exercicio_06(){
        $soma = 0;
        $mult = 1;

        for($j = 0;$j <= 20; $j++){
            if($j % 2 == 1){
                $soma += $j;
            }elseif($j != 0 and $j % 2 == 0){
                $mult *= $j;
            }
        }
        echo("Soma dos Numeros Impares: <b>".$soma."</b><br>");
        echo("Multiplicação dos Numeros Pares: <b>".$mult."</b>");
    }
?>