<?php
// Inicia a sessão
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['logado']) || $_SESSION['logado'] != true) {

    header("Location: login.php");
    exit;
}

// Pega o nome do usuário
$usuario = $_SESSION['usuario'];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="css/style.css">

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel de administração</title>



</head>

<body>


    <!-- MENU LATERAL -->

    <div class="menu">

        <div class="logo">
            DASHBOARD
         </div>

        <a href="index.php">
            🏠 Início
        </a>

        <a href="formCadUsuario.html">
            👤 Adicionar Usuario
        </a>

        <a href="editar.php">
            📝 Editar Usuario
        </a>

        <a href="#">
            📝 Listar Usuario
        </a>

        <a href="excluir.php">
            🗑️ excluir Usuario
        </a>

        <a href="#">
            ⚙️ Configurações
        </a>

        <a href="logout.php" class="sair">
            🚪 Sair
        </a>

    </div>


    <!-- CONTEÚDO -->

    <main class="conteudo">


        <!-- CABEÇALHO -->

        <section class="cabecalho">

            <h1>
                Olá, <?php echo $usuario; ?>!
            </h1>

            <p>
                Seja bem-vindo ao painel do sistema.
            </p>

        </section>


        <!-- CARDS -->

        <section class="cards">

            <div class="card">

                <h2>
                    Usuário
                </h2>

                <strong>
                    <?php echo $usuario; ?>
                </strong>

            </div>


            <div class="card">

                <h2>
                    Status
                </h2>

                <strong>
                    Online
                </strong>

            </div>


            <div class="card">

                <h2>
                    Acesso
                </h2>

                <strong>
                    Ativo
                </strong>

            </div>

        </section>


        <!-- ÁREA PRINCIPAL -->

        <section class="area">

            <h2>
                Dashboard
            </h2>

            <p>
                Você está conectado ao sistema.
                Utilize o menu lateral para acessar
                as opções disponíveis.
            </p>

            <br>

            <p>
                Seu usuário é:
                <strong><?php echo $usuario; ?></strong>
            </p>

        </section>


    </main>

</body>

</html>