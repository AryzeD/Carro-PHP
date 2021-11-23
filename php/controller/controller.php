<?php
    include '../dao/Conexao.class.php';
    include '../model/Carro.class.php';
    include '../dao/CarroDAO.class.php';

    $conexao = new Conexao();
    $carro = new Carro();
    $cadastro = new CarroDAO();

    $carro->setModelo($_POST['modelo']);
    $carro->setCor($_POST['cor']);
    $carro->setPlaca($_POST['placa']);
    $carro->setAno($_POST['ano']);
    $carro->setFabricante($_POST['fabricante']);

    $cadastro->cadastrar($conexao->conexaoPDO(), $carro);

    echo '<h1 align="center">Cadastro Realizado com Sucesso!<h1/>'
?>