<?php
    require_once("../../router.php");

    class TurmaDAO{
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrar($nomeTurma){
            $turma = new Turma();
            $turma->construct($nomeTurma);

            $insertTurma = "INSERT INTO tbTurma(nomeTurma) VALUES (:nome)";
            
            $stmt = self::getConexao()->prepare($insertTurma);
            $stmt->bindValue(":nome", $turma->getNomeTurma());

            $stmt->execute();

            return true;
        }

        public static function getTurmas() : array {
            $turmas = array();
            $stmt = self::getConexao()->query("SELECT * FROM tbTurma")->fetchAll();

            foreach($stmt as $turma){
                $objeto = new Turma();
                $objeto->increment($turma['codTurma'], $turma['nomeTurma']);

                array_push($turmas, $objeto);
            }

            return $turmas;
        }
    }
?>

