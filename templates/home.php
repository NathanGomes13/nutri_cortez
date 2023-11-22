<?php

session_start();
include_once "php-logic/connection.php";

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/75fe04cf12.js" crossorigin="anonymous"></script>
    <!-- chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Site -->
    <link rel="stylesheet" href="../static/styles/style.css">
    <link rel="stylesheet" href="../static/styles/home.css">
    <title>Nutri Cortez</title>
    <link rel="shortcut icon" href="../static/imagens/favicon.ico" type="image/x-icon">
</head>
<body>
    <div id="preloader">
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
        <div class="box"></div>
    </div>
    
    <?php
        include_once "header-home.php"
    ?>

    <!-- <?php
        include "php-logic/imc.php";
    ?> -->
    <section id="main-section">
        <div class="top-content">
            <div class="container como-funciona">
            <h2 class="titulo-medio">Como funciona</h2>
            <div class="infos-box">
                <div class="info">
                    <div class="img">
                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                        <g id="SVGRepo_iconCarrier">

                        <path d="M897.9 369.2H205c-33.8 0-61.4-27.6-61.4-61.4s27.6-61.4 61.4-61.4h692.9c33.8 0 61.4 27.6 61.4 61.4s-27.6 61.4-61.4 61.4z" fill="#F26B23"/>

                        <path d="M807 171H703.3c-16.6 0-30 13.4-30 30s13.4 30 30 30H807c31.6 0 57.4 24 57.4 53.4v42.3H125.2v-42.3c0-29.5 25.7-53.4 57.4-53.4H293c16.6 0 30-13.4 30-30s-13.4-30-30-30H182.5c-64.7 0-117.4 50.9-117.4 113.4v527.7c0 62.5 52.7 113.4 117.4 113.4H807c64.7 0 117.4-50.9 117.4-113.4V284.5c0-62.6-52.7-113.5-117.4-113.5z m0 694.6H182.5c-31.6 0-57.4-24-57.4-53.4V386.8h739.2v425.4c0.1 29.5-25.7 53.4-57.3 53.4z" fill="#353b41"/>

                        <path d="M447.6 217.1c-12.4-6.1-27-2.8-35.7 7.1-2.2-6.7-4-16.2-4-28.1 0-13 2.2-23 4.6-29.8 9.5 8.1 23.5 9.6 34.9 2.8 14.2-8.5 18.8-27 10.3-41.2-15.5-25.9-35.9-29.7-46.6-29.7-36.6 0-63.1 41.2-63.1 97.8s26.4 98 63 98c20.6 0 39-13.4 50.4-36.7 7.3-14.9 1.1-32.9-13.8-40.2zM635.9 218.5c-12.4-6.1-27-2.8-35.7 7.1-2.2-6.7-4-16.2-4-28.1 0-13 2.2-23 4.6-29.8 9.5 8.1 23.5 9.6 34.9 2.8 14.2-8.5 18.8-27 10.3-41.2-15.5-25.9-35.9-29.7-46.6-29.7-36.6 0-63.1 41.2-63.1 97.8s26.5 97.8 63.1 97.8c20.6 0 39-13.4 50.4-36.7 7.1-14.7 0.9-32.7-13.9-40z" fill="#353b41"/>

                        <path d="M700.2 514.5H200.5c-16.6 0-30 13.4-30 30s13.4 30 30 30h499.7c16.6 0 30-13.4 30-30s-13.5-30-30-30zM668.4 689.8h-74c-16.6 0-30 13.4-30 30s13.4 30 30 30h74c16.6 0 30-13.4 30-30s-13.4-30-30-30zM479.3 689.8H200.5c-16.6 0-30 13.4-30 30s13.4 30 30 30h278.8c16.6 0 30-13.4 30-30s-13.4-30-30-30z" fill="#01B35D"/>

                        </g>

                    </svg>
                    </div>
                    <h5>Escolha um dia</h5>
                    <p>No seu "Calendário de Refeições", escolha um dia para organizar seu menu.</p>
                </div>
                <div class="info">
                    <div class="img">
                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                        <g id="SVGRepo_iconCarrier">

                        <path d="M714 762.2h-98.2c-16.6 0-30 13.4-30 30s13.4 30 30 30H714c16.6 0 30-13.4 30-30s-13.4-30-30-30zM487.4 762.2H147.1c-16.6 0-30 13.4-30 30s13.4 30 30 30h340.3c16.6 0 30-13.4 30-30s-13.4-30-30-30z" fill="#01B35D"/>

                        <path d="M838.253 130.023l65.548 65.548-57.982 57.983-65.549-65.549z" fill="#F26B23"/>

                        <path d="M743.7 955.9H195.8c-53.7 0-97.4-43.7-97.4-97.4V174.8c0-53.7 43.7-97.4 97.4-97.4H615c16.6 0 30 13.4 30 30s-13.4 30-30 30H195.8c-20.6 0-37.4 16.8-37.4 37.4v683.7c0 20.6 16.8 37.4 37.4 37.4h547.9c20.6 0 37.4-16.8 37.4-37.4v-395c0-16.6 13.4-30 30-30s30 13.4 30 30v395.1c0 53.6-43.7 97.3-97.4 97.3z" fill="#353b41"/>

                        <path d="M907.7 122.1l-39.2-39.2c-24-24-65.1-21.9-91.7 4.7L419.5 445 347 643.6l198.6-72.4L903 213.8c12.1-12.1 19.6-27.7 21.1-44 1.8-18.1-4.3-35.5-16.4-47.7zM512.6 519.3L447.5 543l23.7-65.1 264.7-264.7 40.9 41.7-264.2 264.4z m348-347.9l-41.3 41.3-40.9-41.7 40.9-40.9c3.1-3.1 6.2-3.9 7.6-3.9l37.6 37.6c-0.1 1.3-0.9 4.5-3.9 7.6z" fill="#353b41"/>

                        </g>

                    </svg>
                    </div>
                    <h5>Monte seu menu</h5>
                    <p>Com pratos específicos para cada tipo de refeição, organize-os como desejado, podendo selecionar mais de um prato por refeição.</p>
                </div>
                <div class="info">
                    <div class="img">
                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                        <g id="SVGRepo_iconCarrier">

                        <path d="M474.9 489.3m-140.3 0a140.3 140.3 0 1 0 280.6 0 140.3 140.3 0 1 0-280.6 0Z" fill="#F26B23"/>

                        <path d="M582.8 465.5c-13.3 0-24.6 8.7-28.5 20.7h-0.1c-2 6.4-4.6 12.7-7.7 18.7l0.2 0.1c-2.3 4.2-3.6 9.1-3.6 14.3 0 16.6 13.4 30 30 30 13 0 24-8.2 28.2-19.8 3.6-7.3 6.7-14.8 9.3-22.6 1.4-3.5 2.2-7.3 2.2-11.4 0-16.5-13.4-30-30-30z" fill="#01B35D"/>

                        <path d="M512 552.5c-6.8 0-13 2.3-18.1 6.1-17.9 9.6-38 14.6-58.8 14.6-33.4 0-64.8-13-88.4-36.6-23.6-23.6-36.6-55-36.6-88.4s13-64.8 36.6-88.4c23.6-23.6 55-36.6 88.4-36.6s64.8 13 88.4 36.6c15.6 15.6 26.6 34.7 32.2 55.4v0.2h0.1c2.9 13.5 14.9 23.7 29.3 23.7 16.6 0 30-13.4 30-30 0-3.5-0.6-6.8-1.7-9.9-21.5-78.4-93.2-136-178.4-136-102.2 0-185 82.8-185 185s82.8 185 185 185c33.6 0 65-8.9 92.1-24.6l-0.1-0.2c8.9-5.2 14.9-14.9 14.9-25.9 0.1-16.6-13.3-30-29.9-30z" fill="#01B35D"/>

                        <path d="M435.1 122.6c42.2 0 83.1 8.3 121.6 24.5 37.2 15.7 70.6 38.3 99.4 67s51.3 62.1 67 99.4c16.3 38.5 24.5 79.4 24.5 121.6 0 42.2-8.3 83.1-24.5 121.6-15.7 37.2-38.3 70.6-67 99.4-28.7 28.7-62.1 51.3-99.4 67-38.5 16.3-79.4 24.5-121.6 24.5s-83.1-8.3-121.6-24.5c-37.2-15.7-70.6-38.3-99.3-67-28.7-28.7-51.3-62.1-67-99.3-16.3-38.5-24.5-79.4-24.5-121.6s8.3-83.1 24.5-121.6c15.7-37.2 38.3-70.6 67-99.4 28.7-28.7 62.1-51.3 99.4-67 38.4-16.3 79.3-24.6 121.5-24.6m0-60c-205.7 0-372.5 166.8-372.5 372.5s166.8 372.5 372.5 372.5 372.5-166.8 372.5-372.5S640.8 62.6 435.1 62.6z" fill="#353b41"/>

                        <path d="M906.7 949.4L671.8 714.5c-11.7-11.7-11.7-30.8 0-42.4 11.7-11.7 30.8-11.7 42.4 0L949.1 907c11.7 11.7 11.7 30.8 0 42.4-11.6 11.6-30.7 11.6-42.4 0z" fill="#353b41"/>

                        </g>

                    </svg>
                    </div>
                    <h5>Visualize as calorias</h5>
                    <p>Caso fique em dúvida ou tenha curiosidade, digite na "Pesquisa Nutricional" o alimento desejado.</p>
                </div>
                <div class="info">
                    <div class="img">
                    <svg viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000">

                        <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                        <g id="SVGRepo_iconCarrier">

                        <path d="M774.8 327.8c-50.6-4.8-97.3 4.3-131 22.7 15.9 20.3 26.1 52.1 26.1 87.9 0 29.2-6.8 55.7-17.9 75.5 28.3 16.9 64.5 28.8 104.6 32.6 96.7 9.2 179.2-32.4 184.2-92.8s-69.3-116.7-166-125.9z" fill="#F26B23"/>

                        <path d="M67.2 494l1 31c2.2 67.7 26.2 133.6 69.6 190.4 41.6 54.5 99.6 99.2 167.9 129.3 15.2 6.7 32.9-0.2 39.5-15.4 6.7-15.2-0.2-32.9-15.4-39.5-59-26-108.9-64.3-144.4-110.8-29-38-47.5-80.7-54.4-125h762.6c-7 44.8-25.8 87.9-55.4 126.3-36.1 46.8-86.8 85.2-146.8 110.9-15.2 6.5-22.2 24.2-15.7 39.4 4.9 11.4 15.9 18.2 27.6 18.2 4 0 8-0.8 11.8-2.4 144.5-62.2 237-185.3 241.3-321.4l1-31H67.2z" fill="#353b41"/>

                        <path d="M591.9 800.1h-159c-35.2 0-64.1 28.8-64.1 64.1s28.8 64.1 64.1 64.1h159c35.2 0 64.1-28.8 64.1-64.1s-28.9-64.1-64.1-64.1z m0 68.1h-159c-2.1 0-4.1-2-4.1-4.1s2-4.1 4.1-4.1h159c2.1 0 4.1 2 4.1 4.1s-2 4.1-4.1 4.1z" fill="#353b41"/>

                        <path d="M498.1 373.5c-9.6-13.5-28.4-16.6-41.9-6.9-13.5 9.6-16.6 28.4-6.9 41.9 10.8 15.1 16.6 33 16.6 51.7 0 16.6 13.4 30 30 30s30-13.4 30-30c0-31.4-9.6-61.4-27.8-86.7zM432.4 321.8c-17.7-7.1-36.3-10.7-55.5-10.7-82.2 0-149 66.8-149 149 0 16.6 13.4 30 30 30s30-13.4 30-30c0-49.1 39.9-89 89-89 11.5 0 22.6 2.1 33.1 6.4 15.4 6.2 32.8-1.3 39-16.7 6.2-15.4-1.2-32.9-16.6-39z" fill="#01B35D"/>

                        <path d="M549.4 274.7c-46.7-45.6-107.7-70.8-171.8-70.8-64.1 0-125.1 25.1-171.8 70.8-46.1 45.1-74 106-78.6 171.4-1.2 16.5 11.3 30.9 27.8 32 16.5 1.1 30.9-11.3 32-27.8 3.5-50.8 25.1-97.9 60.7-132.7 35.4-34.6 81.5-53.7 129.9-53.7 48.3 0 94.5 19.1 129.9 53.7 35.6 34.8 57.1 81.9 60.7 132.7 1.1 15.8 14.3 27.9 29.9 27.9 0.7 0 1.4 0 2.1-0.1 16.5-1.2 29-15.5 27.8-32-4.6-65.4-32.5-126.3-78.6-171.4zM895.1 385.9c-11.5-19.4-27.7-36.6-48.1-51.2l53.9-58.3c11.2-12.2 10.5-31.2-1.7-42.4s-31.2-10.5-42.4 1.7l-65 70.4c-5-1.8-10.1-3.5-15.3-5l82.4-159.2c7.6-14.7 1.9-32.8-12.9-40.4-14.7-7.6-32.8-1.9-40.4 12.9l-91.2 176.3c-5.5-0.3-11.1-0.5-16.7-0.5-21.9 0-43.5 2.4-64.3 7.2-16.1 3.7-26.2 19.8-22.5 36 3.7 16.1 19.8 26.2 36 22.5 16.3-3.8 33.4-5.7 50.7-5.7 43.6 0 84.2 11.8 114.3 33.3 27.1 19.3 42 44 42 69.5 0 16.6 13.4 30 30 30s30-13.4 30-30c0-23.5-6.3-46.1-18.8-67.1z" fill="#353b41"/>

                        </g>

                    </svg>
                    </div>
                    <h5>Tudo pronto!</h5>
                    <p>Seu menu ficará visível no dia selecionado do calendário! Lembre-se que pode fazer diversos menus para o mesmo dia.</p>
                </div>
            </div>
        </div>
        </div>
        
        <div class="container calend-infos-container">
            <?php
                include_once "calendar.php"
            ?>

            <div id="search-box">
                <form class="text-center">
                    <div class="tit-box">
                        <h4 class="titulo-medio bold">PESQUISA NUTRICIONAL</h4>
                        <p>Pesquise por alimentos específicos e veja suas informações nutricionais.</p>
                    </div>
                    <div class="search-input-box">
                        <input type="text" id="alimento-busca" placeholder="Digite o nome do alimento" autocomplete="off"><i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                </form>
                <div id="resultado-busca" class="dropdown-menu"></div>
                <div id="informacoes-nutricionais">
                    <h2>Nome do Alimento</h2>
                    <div class="info-box">
                    <span id="receita-span">Receita recomendada</span>
                        <div id="main-top-info">
                            <p><span class="info-tit">Peso(g)</span><span class="info-content minus-spacing"> ---<span></p>
                            <p><span class="info-tit">Calorias</span><span class="info-content minus-spacing"> ---</span></p>
                        </div>
                        <span id="quantidade-span">Quantidade por porção</span>
                        <div id="main-mid-info">
                            <p><span class="info-tit">Carboidratos</span><span class="info-content minus-spacing">  ---<span></p>
                            <p><span class="info-tit">Gorduras</span><span class="info-content minus-spacing">  ---<span></p>
                            <p><span class="info-tit">Proteínas</span><span class="info-content minus-spacing">  ---<span></p>
                        </div>
                    </div>
                    <span id="bottom-info-span" class="text-center">Informações geradas por inteligências artificiais.</span>
                </div>
            </div>
        </div>
    </section>
    <section id="grafico">
        <div class="container">
        <div class="content mobile">
                <h4 class="titulo-medio">Peso Semanal</h4>
                <p>Veja o progresso do seu peso a cada semana.</p>

                <p>Para atualizar seu peso semanal, entre no seu <a href="profile.php" class="medium text-primary">perfil</a>, atualize seu peso e clique em salvar!</p>
            </div>
            <?php include 'grafico-peso.php'; ?>
            <div class="content desktop">
                <h4 class="titulo-medio">Peso Semanal</h4>
                <p>Veja o progresso do seu peso a cada semana.</p>

                <p>Para atualizar seu peso semanal, entre no seu <a href="profile.php" class="medium text-primary">perfil</a>, atualize seu peso e clique em salvar!</p>
            </div>
        </div>
    </section>
    <section id="cards">
        <div class="container">
            <h2 class="titulo-medio text-center mb-2">Carnes com baixo teor de gordura</h2>
            <h6 class="regular text-center">Essa escolha alimentar ajuda a reduzir a ingestão de calorias, gordura saturada e colesterol, contribuindo para um perfil lipídico mais saudável.</h6>
            <!-- Swiper -->
            <div class="swiper1">

                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="card card1">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/contra-file55.jpg" alt="Img">
                            <div class="card-body">
                            <h5 class="card-title">Contra File</h5>
                            <p class="card-text">O contra filé traz os principais benefícios da carne. vermelha, sendo rico em ferro, zinco e vitaminas B6 e. B12.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 400g</p>
                                    <p>Calorias:1200</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card card2">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/file-mignon.jpg" alt="Img">
                            <div class="card-body"> 
                                <h5 class="card-title">Filé Mignon</h5>
                                <p class="card-text">Além de ser uma carne magra, o filé mignon se destaca por seu valor nutritivo. É rico em vitaminas, minerais e proteína</p>
                                <div class="cal-peso-box">
                                        <p>Peso: 250g</p>               
                                    <p>Calorias: 750</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card3">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/lombo_suino_de_panela_senac_livro.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Lombo Suino</h5>
                                <p class="card-text"> O Lombo suíno é rico em vitaminas do complexo B, que auxiliam  e melhoram aspectos da aparência física.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 400g</p>
                                    <p>Calorias: 1000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card4">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/cordeiro.jpg" alt="Img 1">
                            <div class="card-body">
                                <h5 class="card-title">Cordeiro</h5>   
                                <p class="card-text"> lombo de cordeiro é rico em nutrientes, incluindo proteínas de alta qualidade, vitaminas B, ferro e minerais.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 300g</p>          
                                    <p>Calorias: 600</p>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    <div class="swiper-slide">
                        <div class="card card5">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/maminha.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Maminha</h5>
                                <p class="card-text">A maminha é uma escolha saudável com baixo teor de gordura e também  é uma excelente fonte de proteína.</p>
                                <div class="cal-peso-box">
                                    <p>Peso:500</p>
                                    <p>Calorias:1250</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card6">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/heart-shaped-pancakes-with-fresh-berries-generative-ai_538159-10487.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">File De Frango</h5>
                                <p class="card-text">O filé de frango ajuda no ganho de massa muscular devido à sua riqueza em proteína magra, fundamental para o crescimento.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 200g</p>
                                    <p>Calorias: 500</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card7">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/tilapia.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Tilapia</h5>
                                <p class="card-text">A tilápia é uma fonte com baixo teor de gordura sendo uma opção saudável para quem busca reduzir a gordura na dieta.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 300g</p>
                                    <p>Calorias: 350</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card8">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/salmao.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Salmão</h5>  
                                <p class="card-text">O salmão é rico em ômega-3, promovendo a saúde cardiovascular e cerebral. Fonte de antioxidantes que beneficia a pele.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 300g</p>
                                    <p>Calorias: 600</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card9">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/camarao.jpg" alt="img">  
                            <div class="card-body">
                                <h5 class="card-title">Camarão</h5>
                                <p class="card-text">O camarão é uma excelente fonte de proteína magra, com Seu consumo regular pode promover a saúde cardiovascular.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 300g</p>
                                    <p>Calorias: 320</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card card10">
                            <img class="card-img-top" src="../static/imagens/home/cards/carnes/bacalhau.jpg" alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Bacalhau</h5>
                                <p class="card-text">O bacalhau é uma excelente fonte de proteína magra e ácidos graxos ômega-3, promovendo a saúde cardiovascular.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 400g</p>
                                    <p>Calorias: 350</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>

        <div class="container">

            <h2 class="titulo-medio text-center mb-2">Frutas que auxiliam na perda de peso</h2>
            <h6 class="regular text-center">As vitaminas e antioxidantes presentes nas frutas contribuem para um metabolismo saudável e para a queima eficiente de calorias.</h6>

            <div class="swiper2">

                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card card1">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/kiwi.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Kiwi</h5>
                                <p class="card-text">O kiwi é uma fruta rica em vitamina C, E e K,  Seus benefícios incluem fortalecimento do sistema imunológico, melhora da digestão.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 150g</p>
                                    <p>Calorias: 60</p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <div class="card card2">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/tangerina.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Tangerina</h5>
                                <p class="card-text">
                                A tangerina é rica em vitamina C, que fortalece o sistema imunológico, melhora a saúde da pele e auxilia na absorção de ferro.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 200g</p>
                                    <p>Calorias: 90</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card3">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/maca.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Maçã</h5>
                                <p class="card-text">A maçã ajuda a reduzir os níveis de colesterol no sangue. Além disso, os polifenóis em sua composição têm efeito antioxidante.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 400g</p>
                                    <p>Calorias: 350</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card4">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/abacaxi.jpg" alt="Img 1">
                            <div class="card-body">
                                <h5 class="card-title">Abacaxi</h5>   
                                <p class="card-text">O abacaxi contém bromelina, uma enzima que ajuda na digestão. Essas características o tornam um aliado na perda de peso</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 150g</p>
                                    <p>Calorias: 70</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card5">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/limao.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Limão</h5>
                                <p class="card-text">O limão oferece benefícios para a perda de peso devido à sua baixa caloria e alto teor de vitamina C, que auxilia na queima de gordura.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 150g</p>
                                    <p>Calorias: 30</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card6">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/amora.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Amora</h5>
                                <p class="card-text">A amora é uma fruta rica em fibras tornando-se um excelente aliado na perda de peso. Suas fibras promovem saciedade.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 200g</p>
                                    <p>Calorias: 50</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card7">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/uva.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Uva</h5>  
                                <p class="card-text">as uvas contêm resveratrol, que pode ajudar a melhorar o metabolismo e reduzir a inflamação, contribuindo para a perda de peso.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 200g</p>
                                    <p>Calorias: 160</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card8">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/melancia.jpg" alt="Img">
                            <div class="card-body">
                                <h5 class="card-title">Melancia</h5>
                                <p class="card-text">A melancia é uma aliada na perda de peso devido ao seu baixo teor calórico e alto teor de água, que ajuda na saciedade. Ela ajuda a saciar a fome.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 300g</p>
                                    <p>Calorias: 100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-slide">
                        <div class="card card9">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/cereja.jpg" alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Cereja</h5>
                                <p class="card-text">A cereja é interessantíssima para a saúde, contém vitamina A, importante para a pele, e as vitaminas C e E,</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 300g</p>
                                    <p>Calorias: 150</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card card10">
                            <img class="card-img-top" src="../static/imagens/home/cards/frutas/morango.jpg" alt="img">
                            <div class="card-body">
                                <h5 class="card-title">Morangos</h5>
                                <p class="card-text">O morango ajuda  a combater o envelhecimento da pele, ajudar a prevenir doenças cardiovasculares.</p>
                                <div class="cal-peso-box">
                                    <p>Peso: 300g</p>
                                    <p>Calorias: 100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIM -->
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            
            </div>
        </div>
    </section>
    <?php
        include_once 'footer-home.php';
    ?>

    <!-- Initialize Swiper -->
    <script>
    let swiper1;
    let swiper2;

    function initSwiper1() {
        swiper1 = new Swiper('.swiper1', {
            slidesPerView: 5,
            spaceBetween: 20,
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    };
    function initSwiper2() {
        swiper2 = new Swiper('.swiper2', {
            slidesPerView: 5,
            spaceBetween: 20,
            loop: true,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    };

    function updateSwiper() {
        if (window.innerWidth <= 576) {
            swiper1.params.slidesPerView = 1;
            swiper2.params.slidesPerView = 1;
        }else if (window.innerWidth <= 991) {
            swiper1.params.slidesPerView = 2;
            swiper2.params.slidesPerView = 2;
        }else if (window.innerWidth <= 1200) {
            swiper1.params.slidesPerView = 3;
            swiper2.params.slidesPerView = 3;
        }else if (window.innerWidth <= 1400) {
            swiper1.params.slidesPerView = 4;
            swiper2.params.slidesPerView = 4;
        }else {
            swiper1.params.slidesPerView = 5;
            swiper2.params.slidesPerView = 5;
        }
    
        swiper1.update(); // Atualiza o swiper1 para refletir as novas configurações
        swiper2.update();
    }

    initSwiper1();
    initSwiper2();

    updateSwiper();

    window.addEventListener('resize', updateSwiper);
    </script>
    <!-- jquery -->
    <script src="../static/js/jquery.js"></script>
    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <!-- preloader -->
    <script src="../static/js/preloader.js"></script>
    
    <script>
        $(document).ready(function () {
            // Detecta a digitação no campo de entrada
            $('#alimento-busca').on('input', function () {
                // Obtém o valor digitado pelo usuário
                let termo_pesquisa = $(this).val();

                // Faz uma requisição AJAX para o servidor
                $.ajax({
                    type: 'POST',
                    url: 'php-logic/search-alimentos.php',
                    data: { alimento: termo_pesquisa },
                    success: function (data) {
                        // Atualiza a área de resultados com os resultados recebidos do servidor
                        $('#resultado-busca').html(data);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        // Exibe uma mensagem no console em caso de erro
                        console.error('Erro na requisição AJAX: ' + textStatus, errorThrown);
                    }
                });
            });

            $(document).on('click', '.alimentos-link', function (e) {
                e.preventDefault();
                let alimentoId = $(this).data('alimento-id');
                let tabelaOrigem = $(this).data('tabela-origem');

                $.ajax({
                    type: 'POST',
                    url: 'php-logic/informacoes_nutricionais.php',
                    data: { alimentoId: alimentoId, tabelaOrigem: tabelaOrigem },
                    success: function (data) {
                        $('#informacoes-nutricionais').html('');
                        $('#informacoes-nutricionais').html(data);
                    }
                });
            });
        });
    </script>
    <script>
        $(document).ready(function () {
            function carregarItensDoBancoDeDados() {
                $.ajax({
                    type: 'GET',
                    url: 'php-logic/load_db_start.php',
                    success: function (data) {
                        $('#resultado-busca').html(data);
                    }
                });
            }

            carregarItensDoBancoDeDados();

            // foco no input
            $('#alimento-busca').focus(function () {
                $('#resultado-busca').show();
            });

            // input não focado
            $('#alimento-busca').blur(function () {
                setTimeout(function () {
                    $('#resultado-busca').hide();
                }, 200);
            });

            // impede que o blur do input feche o dropdown quando ele é clicado
            $('#resultado-busca').click(function (e) {
                // e.stopPropagation(); // impede a propagação do evento click
            });
        });
    </script>
</body>
</html>

<?php 
}else{
    header("Location: login.php");
    exit();
}
?>