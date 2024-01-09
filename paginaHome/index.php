<?php 
require '../conexao2.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser'])): ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local Dados</title>
    <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="shortcut icon" href="../img/Untitled design (8).png" type="image/x-icon">
</head>
<body>

    <header>
        <div class="img img-effects">
            <img src="../img/LOCAL (1).png" alt="" id="vaza">
            <img src="../img/Untitled design (9).png" alt="" id="entra">
        </div>

    </header>
    <nav class="menu-lateral">
        <div class="btn-expandir">
            <i class="bi bi-list" id="btn-exp"></i>
        </div>

        <ul>
            <li class="item-menu ativo">
                <a href="#">
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
            <li class="item-menu">
                <a href="../configurações/config.php">
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
        <h1>Novidades</h1>
        <section class="programacao">
            <h2>Programação:</h2>
            
            <p>A escolha entre front-end e back-end direcionará a carreira dos programadores. No front-end o foco é na parte visual, enquanto no back-end na parte estrutural e lógica do sistema. <span>Qual é a sua escolha?</span></p>
            <h3>O que os programadores são atualmente:</h3>
            

            <div class="flex">
                <div class="flex2">
                    <div class="skill skill-effect1" id="prii">
                        <div class="outer">
                            <div class="inner">
                                <div id="number">
                    
                                </div>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                               <linearGradient id="GradientColor">
                                  <stop offset="0%" stop-color="#e91e63" />
                                  <stop offset="100%" stop-color="#673ab7" />
                               </linearGradient>
                            </defs>
                            <circle cx="80" cy="80" r="70" stroke-linecap="round" id="circle1"/>
                        </svg>
                        <h4>BACK-END</h4>
                    </div>
                    <div class="skill skill-effect2" id="segg">
                        <div class="outer">
                            <div class="inner">
                                <div id="number2">
                    
                                </div>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                            <defs>
                               <linearGradient id="GradientColor">
                                  <stop offset="0%" stop-color="#e91e63" />
                                  <stop offset="100%" stop-color="#673ab7" />
                               </linearGradient>
                            </defs>
                            <circle cx="80" cy="80" r="70" stroke-linecap="round" id="circle2"/>
                        </svg>
                        <h4>FRONT-END</h4>
                    </div>
                </div>
                <div class="skill skill-effect3" id="ult">
                    <div class="outer">
                        <div class="inner">
                            <div id="number3">
                                
                            </div>
                        </div>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="160px" height="160px">
                        <defs>
                           <linearGradient id="GradientColor">
                              <stop offset="0%" stop-color="#e91e63" />
                              <stop offset="100%" stop-color="#673ab7" />
                           </linearGradient>
                        </defs>
                        <circle cx="80" cy="80" r="70" stroke-linecap="round" id="circle3"/>
                    </svg>
                    <h4>FULL-STACK</h4>
                </div>
            </div>

            <a href="#" class="btn-prog-effect">
                <div class="btn-prog maiorr">SE TORNE UM PROGRAMADOR</div>
            </a>
            <a href="#" class="btn-prog-effect">
                <div class="btn-prog menorr">SEJA PROGRAMADOR</div>
            </a>

        </section>

        <section class="hardware">
            <h2>Placas de vídeo:</h2>
            <p>Atualmente existem diversos tipos de placas de vídeo, por isso, muitas pessoas ficam indecisas em qual escolher. Trazemos o <span>TOP 3</span> das mehores placas custo benefício que não vão de deixar na mão. <span>Qual você escolhe?</span></p>

            
            <div class="skills">
                <h1>Placas de Vídeo</h1>
            
                <ul>
                    <li>
                        <h3>RTX 3060</h3>
                        <span class="barras"><span class="b1"></span></span>
                    </li>
                    <li>
                        <h3>RX 6600</h3>
                        <span class="barras"><span class="b2"></span></span>
                    </li>
                    <li>
                        <h3>ARC 750</h3>
                        <span class="barras"><span class="b3"></span></span>
                    </li>
                </ul>
            </div>

            <div class="btn-adquira">
                <a href="https://www.terabyteshop.com.br/produto/25806/placa-de-video-inno3d-superframe-nvidia-geforce-rtx-3060-twin-x2-12gb-gddr6-dlss-ray-tracing-t30602-12d6-119032ah?gad_source=1&gclid=CjwKCAiAqNSsBhAvEiwAn_tmxbZJOif_Tdt1UW_sKsPVAJ2FeQayfzHntpvuNHSyBVbMJYLqHtwsHBoC24EQAvD_BwE" target="_blank" class="rtx-effects maior">ADQUIRA RTX 3060</a>
                <a href="https://www.terabyteshop.com.br/produto/25806/placa-de-video-inno3d-superframe-nvidia-geforce-rtx-3060-twin-x2-12gb-gddr6-dlss-ray-tracing-t30602-12d6-119032ah?gad_source=1&gclid=CjwKCAiAqNSsBhAvEiwAn_tmxbZJOif_Tdt1UW_sKsPVAJ2FeQayfzHntpvuNHSyBVbMJYLqHtwsHBoC24EQAvD_BwE" target="_blank" class="rtx-effects menor">RTX 3060</a>
                <a href="https://www.pichau.com.br/placa-de-video-gigabyte-radeon-rx-6600-eagle-8gb-gddr6-128-bit-gv-r66eagle-8gd?gad_source=1&gclid=CjwKCAiAqNSsBhAvEiwAn_tmxduaofQxDUcHJ-twjqSEGcGrcGgGu0LMO5wdIvChOO3rGhxWEXR2oRoCuqcQAvD_BwE" target="_blank" class="rx-effects maior">ADQUIRA RX 6600</a>
                <a href="https://www.pichau.com.br/placa-de-video-gigabyte-radeon-rx-6600-eagle-8gb-gddr6-128-bit-gv-r66eagle-8gd?gad_source=1&gclid=CjwKCAiAqNSsBhAvEiwAn_tmxduaofQxDUcHJ-twjqSEGcGrcGgGu0LMO5wdIvChOO3rGhxWEXR2oRoCuqcQAvD_BwE" target="_blank" class="rx-effects menor">RX 6600</a>
                <a href="https://www.kabum.com.br/produto/394074/placa-de-video-intel-arc-a750-challenger-d-asrock-8-gb-gddr6-90-ga3hzz-00uanf?srsltid=AfmBOopOm2pmtT1QjSTjpeNk8x330xeGeHLehD0gwDz7jCRDKni1QcxE8YY" target="_blank" class="arc-effects maior">ADQUIRA ARC 750</a>
                <a href="https://www.kabum.com.br/produto/394074/placa-de-video-intel-arc-a750-challenger-d-asrock-8-gb-gddr6-90-ga3hzz-00uanf?srsltid=AfmBOopOm2pmtT1QjSTjpeNk8x330xeGeHLehD0gwDz7jCRDKni1QcxE8YY" target="_blank" class="arc-effects menor">ARC 750</a>
            </div>
            

        </section>

        <section class="processadores">
            <h2>Processadores:</h2>
            <p>Atualmente a grande guerras de processadores é entre a intel e a amd. Cada um com seus pontos positivos e negativos. No gráfico mostra a variação de preço deles para ajudar você a saber qual é o melhor custo benefício. <span>Qual você escolhe?</span></p>

            <div class="grafico">
                <canvas id="myChart"></canvas>
            </div>
            
        </section>

    </main>
    <footer>
        <p>Site desenvolvido por Daniel Doria</p>
    </footer>

    <script src="../js/carregamento.js"></script>
    <script src="../js/menu.js"></script>
    <script src="../js/reviel2.js"></script>
    <script src="chart.js"></script>

      
      
      <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
      
      <script>
        const ctx = document.getElementById('myChart');
      
        new Chart(ctx, {
          type: 'bar',
          data: {
            labels: ['I7 12700K', 'R7 5700X', 'R5 5500', 'I5 13400F', 'R5 5600', 'I7 8700'],
            datasets: [{
              label: 'Preço',
              data: [2000, 1500, 800, 1800, 1200, 650],
              borderWidth: 2
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true
              }
            }
          }
        });
      </script>


</body>
</html>

<?php else: header: "../cadastro.php"; endif; ?>