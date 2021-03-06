<?php
    
    require_once 'Pessoa.php';

    class Aluno extends Pessoa
    {
        private $matricula;
        private $curso;

        public function __construct($nome, $idade, $sexo, $matricula, $curso)
        {
            $this->setNome($nome);
            $this->setIdade($idade);
            $this->setSexo($sexo);
            $this->setMatricula($matricula);
            $this->setCurso($curso);
        }

        public function setMatricula($matricula)
        {
            $this->matricula = $matricula;
        }

        public function setCurso($curso)
        {
            $this->curso = $curso;
        }

        public function getMatricula()
        {
            return $this->matricula;
        }

        public function getCurso()
        {
            return $this->curso;
        }

        public function calcelarMatricula()
        {
            echo "<p>Matrícula será cancelada</p>";
        }
    }

?>