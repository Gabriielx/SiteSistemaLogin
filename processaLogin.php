<?php
//1 - Iniciar a sessão sempre no topo do arquivo
session_start();

//2 - receber os dados do formulário (super global $_POST)
//usaremos o operador de coalescencia nula(??) para evitar erro se o campo vier vazio

$usuario_recebido    =   $_POST['usuario'] ?? '';
$senhaRecebida      =   $_POST['senha'] ?? '';

//3 - Credenciais válidas (simulando BANCO DE DADOS)
$usuarioCorreto     =   "Gabriel Olivier";
$senhaCorreta       =   "1232";

//4 - LÓGICA DE VERIFICAÇÃO E VALIDAÇÃO
if($usuario_recebido == $usuarioCorreto && $senhaRecebida == $senhaCorreta){
    //SUCESSO! criamos variáveis de sessão para indentificar o usuário
    $_SESSION['logado']     = true;
    $_SESSION['usuario']    =$usuario_recebido;

    //Se o usuario e senha estiverem corretos redirecionar para a página que desjar
    header('location: dashboard.php');
    exit; //sempre deve ser usado apos a hader(location) para parar a execução do script
   

}
else{
    //FALHOU! Guardamos a mensagem de erro na sessão e voltamos para o login
    $_SESSION['erro_login'] = "❌ Usuário ou senha inválido. Tente novamente!";
    echo "<h1>FALHA! USUÁRIO E SENHA INFORMADOS ESTÃO INCORRRETOS</h1>";
    exit;
}   
?>  