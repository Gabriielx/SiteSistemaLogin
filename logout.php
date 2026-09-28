<?php
session_start();

//Destroi os cookies da sessao do NAVEGADOR
session_unset();

//Destroi e encerra a sessao
session_destroy();

//Redireciona para a tela de login
header('location: login.php');
exit;

?>