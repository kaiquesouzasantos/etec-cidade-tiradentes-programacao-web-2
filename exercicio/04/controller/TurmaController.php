<?php
    require_once("../../router.php");
    
    class TurmaController{
        public static function listagemTurmas(){
            $turmas = TurmaDAO::getTurmas();
            $listagem = "";

            foreach($turmas as $turma){
                $listagem .= '<option value="'.$turma->getCodTurma().'">'.$turma->getNomeTurma().'</option>';
            }

            return $listagem;
        }
    }
?>