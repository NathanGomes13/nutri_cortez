<?php

include_once "php-logic/connection.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/75fe04cf12.js" crossorigin="anonymous"></script>
    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <!-- Site -->
    <link rel="stylesheet" href="../static/styles/style.css">
    <link rel="stylesheet" href="../static/styles/index.css">
    <title>INDEX Nutri Cortez</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
</head>
<body>

    <?php
        include_once "header.php"
    ?>

    <section id="value-proposition">
        <div class="container">
            <div class="text-content">
                <h4 class="medium orange">Bem vindos à</h4>
                <h1 class="bold green">NUTRI CORTEZ</h1>
                <p>O lugar onde cada escolha alimentar
                <br>é um passo em direção à sua melhor versão!</p>
                <a href="home.php"><button class="button orange-button mt-5">Começar agora</button></a>
            </div>
        </div>
    </section>
    <section id="como-comeco">
        <div class="container">
            <h2 class="titulo text-center">Como começo?</h2>
            <div class="infos-div">
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
                    <span class="bold"><p>1</p></span>
                    <h3 class="titulo-medio">Crie sua Conta</h3>
                    <p>Configure seu perfil com base no seu <strong>objetivo</strong> em relação ao seu peso ou à alimentação saudável.</p>
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
                    <span class="bold"><p>2</p></span>
                    <h3 class="titulo-medio">Comece sua jornada</h3>
                    <p>Você poderá explorar seu calendário para definir sua dieta para cada dia baseadas na quantidade de <strong>calorias, carboidratos, gorduras e proteínas</strong> necessários.</p>
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
                    <span class="bold"><p>3</p></span>
                    <h3 class="titulo-medio">Alimentação preferida</h3>
                    <p>Escolha suas refeições baseadas no seu <strong>gosto pessoal</strong>, com opções feitas exclusivamente para você.</p>
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
                    <span class="bold"><p>4</p></span>
                    <h3 class="titulo-medio">Não desista!</h3>
                    <p>Essa é a hora de atingir sua meta, mantenha <strong>diariamente</strong> sua dieta do melhor jeito!</p>
                </div>
            </div>
        </div>
    </section>
    <section id="comecar">
        <div class="container">
            <h2 class="titulo-medio text-center">Comece sua jornada Nutri agora mesmo!</h2>
            <p>Your information is secure and encrypted, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim.</p>
            <a href="home.php"><button class="button orange-button">Começar agora</button></a>
        </div>
    </section>
    <section id="avaliacoes">
        <div class="container">
            <h2 class="titulo">Avaliações</h2>
            <!-- Slider main container -->
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <?php include_once 'php-logic/avaliacoes.php'; ?>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <?php
        include_once "footer.php";
    ?>

    <!-- ==============SCRIPTS=============== -->
    <script>
    let swiper;

    function initSwiper() {
        swiper = new Swiper('.swiper', {
            slidesPerView: 3,
            spaceBetween: 30,
            
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            
        });
    };

    function updateSwiper() {
        if (window.innerWidth < 768) {
            swiper.params.slidesPerView = 1;
        }else if (window.innerWidth < 992) {
            swiper.params.slidesPerView = 2;
        }else {
            swiper.params.slidesPerView = 3;
        }

        swiper.update();
    }

    initSwiper();
    window.addEventListener('resize', updateSwiper);

    updateSwiper();
    </script>
    <!-- bootstrap -->
    <script src="../static/js/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>