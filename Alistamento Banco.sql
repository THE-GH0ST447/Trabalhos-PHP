CREATE DATABASE alistamento;
USE alistamento;

CREATE TABLE usuarios (
    usu_id INT PRIMARY KEY AUTO_INCREMENT,
    usu_nome VARCHAR(255) NOT NULL,
    usu_idade INT NOT NULL,
    usu_sexo CHAR NOT NULL,
    usu_status CHAR(1) NOT NULL
);

SELECT *FROM usuarios;

