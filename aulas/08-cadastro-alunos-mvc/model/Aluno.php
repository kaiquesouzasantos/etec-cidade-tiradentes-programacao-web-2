<?php
    class Aluno{
        private $nome, $matricula, $CPF, $img;

        public function __construct($nome, $matricula, $CPF, $img){
            $this->nome = $nome;
            $this->matricula = $matricula;
            $this->CPF = $CPF;
            $this->img = $img;
        }

        public function getNome(){return $this->nome;}
        public function getMatricula(){return $this->matricula;}
        public function getCPF(){return $this->CPF;}
        public function getImg(){return $this->img;}
        
        public function setNome($nome){$this->nome = $nome;}
        public function setMatricula($matricula){$this->matricula = $matricula;}
        public function setCPF($CPF){$this->CPF = $CPF;}
        public function setImg($img){$this->img = $img;}
    }
?>