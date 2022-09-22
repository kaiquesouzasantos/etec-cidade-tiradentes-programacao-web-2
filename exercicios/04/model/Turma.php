<?php
    class Turma{
        private $codTurma, $nomeTurma;

        public function construct($nomeTurma){
            $this->nomeTurma = $nomeTurma;
        }

        public function increment($codTurma, $nomeTurma){
            $this->codTurma = $codTurma;
            $this->nomeTurma = $nomeTurma;
        }

        public function getCodTurma(){return $this->codTurma;}
        public function getNomeTurma(){return $this->nomeTurma;}
        
        public function setCodTurma($codTurma){$this->codTurma = $codTurma;}
        public function setNomeTurma($nomeTurma){$this->nomeTurma = $nomeTurma;}
    }
?>