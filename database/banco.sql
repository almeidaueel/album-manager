CREATE DATABASE IF NOT EXISTS album_manager;

USE album_manager;


CREATE TABLE IF NOT EXISTS albums (

    id INT AUTO_INCREMENT PRIMARY KEY,

    titulo VARCHAR(100) NOT NULL,

    artista VARCHAR(100) NOT NULL,

    genero VARCHAR(50),

    ano INT,

    gravadora VARCHAR(100),

    capa VARCHAR(255),

    faixas INT,

    nota DECIMAL(3,1),

    status VARCHAR(20)

);