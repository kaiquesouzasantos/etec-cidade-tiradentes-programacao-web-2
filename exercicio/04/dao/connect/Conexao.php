<?php
    class Conexao{
        public static function getConexao(){
            // $conexao = new PDO("TIPO_BANCO:host=ERVIDOR;dbname=NOME_BANCO", "USUARIO", "SENHA"); 
            
            $conexao = new PDO("mysql:host=sql110.epizy.com;dbname=epiz_30865194_bdEtecCidadeTiradentes;charset=utf8", "epiz_30865194", "RfvxflNcb7GnJa5");
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conexao;
        }
    }
?>