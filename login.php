<?php
//Iniciamos a sessão para poder capturar mensagem de erro quando o usuário for logar
session_start();
?>
<html>
    <head>
        <title>LOGIN DE ACESSO - RESTRITO</title>
        <meta charset=""UTF-8>
        <style>
            body { font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background: #f4f4f9; }
            .caixa-login { background: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); width: 300px; }
            h2 { text-align: center; color: #333; }
            input { width: 100%; padding: 10px; margin: 8px 0; box-sizing: border-box; border: 1px solid #ccc; border-radius: 4px; }
            button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
            button:hover { background: #218838; }
            .erro { color: red; text-align: center; font-size: 14px; margin-bottom: 10px; }
        </style>
    </head>
    <body>
        <div class="caixa-login">
            <h2>🔏 Acesso Restrito</h2>
            <?php
            //verifica se existe mensagem de erro na sessão
            if(isset($_SESSION['erro_login'])){
                echo "<p class='erro'>".$_SESSION['erro_login']."</p>";
                //a seguir destruimos a mensagem de erro para não ficar aparecendo o a msg para sempre
                unset($_SESSION['erro_login']);
            }
            ?>
        <!--O action aponta/direciona para o arquivo que vai processar os dados-->
        <form action="processaLogin.php" method="POST">
            <label for="usuario">Usuário/Login:</label>
                <input type="text" name="usuario" id = "usuario" required placeholder="Digite o usuário">
            <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha" required placeholder="Informe sua senha">
            <button type="submit">Entrar</button>
        </form>
        </div>
    </body>
</html>