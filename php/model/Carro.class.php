<?php
    class Carro {
        private $modelo;
        private $cor;
        private $placa;
        private $ano;
        private $Fabricante;

        public function setModelo($modelo) {
            $this->modelo = $modelo;
        }

        public function getModelo() {
            return $this->modelo;
        }

        public function setCor($cor) {
            $this->cor = $cor;
        }

        public function getCor() {
            return $this->cor;
        }

        public function setPlaca($placa) {
            $this->placa = $placa;
        }

        public function getPlaca() {
            return $this->placa;
        }

        public function setAno($ano) {
            $this->ano = $ano;
        }

        public function getAno() {
            return $this->ano;
        }

        public function setFabricante($fabricante) {
            $this->fabricante = $fabricante;
        }

        public function getFabricante() {
            return $this->fabricante;
        }
    }
?>