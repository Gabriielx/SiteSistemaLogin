<?php
//Declarando as variaveis que ira conectar ao banco de dados MYSQL
$host       =   "localhost";
$usuario    =   "root";
$senha      =   "senac";
$banco      =   "sistemaLogin";

//USANDO A CLASS PDO PARA REALIZAR A CONEXÃO COM O BANCO DE DADOS
try {

    $pdo = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $pdo->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch (PDOException $e) {
        die("Erro na conexão com o banco."); 
} 

?>