<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <?php
    //nova conexão
    $conexao= new mysqli("localhost","root","",);

    //verifica se a conexão foi concluida com sucesso
    if($conexao->connect_error)
    {
        echo"conexao falhou" .$conexao->connect_error;;
    }
    // criação do banco de dados
    $create_database= "CREATE DATABASE IF NOT EXISTS AulaSW";
    $conexao->query($create_database);
    
    //criação das tabelas
    
    //tabela de clientes
    $tabela_clientes="CREATE TABLE CLIENTES(
     ID INT PRIMARY KEY AUTO_INCREMENT,
     NOME VARCHAR(180) NOT NULL,
     TELEFONE VARCHAR(20)   
    )";
    //tabela atnedentes
    $tabela_atendentes="CREATE TABLE ATENDENTES(
        ID INT PRIMARY KEY AUTO_INCREMENT,
        NOME VARCHAR(180) NOT NULL,
        TELEFONE VARCHAR (20) NOT NULL
    )";
    //tabela de serviços
    $tabela_servicos="CREATE TABLE SERVICO(
        ID INT PRIMARY KEY AUTO_INCREMENT,
        SERVICO VARCHAR(180),
    )";
    $tabela_horarios="CREATE TABLE HORARIO(
        ID INT PRIMARY KEY AUTO_INCREMENT,
        HORARIO_INICIO VARCHAR(5) NOT NULL,
        HORARIO_TERMINO VARCHAR(5) NOT NULL,
        DIA_SEMENA VARCHAR(10) NOT NULL
    )";
    $tabela_atendentes_horario="CREATE TABLE ATENDENTES_HORARIO(
        ID INT PRIMARY KEY AUTO_INCREMENT,
        ID_ATENDENTE INT NOT NULL,
        ID_HORARIO INT NOT NULL,
        CONSTRAINT FK_ATENDENTE FOREIGN KEY ID_ATENDENTE REFERENCES ATENDENTES(ID),
        CONSTRAINT FK_HORARIO FOREIGN KEY ID_HORARIO REFERENCES HORARIO(ID),
         )";

    ?>
    
</body>
</html>