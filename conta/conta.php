<?php
require '../verifica.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Dados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="estiloconta.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    

    <nav class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul>
            <li class="item-menu ">
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
            <li class="item-menu ativo">
                <a href="">
                    <span class="icon"><i class="bi bi-person-circle"></i></span>
                    <span class="txt-link">Conta</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="#">
                    <span class="icon"><i class="bi bi-gear-fill"></i></span>
                    <span class="txt-link">Configurações</span>
                </a>
            </li>
            <li class="item-menu">
                <a href="../cadastro.php">
                    <span class="icon"><i class="bi bi-box-arrow-left"></i></span>
                    <span class="txt-link">Sair</span>
                </a>
            </li>
        </ul>

    </nav>

    <main>
        
        <nav>
            <div id="ft">
                <i class="bi bi-person-circle"></i>
            </div>
            <strong class="nome"><?php echo $nomeUser;?></strong>
        </nav>

        <div class="linha"></div>

        <div class="box-blocos b1" id="pri">
            <div class="flex">
                <div class="bloco">
                </div>
                <div class="bloco">
                </div>
                <div class="bloco">
                </div>
            </div>
        </div>

        <div class="box-blocos b2">
            <div class="flex">
                <div class="bloco">
                </div>
                <div class="bloco">
                </div>
                <div class="bloco">
                </div>
            </div>
        </div>

        <div class="box-blocos b3">
            <div class="flex">
                <div class="bloco">
                </div>
                <div class="bloco">
                </div>
                <div class="bloco">
                </div>
            </div>
        </div>

        <div class="box-blocos b4">
            <div class="flex">
                <div class="bloco ">
                </div>
                <div class="bloco ">
                </div>
                <div class="bloco ">
                </div>
            </div>
        </div>


        

        
    </main>
    <script src="../js/reviel.js"></script>
    <script src="../js/menu.js"></script>
</body>
</html>

<?php else: header("Location: ../cadastro.php"); endif; ?>