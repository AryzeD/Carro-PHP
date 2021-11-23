<?php
    class Conexao {
        private $servidor;
        private $banco;
        private $usuario;
        private $senha;

        public function __construct() {
            $this->servidor = 'localhost';
            $this->banco = 'db_carro';
            $this->usuario = 'root';
            $this->senha = '';
        }

        public function conexaoPDO() {

            try {
                $conn = new PDO("mysql:host=$this->servidor;dbname=$this->banco;
                charset=UTF8", $this->usuario, $this->senha);

                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            catch(PDOException $e) {
                echo 'falha na conexão: ' . $e->getMessage();
            }

            return $conn;

        }
    }
?>