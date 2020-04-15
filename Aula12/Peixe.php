<?php

    require_once 'Peixe.php';

    class Peixe extends Animal
    {
        private $corEscama;

        public function setCorEscama($corEscama)
        {
            $this->corEscama = $corEscama;
        }

        public function getCoreEscama()
        {
            return $this->corEscama;
        }

        public function locomover()
        {
            echo "<p>Nadando</p>";
        }

        public function alimentar()
        {
            echo "<p>Comendo substâncias</p>";
        }

        public function emitirSom()
        {
            echo "<p>Peixe não faz som</p>";
        }

        public function soltarBolha()
        {
            echo "<p>Soltou uma bolha</p>";
        }
    }

?>