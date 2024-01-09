<?php
require '../verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Dados</title>
    <link rel="stylesheet" href="config.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <h1>Configurações</h1>

    <nav class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul>
            <li class="item-menu">
                <a href="../paginaHome/index.php">
                    <span class="icon"><i class="bi bi-house"></i></span>
                    <span class="txt-link">Home</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-plus-circle"></i></span>
                    <span class="txt-link">Criar</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-search"></i></span>
                    <span class="txt-link">Procurar</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="../conta/conta.php">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="txt-link">Conta</span>
                </a>
            </li>
            <li class="item-menu ativo">
                <a href="#">
                    <span class="icon"><i class="bi bi-gear-fill"></i></span>
                    <span class="txt-link">Configurações</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="logout.php">
                    <span class="icon"><i class="bi bi-box-arrow-left"></i></span>
                    <span class="txt-link">Sair</span>
                </a>
            </li>
        </ul>

    </nav>

    <main>
 
        <a href="#"><div class="colunas pri"><p>Nome: <?php echo $nomeUser;?></p></div></a>
        <a href="#"><div class="colunas">Email: </div></a>
        <a href="#"><div class="colunas">Modo: Claro</div></a>   
        <a href="#"><div class="colunas">Publicações Arquivadas</div></a>
        <a href="#"><div class="colunas">Sobre</div></a>

    </main>
</body>
</html>

<?php else: header("Location: ../cadastro.php"); endif; ?>