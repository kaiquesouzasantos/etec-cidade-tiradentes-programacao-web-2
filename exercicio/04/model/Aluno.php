<?php
    class Aluno{
        private $codAluno, $codTurma, $nomeTurma, $nome, $CPF, $img;

        public function construct($nome, $CPF, $img, $codTurma){
            $this->nome = $nome;
            $this->CPF = $CPF;
            $this->img = $img;
            $this->codTurma = $codTurma;
        }

        public function increment($codAluno, $nome, $CPF, $img, $codTurma, $nomeTurma){
            $this->construct($nome, $CPF, $img, $codTurma);
            $this->setCodAluno($codAluno);
            $this->setNomeTurma($nomeTurma);
        }

        public function getCodAluno(){return $this->codAluno;}
        public function getNome(){return $this->nome;}
        public function getCPF(){return $this->CPF;}
        public function getImg(){return $this->img;}
        
        public function setCodAluno($codAluno){$this->codAluno = $codAluno;}
        public function setNome($nome){$this->nome = $nome;}
        public function setCPF($CPF){$this->CPF = $CPF;}
        public function setImg($img){$this->img = $img;}

        public function getCodTurma(){return $this->codTurma;}
        public function getNomeTurma(){return $this->nomeTurma;}
        public function setCodTurma($codTurma){$this->codTurma = $codTurma;}
        public function setNomeTurma($nomeTurma){$this->nomeTurma = $nomeTurma;}
    }
?>