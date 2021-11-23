<?php
    class CarroDAO {
        public function cadastrar($conn, $carro) {
            $modelo     = $carro->getModelo();
            $cor        = $carro->getCor();
            $placa      = $carro->getPlaca();
            $ano        = $carro->getAno();
            $fabricante = $carro->getFabricante();

            try {
                $stmt = $conn->prepare("INSERT INTO tb_veiculo (modelo, cor, placa, 
                ano, fabricante) VALUES (?,?,?,?,?)");

                $stmt->bindParam(1, $modelo);
                $stmt->bindParam(2, $cor);
                $stmt->bindParam(3, $placa);
                $stmt->bindParam(4, $ano);
                $stmt->bindParam(5, $fabricante);

                $stmt->execute();
            }
            catch(PDOException $e) {
                echo 'Erro: ' . $e->getMessage();
            }
        }
    }
?>