<?php
//require é a função que chama o arquivo que irá conectar ao BD
require('bd/conectarBD.php');                                   


$nome           = $_POST['nome'];
$email          = $_POST['email'];
$senha          = $_POST['senha'];
$nivelAcesso    = $_POST['nivelAcesso'];
$situacao       = $_POST['situacao'];

//A PARTIR DO CODIGO ABAIXO IREMOS FAZER INTEGRACAO E ENVIO DOS DADOS PARA O BD 

// PASSO 1 - IREMOS ANTES DE ENVIAR  AO BANCO DE DADOS, VERIFICAR SE JA EXISTE USUARIO CADASTRADO COM O MESMO NOME

//PASSO 2 - Aqui iremos cripitografar a senha para gravar no BD

$senhaCriptografada = password_hash($senha,PASSWORD_DEFAULT);

//PASSO 3 - ENVIA OS DADOS INFORMADO NO HTML PARA O Banco de Dados  
$sql = $pdo->prepare("INSERT INTO tbusuario (nome, email, senha, nivelAcesso, situacao) VALUES(?,?,?,?,?)");

//Verificar se foi realmente cadastrado no banco de dados e direcionar para a pagina deconfirmacao
if($sql->execute([$nome,$email,$senhaCriptografada,$nivelAcesso,$situacao])){

    header("location:login.php?sucesso=1");
}

?>