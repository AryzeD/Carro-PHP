CREATE Table if not exists tb_veiculo (
    modelo VARCHAR(15) NOT NULL,
    cor VARCHAR(20) NOT NULL,
    placa VARCHAR(12) NOT NULL UNIQUE,
    ano INT(4) NOT NULL,
    fabricante VARCHAR(25) NOT NULL,
    PRIMARY KEY (placa)
);