<?php
    require_once("../../router.php");

    class AlunoDAO{
        private static function getConexao(){
            return Conexao::getConexao();
        }

        public static function cadastrar($nome, $cpf, $img, $codTurma){
            $aluno = new Aluno();
            $aluno->construct($nome, $cpf, $img, $codTurma);

            $insertAluno = "INSERT INTO tbAluno(codTurma, nomeAluno, cpfAluno, imgAluno) 
                                VALUES (:codTurma, :nome, :cpf, :img)";
            
            $stmt = self::getConexao()->prepare($insertAluno);
            
            $stmt->bindValue(":codTurma", $aluno->getCodTurma());
            $stmt->bindValue(":nome", $aluno->getNome());
            $stmt->bindValue(":cpf", $aluno->getCPF());
            $stmt->bindValue(":img", $aluno->getImg());

            $stmt->execute();

            return true;
        }

        public static function listaRegistros() : array {
            $alunos = array();
            $stmt = self::getConexao()->query("SELECT * FROM vwAlunos")->fetchAll();

            foreach($stmt as $aluno){
                $objeto = new Aluno();
                $objeto->increment(
                    $aluno['codAluno'], $aluno['nomeAluno'], $aluno['cpfAluno'], $aluno['imgAluno'],
                    $aluno['codTurma'], $aluno['nomeTurma']
                );
                
                array_push($alunos, $objeto);
            }

            return $alunos;
        }
    }
?>

