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

INSERT INTO albums 

(titulo, artista, genero, ano, gravadora, capa, faixas, nota, status)

VALUES

(

'Lança Perfume',

'Rita Lee',

'Pop',

1980,

'EMI Records',

'capas/lancaperfume.jpeg',

8,

10,

'Ouvido'

),

(

'Mania de Você',

'Rita Lee',

'Pop',

1980,

'EMI Records',

'capas/maniadevoce.jpeg',

8,

9.5,

'Ouvido'

);