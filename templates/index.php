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
                    <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" xml:space="preserve">
                    <path style="fill:#687F82;" d="M386.694,42.702C358.977,15.144,322.305,0,283.343,0c-0.287,0-0.576,0.001-0.864,0.002
                        C202.081,0.464,136.674,66.94,136.674,148.188v36.322c0,4.355,3.53,7.885,7.885,7.885h42.053c4.355,0,7.885-3.53,7.885-7.885
                        v-36.615c0-49.193,39.459-89.597,87.96-90.067c23.882-0.187,46.361,8.911,63.356,25.741c16.999,16.835,26.36,39.241,26.36,63.093
                        v75.193c0,15.664,12.5,28.851,27.866,29.396c0.355,0.013,0.709,0.019,1.063,0.019c7.531,0,14.619-2.856,20.059-8.107
                        c5.697-5.498,8.835-12.887,8.835-20.805v-75.696C429.996,107.386,414.618,70.467,386.694,42.702z"/>
                    <g>
                        <path style="fill:#FFFFFF;" d="M408.969,188.188c-4.355,0-7.885-3.53-7.885-7.885v-33.642c0-18.004-3.935-35.24-11.695-51.227
                            c-1.902-3.917-0.267-8.635,3.65-10.536c3.918-1.903,8.636-0.267,10.536,3.65c8.81,18.151,13.277,37.703,13.277,58.113v33.642
                            C416.854,184.659,413.324,188.188,408.969,188.188z"/>
                        <path style="fill:#FFFFFF;" d="M371.868,65.498c-2.01,0-4.021-0.764-5.559-2.294c-8.289-8.241-17.646-15.168-27.808-20.586
                            c-16.817-8.967-35.889-13.706-55.157-13.706c-4.355,0-7.885-3.53-7.885-7.885s3.53-7.885,7.885-7.885
                            c21.846,0,43.485,5.381,62.578,15.561c11.524,6.144,22.124,13.99,31.507,23.319c3.088,3.071,3.102,8.063,0.032,11.152
                            C375.918,64.722,373.894,65.498,371.868,65.498z"/>
                    </g>
                    <path style="fill:#4ACFD9;" d="M432.624,214.472H134.045c-21.74,0-39.425,17.686-39.425,39.425v250.218
                        c0,4.355,3.53,7.885,7.885,7.885h361.659c4.355,0,7.885-3.53,7.885-7.885V253.897C472.049,232.158,454.364,214.472,432.624,214.472z
                        "/>
                    <path style="fill:#0295AA;" d="M134.045,214.472c-21.74,0-39.425,17.686-39.425,39.425v250.218c0,4.355,3.53,7.885,7.885,7.885
                        h180.83V214.472H134.045z"/>
                    <path style="fill:#FFD1A9;" d="M297.578,350.283c22.964-6.271,39.9-27.304,39.9-52.229c0-29.855-24.289-54.144-54.144-54.144
                        c-29.855,0-54.144,24.289-54.144,54.144c0,24.925,16.936,45.958,39.9,52.229c-39.322,6.783-69.338,41.112-69.338,82.342v42.053
                        c0,4.355,3.53,7.885,7.885,7.885h151.392c4.355,0,7.885-3.53,7.885-7.885v-42.053C366.916,391.395,336.9,357.066,297.578,350.283z"
                        />
                    <path style="fill:#FF8C29;" d="M229.191,298.053c0,24.925,16.936,45.958,39.9,52.229c-39.322,6.783-69.338,41.112-69.338,82.342
                        v42.053c0,4.355,3.53,7.885,7.885,7.885h75.696V243.91C253.48,243.91,229.191,268.199,229.191,298.053z"/>
                    <g>
                        <path style="fill:#F0353D;" d="M80.546,191.075h-32.71c-4.355,0-7.885-3.53-7.885-7.885s3.53-7.885,7.885-7.885h32.71
                            c4.355,0,7.885,3.53,7.885,7.885S84.901,191.075,80.546,191.075z"/>
                        <path style="fill:#F0353D;" d="M89.678,164.312c-2.018,0-4.036-0.77-5.575-2.31l-20.815-20.815c-3.079-3.079-3.079-8.072,0-11.152
                            s8.072-3.079,11.15,0l20.815,20.815c3.079,3.079,3.079,8.072,0,11.152C93.714,163.542,91.695,164.312,89.678,164.312z"/>
                        <path style="fill:#F0353D;" d="M68.651,238.653c-2.018,0-4.036-0.77-5.575-2.31c-3.079-3.079-3.079-8.072,0-11.15l20.815-20.815
                            c3.079-3.079,8.072-3.079,11.15,0c3.079,3.079,3.079,8.072,0,11.15l-20.815,20.815C72.687,237.883,70.669,238.653,68.651,238.653z"
                            />
                    </g>
                    </svg>
                    </div>
                    <span class="bold"><p>1</p></span>
                    <h3 class="titulo-medio">Crie sua Conta</h3>
                    <p>Configure seu perfil com base no seu <strong>objetivo</strong> em relação ao seu peso ou à alimentação saudável.</p>
                </div>
                <div class="info">
                    <div class="img">
                    <svg width="800px" height="800px" viewBox="0 0 12.7 12.7" id="svg8" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd" xmlns:svg="http://www.w3.org/2000/svg">

                    <defs id="defs2">

                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath5343">

                    <path d="m 3.0688351,285.55677 c -1.613568,1.19596 -2.5662181,3.08478 -2.56883509,5.09323 0,3.50701 2.84299219,6.35 6.35000009,6.35 C 10.357008,297 13.2,294.15701 13.2,290.65 c -0.0022,-0.84296 -0.452078,-2.71271 -0.500228,-2.45359 -0.02424,0.84121 -0.571809,2.35322 -0.602031,2.23138 -0.0026,-0.50621 -0.2876,-1.42626 -0.305098,-1.19509 0.02804,1.40695 -1.48374,3.17677 -2.3076623,3.50038 -0.8310457,0.36942 -1.7371637,0.56412 -2.6117267,0.56534 -0.1736918,2e-5 -1.1686519,-0.13807 -1.6443439,-0.70435 -0.826376,-0.89253 -0.00201,-1.09994 0.4625039,-1.27331 0.5055862,-0.18871 1.030887,-0.30969 1.5203212,-0.42013 0.7456988,-0.16826 0.4710618,-0.52626 0.1049028,-0.6289 -0.9266939,-0.25976 -2.044886,0.33543 -2.8654579,0.30593 -0.848406,-0.0291 -0.804618,-1.69621 -0.1405601,-1.76217 0.7394212,-0.0734 1.6665151,-0.51079 1.461779,-0.65673 -0.8303549,-0.61672 -0.9617369,-0.79081 -1.0595549,-1.16418 -0.1480201,-0.565 0.341282,-1.03557 0.05777,-0.96356 -0.2596169,0.08 -0.4110678,0.15641 -0.5988619,0.25715 -0.1672929,0.0897 -0.293814,0.0546 -0.6751841,0.002 -0.3249449,-0.045 -0.3870058,-0.0557 -0.3755009,-0.25673 0.0115,-0.20097 0.07295,-0.52125 -0.05223,-0.47648 z" id="path5345" style="fill:#7aafff;fill-opacity:1;stroke:none;stroke-width:2.01045942;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"/>

                    </clipPath>

                    <clipPath clipPathUnits="userSpaceOnUse" id="clipPath4543">

                    <path d="m 1.7760088,291.5696 c -1.82613339,0.17434 -3.2940315,0.91934 -3.4903996,2.16451 -0.2629054,1.66729 1.5678591,3.34127 4.0891213,3.73893 1.2172084,0.19119 2.434234,0.053 3.3807423,-0.38387 0.7310194,0.5283 1.669357,0.90078 2.6704721,1.06008 2.5212691,0.39771 4.7783381,-0.6315 5.0412801,-2.2988 0.262905,-1.6673 -1.490667,-1.94329 -4.257163,-2.17938 -2.7664958,-0.23609 -3.6163896,-1.68839 -5.7470448,-2.04575 -0.5660191,-0.0893 -1.1380808,-0.10817 -1.6870084,-0.0557 z" id="path4545" style="opacity:1;vector-effect:none;fill:#666666;fill-opacity:1;stroke:none;stroke-width:2.11666656;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:0;stroke-opacity:1"/>

                    </clipPath>

                    </defs>

                    <g id="layer1" transform="translate(0,-284.3)">

                    <circle cx="6.3499999" cy="290.64999" id="path4514" r="6.3499999" style="fill:#aaccff;fill-opacity:1;stroke:none;stroke-width:1.74658811;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"/>

                    <g id="g4713-8" transform="translate(-8.086525,9.0996614)">

                    <path d="m 12.667897,278.43888 c -0.08639,0 -0.155546,0.0697 -0.155546,0.15606 v 0.29818 h -1.381828 c -0.116369,0 -0.209806,0.0935 -0.209806,0.2098 v 0.8475 0.30695 4.70049 c 0,0.11637 0.09344,0.20981 0.209806,0.20981 h 7.191292 c 0.116369,0 0.209806,-0.0934 0.209806,-0.20981 v -4.70049 -0.30695 -0.8475 c 0,-0.11636 -0.09395,-0.2098 -0.210323,-0.2098 h -1.381311 v -0.29818 c 0,-0.0864 -0.06915,-0.15606 -0.155546,-0.15606 h -0.07441 c -0.08639,0 -0.156063,0.0697 -0.156063,0.15606 v 0.29818 h -3.65559 v -0.29818 c 0,-0.0864 -0.06967,-0.15606 -0.156063,-0.15606 z" id="rect4510-4" style="opacity:1;vector-effect:none;fill:#5b99f8;fill-opacity:1;stroke:none;stroke-width:0.13691741;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1"/>

                    </g>

                    <g id="g4713" transform="translate(0.0131779,6.1049174e-6)">

                    <g id="g4784" transform="translate(0.20082742,0.0697481)">

                    <g id="g4732" transform="matrix(0.86163301,0,0,0.86163301,0.4247215,41.058255)">

                    <rect height="6.2987523" id="rect4510" ry="0.2437838" style="opacity:1;vector-effect:none;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.15890455;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="8.8331614" x="2.2118483" y="287.19778"/>

                    <g id="g4657" transform="translate(-0.1314767,-0.23718944)">

                    <rect height="1.3232714" id="rect4543" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="9.2739792" y="288.6268"/>

                    <rect height="1.3232714" id="rect4543-3" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="2.9225607" y="288.6268"/>

                    <rect height="1.3232714" id="rect4543-3-9" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="4.5104156" y="288.6268"/>

                    <rect height="1.3232714" id="rect4543-3-8" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="6.0982699" y="288.6268"/>

                    <rect height="1.3232714" id="rect4543-3-85" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="7.6861248" y="288.6268"/>

                    <rect height="1.3232714" id="rect4543-3-96" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="2.9225607" y="290.21466"/>

                    <rect height="1.3232714" id="rect4543-3-9-3" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="4.5104156" y="290.21466"/>

                    <rect height="1.3232714" id="rect4543-3-8-8" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="6.0982699" y="290.21466"/>

                    <rect height="1.3232714" id="rect4543-3-85-5" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#ffb6b6;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="7.6861248" y="290.21466"/>

                    <rect height="1.3232714" id="rect4543-3-1" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="2.9225607" y="291.80252"/>

                    <rect height="1.3232714" id="rect4543-3-9-1" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="4.5104156" y="291.80252"/>

                    <rect height="1.3232714" id="rect4543-3-8-5" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="6.0982699" y="291.80252"/>

                    <rect height="1.3232714" id="rect4543-3-85-9" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="7.6861248" y="291.80252"/>

                    <rect height="1.3232714" id="rect4543-3-4" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="9.2739792" y="291.80252"/>

                    <rect height="1.3232714" id="rect4543-3-9-8" ry="0.17310758" style="opacity:1;vector-effect:none;fill:#cccccc;fill-opacity:1;stroke:none;stroke-width:0.18817283;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="1.3232714" x="9.2739792" y="290.21466"/>

                    </g>

                    </g>

                    <g id="g4741" transform="matrix(0.86163302,0,0,0.86163302,0.45871443,41.058254)">

                    <path d="m 2.4158474,286.21461 c -0.1350562,0 -0.243396,0.10835 -0.243396,0.2434 v 1.33945 h 8.8330516 v -1.33945 c 0,-0.13505 -0.108855,-0.2434 -0.243912,-0.2434 z" id="rect4510-9" style="opacity:1;vector-effect:none;fill:#ffb6b6;fill-opacity:1;stroke:none;stroke-width:0.15890455;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1"/>

                    <g id="g4707" transform="translate(-0.06550484)">

                    <rect height="1.2913648" id="rect4659-6" ry="0.18099108" style="opacity:1;vector-effect:none;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.19217229;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="0.44802457" x="8.7760096" y="285.68738"/>

                    <rect height="1.2913648" id="rect4659-6-3" ry="0.18099108" style="opacity:1;vector-effect:none;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:0.19217229;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-dashoffset:15;stroke-opacity:1" width="0.44802457" x="4.0849299" y="285.68738"/>

                    </g>

                    </g>

                    </g>

                    </g>

                    </g>

                    </svg>
                    </div>
                    <span class="bold"><p>2</p></span>
                    <h3 class="titulo-medio">Comece sua jornada</h3>
                    <p>Você poderá explorar seu calendário para definir sua dieta para cada dia baseadas na quantidade de <strong>calorias, carboidratos, gorduras e proteínas</strong> necessários.</p>
                </div>
                <div class="info">
                    <div class="img">
                    <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
	 viewBox="0 0 512 512" xml:space="preserve">
                    <g>
                        <circle style="fill:#FFAB5F;" cx="145.23" cy="293.396" r="31.01"/>
                        <circle style="fill:#FFAB5F;" cx="359.225" cy="293.396" r="31.01"/>
                    </g>
                    <path style="fill:#78B591;" d="M228.663,188.81c5.612-13.802,18.309-23.572,33.135-25.492c3.956-0.513,7.891,1.086,10.366,4.215
                        c9.273,11.723,11.552,27.577,5.937,41.382c-5.612,13.802-18.309,23.574-33.135,25.493c-3.956,0.513-7.889-1.087-10.362-4.213
                        C225.325,218.472,223.049,202.613,228.663,188.81z"/>
                    <path style="fill:#B0CE6F;" d="M184.034,239.733c-13.802-5.617-23.571-18.313-25.493-33.138c-0.513-3.957,1.087-7.89,4.215-10.365
                        c11.722-9.276,27.577-11.552,41.383-5.939c13.802,5.615,23.573,18.31,25.492,33.137c0.513,3.955-1.087,7.888-4.212,10.362
                        C213.695,243.067,197.838,245.344,184.034,239.733z"/>
                    <path style="fill:#659B7B;" d="M234.326,253.809c-1.015,0-2.045-0.192-3.042-0.598c-4.137-1.68-6.125-6.398-4.444-10.534
                        l18.84-46.335c1.681-4.135,6.394-6.127,10.534-4.443c4.136,1.68,6.125,6.398,4.444,10.534l-18.841,46.335
                        C240.541,251.906,237.517,253.809,234.326,253.809z"/>
                    <path style="fill:#7E8E51;" d="M240.942,242.152c-1.014,0-2.045-0.192-3.042-0.598l-46.333-18.843
                        c-4.136-1.681-6.125-6.398-4.443-10.534c1.68-4.136,6.399-6.127,10.534-4.443l46.333,18.842c4.136,1.682,6.125,6.398,4.443,10.534
                        C247.158,240.25,244.134,242.152,240.942,242.152z"/>
                    <path style="fill:#EF645E;" d="M311.467,268.486c0-16.917-13.713-30.63-30.63-30.63c-1.556,0-3.081,0.116-4.575,0.341
                        c-4.533-11.248-15.541-19.192-28.412-19.192c-12.778,0-23.724,7.827-28.319,18.946c-0.764-0.056-1.535-0.095-2.313-0.095
                        c-16.916,0-30.629,13.713-30.629,30.63c0,0.144,0.008,0.287,0.01,0.434c-12.068,2.211-21.217,12.776-21.217,25.484
                        c0,14.314,11.604,25.919,25.918,25.919c12.709,0,107.313,0,120.166,0c14.313,0,25.919-11.604,25.919-25.919
                        C337.386,280.089,325.78,268.486,311.467,268.486z"/>
                    <path style="fill:#C14616;" d="M283.193,268.793h-4.111c-4.465,0-8.083-3.62-8.083-8.084s3.618-8.083,8.083-8.083h4.111
                        c4.465,0,8.083,3.618,8.083,8.083C291.278,265.173,287.659,268.793,283.193,268.793z"/>
                    <path style="opacity:0.1;enable-background:new    ;" d="M198.871,305.452c0-12.709,9.15-23.273,21.218-25.485
                        c-0.002-0.145-0.012-0.289-0.012-0.434c0-16.916,13.714-30.63,30.63-30.63c0.779,0,1.55,0.039,2.314,0.095
                        c3.476-8.416,10.597-14.939,19.395-17.615c-5.581-7.504-14.495-12.379-24.566-12.379c-12.778,0-23.724,7.827-28.319,18.946
                        c-0.764-0.056-1.535-0.095-2.313-0.095c-16.916,0-30.629,13.713-30.629,30.63c0,0.144,0.008,0.287,0.01,0.434
                        c-12.068,2.211-21.217,12.776-21.217,25.484c0,14.314,11.604,25.919,25.918,25.919c2.099,0,6.439,0,12.266,0
                        C200.611,316.111,198.871,310.987,198.871,305.452z"/>
                    <path style="fill:#FFAB5F;" d="M248.426,251.121h-4.11c-4.465,0-8.084-3.62-8.084-8.084s3.62-8.083,8.084-8.083h4.11
                        c4.465,0,8.083,3.618,8.083,8.083S252.89,251.121,248.426,251.121z"/>
                    <path style="fill:#C14616;" d="M236.07,275.861h-4.11c-4.465,0-8.084-3.62-8.084-8.084c0-4.466,3.62-8.083,8.084-8.083h4.11
                        c4.465,0,8.084,3.618,8.084,8.083C244.154,272.242,240.534,275.861,236.07,275.861z"/>
                    <g>
                        <path style="fill:#FFAB5F;" d="M271.988,293.533h-4.111c-4.465,0-8.083-3.62-8.083-8.084c0-4.465,3.618-8.083,8.083-8.083h4.111
                            c4.465,0,8.083,3.618,8.083,8.083C280.071,289.913,276.453,293.533,271.988,293.533z"/>
                        <path style="fill:#FFAB5F;" d="M204.261,293.533h-4.111c-4.464,0-8.083-3.62-8.083-8.084c0-4.465,3.62-8.083,8.083-8.083h4.111
                            c4.465,0,8.083,3.618,8.083,8.083C212.344,289.913,208.727,293.533,204.261,293.533z"/>
                    </g>
                    <path style="fill:#FFE783;" d="M468.345,370.178c0,35.719-28.955,64.675-64.674,64.675H164.378
                        c-35.718,0-64.674-28.956-64.674-64.675l0,0c0-35.718,28.956-64.674,64.674-64.674h239.293
                        C439.39,305.505,468.345,334.461,468.345,370.178L468.345,370.178z"/>
                    <path style="fill:#FFF4BD;" d="M164.378,413.295c-23.774,0-43.116-19.342-43.116-43.117c0-23.774,19.342-43.116,43.116-43.116
                        h239.293c23.774,0,43.117,19.342,43.117,43.116c0,23.775-19.343,43.117-43.117,43.117H164.378z"/>
                    <path style="fill:#F7E07C;" d="M164.378,391.736c-11.887,0-21.557-9.671-21.557-21.558c0-11.887,9.671-21.557,21.557-21.557h239.293
                        c11.888,0,21.558,9.671,21.558,21.557c0,11.888-9.671,21.558-21.558,21.558H164.378z"/>
                    <path style="fill:#FFE783;" d="M379.958,393.7c0,29.765-24.13,53.895-53.895,53.895h-79.764c-29.765,0-53.895-24.13-53.895-53.895
                        l0,0c0-29.765,24.13-53.895,53.895-53.895h79.764C355.828,339.805,379.958,363.935,379.958,393.7L379.958,393.7z"/>
                    <path style="fill:#FFF4BD;" d="M246.299,426.036c-17.83,0-32.336-14.506-32.336-32.336c0-17.831,14.506-32.336,32.336-32.336h79.764
                        c17.83,0,32.336,14.506,32.336,32.336s-14.506,32.336-32.336,32.336H246.299z"/>
                    <path style="fill:#FFE783;" d="M246.299,404.479c-5.943,0-10.778-4.836-10.778-10.778c0-5.942,4.836-10.778,10.778-10.778h79.764
                        c5.943,0,10.778,4.836,10.778,10.778c0,5.942-4.836,10.778-10.778,10.778H246.299z"/>
                    <path style="fill:#F7E07C;" d="M231.208,359.4c0,29.765-24.13,53.895-53.895,53.895H97.549c-29.765,0-53.894-24.13-53.894-53.895
                        l0,0c0-29.765,24.129-53.895,53.894-53.895h79.764C207.079,305.505,231.208,329.635,231.208,359.4L231.208,359.4z"/>
                    <path style="fill:#FFF4BD;" d="M97.549,391.736c-17.829,0-32.336-14.506-32.336-32.336s14.507-32.336,32.336-32.336h79.764
                        c17.83,0,32.337,14.506,32.337,32.336s-14.507,32.336-32.337,32.336H97.549z"/>
                    <path style="fill:#FFE783;" d="M97.549,370.178c-5.943,0-10.778-4.836-10.778-10.778s4.836-10.778,10.778-10.778h79.764
                        c5.943,0,10.779,4.836,10.779,10.778s-4.836,10.778-10.779,10.778H97.549z"/>
                    <path style="fill:#F2D8A0;" d="M97.549,218.735H69.661c-24.142,0-43.785-19.642-43.785-43.784c0-24.143,19.643-43.785,43.785-43.785
                        H96.24c4.465,0,8.084,3.618,8.084,8.083s-3.62,8.084-8.084,8.084H69.661c-15.228,0-27.618,12.389-27.618,27.618
                        c0,15.227,12.388,27.617,27.618,27.617h27.887c4.465,0,8.084,3.62,8.084,8.083C105.634,215.115,102.014,218.735,97.549,218.735z"/>
                    <path style="fill:#FCE9C3;" d="M165.438,147.333h-31.183c-4.465,0-8.084-3.62-8.084-8.084s3.62-8.083,8.084-8.083h31.183
                        c17.544,0,31.817-14.273,31.817-31.818c0-17.544-14.273-31.817-31.817-31.817H130.23c-4.465,0-8.084-3.62-8.084-8.084
                        s3.62-8.083,8.084-8.083h35.208c26.459,0,47.986,21.527,47.986,47.986C213.424,125.806,191.897,147.333,165.438,147.333z"/>
                    <path style="fill:#F2D8A0;" d="M427.993,185.32h-64.191c-13.38,0-24.266-10.886-24.266-24.265c0-13.38,10.886-24.264,24.266-24.264
                        h22.318c4.465,0,8.083-3.62,8.083-8.084c0-4.465-3.618-8.083-8.083-8.083h-22.318c-22.295,0-40.433,18.137-40.433,40.431
                        s18.138,40.432,40.433,40.432h64.192c10.487,0,19.018,8.533,19.018,19.019v17.599c0,4.465,3.62,8.084,8.084,8.084
                        c4.465,0,8.083-3.62,8.083-8.084v-17.599C463.18,201.105,447.396,185.32,427.993,185.32z"/>
                    <path style="fill:#B3B3B3;" d="M71.431,418.529c8.514,24.508,31.79,42.109,59.198,42.109h250.74
                        c27.41,0,50.685-17.601,59.199-42.109H71.431z"/>
                    <path style="opacity:0.1;enable-background:new    ;" d="M115.087,418.529H71.431c8.514,24.508,31.79,42.109,59.198,42.109h43.654
                        C146.875,460.638,123.6,443.037,115.087,418.529z"/>
                    <path style="fill:#CCCCCC;" d="M512,412.575c0,9.449-7.659,17.108-17.108,17.108H17.107C7.659,429.683,0,422.024,0,412.575l0,0
                        c0-9.448,7.659-17.107,17.107-17.107h477.785C504.341,395.468,512,403.127,512,412.575L512,412.575z"/>
                    <path style="opacity:0.1;enable-background:new    ;" d="M43.655,412.575c0-9.448,7.658-17.107,17.107-17.107H17.107
                        C7.659,395.468,0,403.127,0,412.575c0,9.449,7.659,17.108,17.107,17.108h43.655C51.313,429.683,43.655,422.024,43.655,412.575z"/>
                    </svg>
                    </div>
                    <span class="bold"><p>3</p></span>
                    <h3 class="titulo-medio">Alimentação preferida</h3>
                    <p>Escolha suas refeições baseadas no seu <strong>gosto pessoal</strong>, com opções feitas exclusivamente para você.</p>
                </div>
                <div class="info">
                    <div class="img">
                    <svg width="800px" height="800px" viewBox="0 0 512 512" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">

                    <g id="SVGRepo_bgCarrier" stroke-width="0"/>

                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"/>

                    <g id="SVGRepo_iconCarrier"> <g id="_x36_45_x2C__dish_x2C__love_x2C__wedding_x2C__heart"> <g> <path d="M260.53,45.56c10.01,0,18.12,8.11,18.12,18.12c0,10.01-8.11,18.13-18.12,18.13 c-10.011,0-18.12-8.12-18.12-18.13C242.41,53.67,250.52,45.56,260.53,45.56z" style="fill:#FBB14F;"/> <path d="M247.41,74.43c0-10.01,8.109-18.12,18.12-18.12c5.119,0,9.733,2.13,13.028,5.542 c-0.917-9.151-8.636-16.292-18.028-16.292c-10.011,0-18.12,8.11-18.12,18.12c0,4.891,1.944,9.322,5.093,12.583 C247.442,75.66,247.41,75.049,247.41,74.43z" style="fill:#E59A41;"/> <path d="M314.56,122.11c13.221,0,23.921,9.78,23.921,21.84c0,21.84-23.921,34.28-47.811,56.12 c-23.88-21.84-47.771-34.28-47.771-56.12c0-12.06,10.7-21.84,23.891-21.84c11.94,0,17.91,5.46,23.88,16.38 C296.65,127.57,302.62,122.11,314.56,122.11z" style="fill:#EF3E5C;"/> <g> <g> <g> <path d="M258.9,148.95c0-11.856,10.342-21.501,23.225-21.824c-3.961-3.338-8.733-5.016-15.335-5.016 c-13.19,0-23.891,9.78-23.891,21.84c0,21.84,23.891,34.28,47.771,56.12c1.688-1.543,3.374-3.034,5.054-4.49 C275.998,179.176,258.9,167.426,258.9,148.95z" style="fill:#E42A53;"/> </g> </g> </g> <path d="M216.89,168.34c5.82,5.81,6.23,14.83,0.92,20.15c-9.62,9.61-25.63,4.56-45.77,3.66 c-0.9-20.14-5.94-36.14,3.68-45.75c5.31-5.31,14.33-4.91,20.13,0.9c5.26,5.26,5.49,10.29,3.311,17.73 C206.6,162.85,211.63,163.08,216.89,168.34z" style="fill:#EF3E5C;"/> <g> <g> <g> <path d="M184.97,156.15c3.887-3.887,9.758-4.701,14.902-2.587c-0.672-2.159-1.953-4.194-4.022-6.263 c-5.8-5.81-14.82-6.21-20.13-0.9c-9.62,9.61-4.58,25.61-3.68,45.75c2.957,0.132,5.823,0.354,8.595,0.606 C179.171,176.908,176.855,164.256,184.97,156.15z" style="fill:#E42A53;"/> </g> </g> </g> <path d="M423.63,244.44v4.53H88.37v-4.53c0-92.58,75.05-167.63,167.63-167.63 c46.29,0,88.2,18.76,118.53,49.1C404.87,156.24,423.63,198.15,423.63,244.44z M338.48,143.95c0-12.06-10.7-21.84-23.921-21.84 c-11.939,0-17.909,5.46-23.89,16.38c-5.97-10.92-11.939-16.38-23.88-16.38c-13.19,0-23.891,9.78-23.891,21.84 c0,21.84,23.891,34.28,47.771,56.12C314.56,178.23,338.48,165.79,338.48,143.95z M217.81,188.49c5.311-5.32,4.9-14.34-0.92-20.15 c-5.26-5.26-10.29-5.49-17.729-3.31c2.18-7.44,1.949-12.47-3.311-17.73c-5.8-5.81-14.82-6.21-20.13-0.9 c-9.62,9.61-4.58,25.61-3.68,45.75C192.18,193.05,208.189,198.1,217.81,188.49z" style="fill:#FFECB2;"/> <g> <path d="M265.5,88.06c46.29,0,88.2,18.76,118.53,49.1c1.61,1.609,3.18,3.258,4.724,4.932 c-4.397-5.693-9.144-11.104-14.224-16.182C344.2,95.57,302.29,76.81,256,76.81c-92.58,0-167.63,75.05-167.63,167.63v4.53h9.646 C101.545,159.507,175.172,88.06,265.5,88.06z" style="fill:#E8D295;"/> </g> <path d="M444.18,255.6c4.101,4.099,6.641,9.759,6.641,16.019c0,12.51-10.15,22.66-22.66,22.66H83.84 c-6.26,0-11.92-2.539-16.021-6.639c-4.1-4.102-6.64-9.762-6.64-16.021c0-12.51,10.15-22.649,22.66-22.649h4.53h335.26h4.53 C434.42,248.97,440.08,251.5,444.18,255.6z" style="fill:#FBB14F;"/> <path d="M72.18,284.869c0-12.51,10.15-22.648,22.66-22.648h4.53h335.26h4.53 c3.847,0,7.465,0.957,10.635,2.645c-1.105-3.539-3.056-6.707-5.615-9.265c-4.1-4.1-9.76-6.63-16.02-6.63h-4.53H88.37h-4.53 c-12.51,0-22.66,10.14-22.66,22.649c0,6.26,2.54,11.92,6.64,16.021c1.582,1.58,3.396,2.926,5.388,3.988 C72.54,289.494,72.18,287.225,72.18,284.869z" style="fill:#E59A41;"/> <path d="M142.729,449.59v16.85H88.37v-144.98h54.359v18.461v0.471V444V449.59z M124.609,439.25 c0-5-4.05-9.061-9.06-9.061c-5,0-9.06,4.061-9.06,9.061c0,5.01,4.06,9.07,9.06,9.07C120.56,448.32,124.609,444.26,124.609,439.25z " style="fill:#415A6B;"/> <g> <polygon points="97.43,331.459 142.729,331.459 142.729,321.459 88.37,321.459 88.37,466.439 97.43,466.439 " style="fill:#344D5B;"/> </g> <path d="M305.27,383.85c19.36-16.539,56.131-37.77,81.471-41.42c12.29-1.83,35.67,2.621,36.87,19.279 c1.85,26.711-110.181,92.67-143.9,95.301c-56.7,4.49-68.891-33.859-136.98-7.42V444V340.391c8.11-3.801,15.98-6.791,23-8.24 c29.25-6.16,134.971,4.57,140.41,41.199c0.141,0.891,0.23,1.74,0.28,2.57C306.61,378.949,306.21,381.609,305.27,383.85z" style="fill:#FFC592;"/> <path d="M160.729,342.9c29.25-6.16,134.971,4.57,140.41,41.199c0.141,0.891,0.23,1.74,0.279,2.57 c0.191,3.029-0.209,5.689-1.15,7.93c19.361-16.539,56.131-37.77,81.471-41.42c12.291-1.83,35.67,2.621,36.871,19.279 c0.046,0.664,0.002,1.357-0.089,2.066c3.475-4.824,5.341-9.186,5.09-12.816c-1.2-16.658-24.58-21.109-36.87-19.279 c-25.34,3.65-62.11,24.881-81.471,41.42c0.94-2.24,1.341-4.9,1.15-7.93c-0.05-0.83-0.14-1.68-0.28-2.57 c-5.439-36.629-111.16-47.359-140.41-41.199c-7.02,1.449-14.89,4.439-23,8.24v8.508C149.06,346.176,155.163,344.049,160.729,342.9 z" style="fill:#EFA873;"/> <path d="M115.55,430.189c5.01,0,9.06,4.061,9.06,9.061c0,5.01-4.05,9.07-9.06,9.07 c-5,0-9.06-4.061-9.06-9.07C106.49,434.25,110.55,430.189,115.55,430.189z" style="fill:#344D5B;"/> <path d="M274.285,402.607c-18.154,0-40.628-5.264-58.546-10.082c-1.262-0.338-2.333-0.627-3.185-0.848 c-2.673-0.693-4.277-3.422-3.584-6.096c0.692-2.672,3.422-4.279,6.095-3.584c0.875,0.227,1.975,0.523,3.27,0.871 c40.169,10.801,65.39,12.713,74.957,5.688c2.381-1.75,3.552-4.051,3.683-7.244c0.056-1.121-0.02-2.314-0.223-3.59 c-0.433-2.727,1.427-5.289,4.153-5.723c2.727-0.43,5.29,1.426,5.724,4.152c0.311,1.959,0.424,3.848,0.336,5.615 c-0.254,6.16-2.936,11.309-7.753,14.848C293.314,400.947,284.48,402.607,274.285,402.607z" style="fill:#EFA873;"/> <path d="M188.035,226.78h-90.61c-2.762,0-5-2.239-5-5s2.238-5,5-5h90.61c2.762,0,5,2.239,5,5 S190.797,226.78,188.035,226.78z" style="fill:#E8D295;"/> </g> </g> <g id="Layer_1"/> </g>

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