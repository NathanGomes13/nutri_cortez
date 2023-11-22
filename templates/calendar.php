<head>
    <link rel="stylesheet" href="../static/styles/calendar.css">
    <style type="text/css" id="progress-styleOne"></style>
    <style type="text/css" id="progress-styleTwo"></style>
    <style type="text/css" id="progress-styleThree"></style>
    <style type="text/css" id="progress-styleFour"></style>
    <style type="text/css" id="progress-styleFive"></style>
</head>
<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<div id="calendar-box">
    <div class="tit-box">
        <h4 class="titulo-medio">CALENDÁRIO DE REFEIÇÕES</h4>
        <p>Selecione o dia em que deseja organizar sua próxima refeição. Não esqueça de salvar!</p><br>
        <p class="text-danger"><i class="fa-solid fa-circle-exclamation" style="color: #f17f7f;"></i> Para usuários em dispositivo touch, é necessário pressionar o toque por meio segundo no dia desejado.</p>
    </div>
    <div id='calendar'></div>
</div>

<!-- Modal Visualizar -->
<div class="modal fade" id="visualizar" tabindex="-1" aria-labelledby="visualizarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
        <div id="detail-line-1">
            <div class="modal-header">
                <span id="start"></span>
                <div class="title-box text-center">
                    <h5 class="modal-title" id="visualizarLabel">MENU</h5>
                    <img src="../static/imagens/home/calendar/nutri-logo-faixa.png" alt="Nutri Cortez">
                </div>
                <div class="btn-box">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            </div>
            <div class="modal-body">
                <span id='title'></span>
                <div class="row">
                    <div class="macronutrientes preencher">
                        <div class="text-center"><p>Calorias</p><span id="calorias"></span></div>
                        <div class="text-center"><p>Carboidratos</p><span id="carboidratos"></span></div>
                        <div class="text-center"><p>Proteínas</p><span id="proteinas"></span></div>
                        <div class="text-center"><p>Gorduras</p><span id="gorduras"></span></div>
                    </div>
                    <div class="refeicao-box">
                        <div class="tit-box">
                            <h5>Café da Manhã</h5>
                        </div>
                        <div class="refeicao-ul-box" id="cafe_da_manha"></div>
                    </div>
                    <div class="refeicao-box">
                        <div class="tit-box">
                            <h5>Lanches</h5>
                        </div>
                        <div class="refeicao-ul-box" id="lanches"></div>
                    </div>
                    <div class="refeicao-box">
                        <div class="tit-box">
                            <h5>Almoço</h5>
                        </div>
                        <div class="refeicao-ul-box" id="almoco"></div>
                    </div>
                    <div class="refeicao-box">
                        <div class="tit-box">
                            <h5>Almoço Montado</h5>
                        </div>
                        <div class="refeicao-ul-box" id="almoco_montar"></div>
                    </div>
                    <div class="refeicao-box">
                        <div class="tit-box">
                            <h5>Janta</h5>
                        </div>
                        <div class="refeicao-ul-box" id="janta"></div>
                    </div>
                    <div class="refeicao-box">
                        <div class="tit-box">
                            <h5>Janta Montada</h5>
                        </div>
                        <div class="refeicao-ul-box" id="janta_montar"></div>
                    </div>
                    <div class="refeicao-box preencher">
                        <div class="tit-box">
                            <h5>Salada</h5>
                        </div>
                        <div class="refeicao-ul-box" id="salada"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-bs-dismiss="modal">Fechar Menu</button>
                <button type="button" class="btn btn-danger apagar-refeicao" data-bs-toggle="modal" data-bs-target="#confirmationModal">Excluir Menu</button>
            </div>
        </div>
    </div>
    </div>
</div>
<div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header py-4">
                <h5 class="modal-title" id="confirmationModalLabel">Confirmar Exclusão</h5>
            </div>
            <div class="modal-body py-3">
                Tem certeza que deseja excluir esta refeição?
            </div>
            <div class="modal-footer">
                <button id="cancel-apagar-refeicao" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <a href="" id="apagar-refeicao-a" class="btn btn-danger apagar-refeicao">Excluir Menu</a>
            </div>
        </div>
    </div>
</div>
<!-- Fim do Modal Visualizar -->
<!-- Modal Cadastrar -->
<div class="modal fade" id="cadastrar" tabindex="-1" aria-labelledby="cadastrarLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <div class="title-box text-center">
                <div class="modal-left desktop">
                    <input style="background:none;" class="text-center desktop" name="start" id="start" onkeypress="DataHora(event, this)">
                    <button class="preferencia-btn desktop" data-preferencia="pouca_gordura"><i class="fa-solid fa-arrow-down px-2"></i>Gordura</button>
                    <button class="preferencia-btn desktop" data-preferencia="pouco_carboidrato"><i class="fa-solid fa-arrow-down px-2"></i>Carboidrato</button>
                    <button class="limpar-selecoes-btn desktop">Limpar Seleções</button>
                </div>
                
                <h4 class="modal-title" id="cadastrarLabel">
                    <?php
                        include "php-logic/harris-benedict.php";
                    ?>
                </h4>

                <div class="modal-right">
                    <div class="btn-box">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <input style="background:none;" class="text-center mobile" name="start" id="start" onkeypress="DataHora(event, this)">

                    <button class="preferencia-btn mobile" data-preferencia="pouca_gordura"><i class="fa-solid fa-arrow-down px-2"></i>Gordura</button>
                    <button class="preferencia-btn mobile" data-preferencia="pouco_carboidrato"><i class="fa-solid fa-arrow-down px-2"></i>Carboidrato</button>
                    <button class="preferencia-btn" data-preferencia="muito_carboidrato"><i class="fa-solid fa-arrow-up px-2"></i>Carboidrato</button>
                    <button class="preferencia-btn" data-preferencia="muita_proteina"><i class="fa-solid fa-arrow-up px-2"></i>Proteína</button>
                    <button class="limpar-selecoes-btn">Limpar Seleções</button>
                </div>
            </div>
        </div>
        
        <div class="modal-body">
            <span id="msg-cad"></span>
            <form id="addevent" method="POST" enctype="multipart/form-data">
                <div class="form-group row">
                    <input type="number" class="hide" name="atual_calorias_input" id="atual_calorias_input" value="">
                    <input type="number" class="hide" name="atual_carboidratos_input" id="atual_carboidratos_input" value="">
                    <input type="number" class="hide" name="atual_proteinas_input" id="atual_proteinas_input" value="">
                    <input type="number" class="hide" name="atual_gorduras_input" id="atual_gorduras_input" value="">

                    <label class="not-add-select" for="title">
                    <div class="faixa-box"><span>Título do Menu (Opcional)</span></div>
                    <input type="text" id="title" name="title" placeholder="Insira um nome de identificação">  
                    </label>
                    <label class="not-add-select" for="color">
                    <div class="faixa-box"><span>Cor da Etiqueta</span></div>
                    <select onchange="changeSelectStyle(this)" onload="defaultColor(this)" name="color" id="color">
                        <option style="color:#5aa9e6;" value="#5aa9e6">Azul</option>
                        <option style="color:#89cff0 ;" value="#89cff0 ">Azul Claro</option>
                        <option style="color:#ffee93;" value="#ffee93">Amarelo</option>
                        <option style="color:#7161ef;" value="#7161ef">Roxo</option>
                        <option style="color:#80ffe8;" value="#80ffe8">Ciano</option>
                        <option style="color:#fface4;" value="#fface4">Rosa</option>
                        <option style="color:#7bf1a8;" value="#7bf1a8">Verde</option>
                        <option style="color:#ff686b;" value="#ff686b">Vermelho</option>
                        <option style="color:#ffd6a5;" value="#ffd6a5">Laranja</option>
                        <option style="color:#836953 ;" value="#836953 ">Marrom</option>
                    </select>
                    </label>
                    <input type="hidden" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
                    <input type="hidden" name="end" class="form-control" id="end"  onkeypress="DataHora(event, this)">
                    <label id="montar-cafe_box" for="select_cafe_da_manha">
                    <div class="faixa-box">
                        <div id="progress-circleOne" class="progress-circle progress-circle-one" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="p-h"></span><span class="p-f"></span>
                            <span id="progress">
                            <svg width="800px" height="800px" viewBox="0 0 47.5 47.5" id="svg2" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg">

                            <defs id="defs6">

                            <clipPath clipPathUnits="userSpaceOnUse" id="clipPath16">

                            <path d="M 0,38 38,38 38,0 0,0 0,38 Z" id="path18"/>

                            </clipPath>

                            <clipPath clipPathUnits="userSpaceOnUse" id="clipPath40">

                            <path d="M 0,38 38,38 38,0 0,0 0,38 Z" id="path42"/>

                            </clipPath>

                            </defs>

                            <g id="g10" transform="matrix(1.25,0,0,-1.25,0,47.5)">

                            <g id="g12">

                            <g clip-path="url(#clipPath16)" id="g14">

                            <g id="g20" transform="translate(37,11)">

                            <path d="m 0,0 c 0,-5.522 -8.059,-10 -18,-10 -9.941,0 -18,4.478 -18,10 0,5.522 8.059,10 18,10 C -8.059,10 0,5.522 0,0" id="path22" style="fill:#99aab5;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g24" transform="translate(37,13)">

                            <path d="m 0,0 c 0,-5.522 -8.059,-10 -18,-10 -9.941,0 -18,4.478 -18,10 0,5.522 8.059,10 18,10 C -8.059,10 0,5.522 0,0" id="path26" style="fill:#ccd6dd;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g28" transform="translate(19,6)">

                            <path d="m 0,0 c -14.958,0 -17,15 -17,19 l 34,0 C 17,17 15.042,0 0,0" id="path30" style="fill:#f5f8fa;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g32" transform="translate(32.8818,30.0483)">

                            <path d="M 0,0 C -1.357,0.938 -3.103,1.694 -5.121,2.25 -3.246,2.826 -0.57,2.559 0,0 M 2.503,-2.692 C 4.945,7.43 -7.278,5.014 -9.701,3.106 c -1.34,0.149 -2.736,0.234 -4.181,0.234 -9.389,0 -17,-3.228 -17,-8.444 0,-5.216 7.611,-9.444 17,-9.444 9.389,0 17,4.228 17,9.444 0,0.862 -0.225,1.664 -0.615,2.412" id="path34" style="fill:#ccd6dd;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            </g>

                            </g>

                            <g id="g36">

                            <g clip-path="url(#clipPath40)" id="g38">

                            <g id="g44" transform="translate(34,24)">

                            <path d="m 0,0 c 0,-3.866 -6.716,-7 -15,-7 -8.284,0 -15,3.134 -15,7 0,3.866 6.716,7 15,7 C -6.716,7 0,3.866 0,0" id="path46" style="fill:#8a4b38;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g48" transform="translate(21,20)">

                            <path d="m 0,0 c -0.256,0 -0.512,0.098 -0.707,0.293 -2.337,2.337 -2.376,4.885 -0.125,8.262 0.739,1.109 0.9,2.245 0.478,3.377 -0.461,1.235 -1.438,1.996 -1.731,2.076 -0.553,0 -0.958,0.444 -0.958,0.996 C -3.043,15.557 -2.552,16 -2,16 -1.003,16 0.395,14.847 1.183,13.375 2.217,11.442 2.093,9.336 0.832,7.445 -1.129,4.503 -0.699,3.113 0.707,1.707 1.098,1.316 1.098,0.684 0.707,0.293 0.512,0.098 0.256,0 0,0" id="path50" style="fill:#d99e82;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g52" transform="translate(15,22)">

                            <path d="m 0,0 c -0.256,0 -0.512,0.098 -0.707,0.293 -2.337,2.337 -2.376,4.885 -0.125,8.262 0.727,1.091 0.894,2.082 0.494,2.947 -0.444,0.961 -1.431,1.469 -1.684,1.499 -0.552,0 -0.989,0.447 -0.989,0.999 0,0.553 0.459,1 1.011,1 0.997,0 2.584,-0.974 3.36,-2.423 C 1.841,11.678 2.413,9.816 0.832,7.445 -1.129,4.503 -0.699,3.113 0.707,1.707 1.098,1.316 1.098,0.684 0.707,0.293 0.512,0.098 0.256,0 0,0" id="path54" style="fill:#d99e82;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            </g>

                            </g>

                            </g>

                            </svg>
                            </span>
                            <span class="sr-only">Complete</span>
                        </div>
                        <span>Café da Manhã</span>
                        <button class="label-add" id="adicionarSelectBtn-Cafe">+</button>
                    </div>
                    <select name="select_cafe_da_manha[]" class="select_cafe_da_manha select_refeicao" data-tabela="pratos_cafe_da_manha">
                    <option value=""></option>
                    <?php
                        $sql = "SELECT opcao, nome, calorias FROM pratos_cafe_da_manha ORDER BY opcao";
                        $result = mysqli_query($conn, $sql);
                        
                        $titulo_atual = ""; // Variável para armazenar o título atual
                        
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $opcao = $row['opcao'];
                                $nome = $row['nome'];
                                $calorias = $row['calorias'];
                                
                                // Verifica se a opção mudou e adiciona um título
                                if ($opcao != $titulo_atual) {
                                    echo "<optgroup label='$opcao'>";
                                    $titulo_atual = $opcao;
                                }
                                
                                echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
                            }
                        } else {
                            echo "<option value=''>Nenhum prato encontrado</option>";
                        }
                    ?>
                    </select>
                    </label>
                    <div class="informacoes-detalhadas" id="informacoes-detalhadas-cafe"></div>

                    <section class="tabs-container">
                        <div class="faixa-box">
                            <div id="progress-circleTwo" class="progress-circle progress-circle-two" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                <span class="p-h"></span><span class="p-f"></span>
                                <span id="progress">
                                <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                                <path style="fill:#FFEA74;" d="M148.088,371.324c0-21.1-17.105-38.205-38.205-38.205c-9.036,0-17.335,3.144-23.876,8.389
                                    c-5.439-5.194-12.802-8.389-20.917-8.389c-16.734,0-30.301,13.566-30.301,30.301c0,4.031,0.794,7.876,2.224,11.395
                                    c-13.6,4.998-23.302,18.064-23.302,33.397c0,19.645,15.925,35.57,35.57,35.57c7.732,0,37.156,7.905,48.744,7.905
                                    c18.917,0,34.253-15.336,34.253-34.254C132.28,412.692,148.088,385.221,148.088,371.324z"/>
                                <g>
                                    <path style="fill:#62AF62;" d="M124.641,335.721H95.537c-4.465,0-8.084-3.62-8.084-8.084c0-4.465,3.62-8.084,8.084-8.084h21.019
                                        v-21.019c0-4.465,3.62-8.084,8.084-8.084c4.465,0,8.084,3.62,8.084,8.084v29.104C132.724,332.101,129.105,335.721,124.641,335.721z
                                        "/>
                                    <path style="fill:#62AF62;" d="M103.716,314.795H74.612c-4.465,0-8.084-3.62-8.084-8.084c0-4.465,3.62-8.084,8.084-8.084h21.019
                                        v-21.018c0-4.465,3.62-8.084,8.084-8.084s8.084,3.62,8.084,8.084v29.104C111.8,311.176,108.18,314.795,103.716,314.795z"/>
                                </g>
                                <path style="fill:#519351;" d="M144.766,355.848c-2.069,0-4.138-0.79-5.717-2.368l-65.096-65.096c-3.157-3.157-3.157-8.276,0-11.432
                                    c3.157-3.157,8.276-3.157,11.432,0l65.096,65.096c3.157,3.157,3.157,8.276,0,11.432
                                    C148.904,355.058,146.835,355.848,144.766,355.848z"/>
                                <g>
                                    <path style="fill:#E8CF52;" d="M101.32,384.981c-4.465,0-8.084-3.62-8.084-8.084c0-2.875-2.338-5.214-5.214-5.214
                                        c-2.875,0-5.214,2.339-5.214,5.214c0,4.465-3.62,8.084-8.083,8.084c-4.465,0-8.084-3.62-8.084-8.084
                                        c0-11.791,9.592-21.382,21.382-21.382c11.791,0,21.382,9.592,21.382,21.382C109.404,381.363,105.784,384.981,101.32,384.981z"/>
                                    <path style="fill:#E8CF52;" d="M73.654,420.429c-4.465,0-8.084-3.62-8.084-8.084c0-2.875-2.338-5.214-5.214-5.214
                                        c-2.875,0-5.214,2.339-5.214,5.214c0,4.465-3.621,8.083-8.084,8.083h-0.001c-4.464-0.001-8.084-3.62-8.083-8.084
                                        c0.001-11.791,9.593-21.382,21.383-21.382c11.791,0,21.382,9.592,21.382,21.382C81.738,416.809,78.119,420.429,73.654,420.429z"/>
                                </g>
                                <path style="fill:#9D7049;" d="M469.963,370.974c0,37.505-30.403,67.908-67.908,67.908H173.541
                                    c-37.505,0-67.907-30.403-67.907-67.908v-4.311c0-37.505,30.403-67.908,67.907-67.908h228.514c37.505,0,67.908,30.403,67.908,67.908
                                    L469.963,370.974L469.963,370.974z"/>
                                <path style="fill:#C16A73;" d="M173.541,411.934c-22.585,0-40.96-18.375-40.96-40.96v-4.311c0-22.585,18.375-40.96,40.96-40.96
                                    h228.514c22.585,0,40.96,18.375,40.96,40.96v4.311c0,22.585-18.375,40.96-40.96,40.96H173.541z"/>
                                <path style="opacity:0.1;enable-background:new    ;" d="M402.055,389.39H173.541c-19.457,0-35.777-13.642-39.928-31.86
                                    c-0.674,2.937-1.031,5.994-1.031,9.133v4.311c0,22.585,18.375,40.96,40.96,40.96h228.514c22.585,0,40.96-18.375,40.96-40.96v-4.311
                                    c0-3.14-0.358-6.196-1.031-9.133C437.833,375.747,421.512,389.39,402.055,389.39z"/>
                                <path style="fill:#F2D8A0;" d="M324.985,171.99h-26.948c-4.465,0-8.084-3.62-8.084-8.084s3.62-8.084,8.084-8.084h26.948
                                    c14.248,0,25.84-11.592,25.84-25.84s-11.592-25.84-25.84-25.84h-23.406c-4.465,0-8.084-3.62-8.084-8.084
                                    c0-4.464,3.62-8.084,8.084-8.084h23.406c23.164,0,42.009,18.845,42.009,42.009C366.994,153.144,348.15,171.99,324.985,171.99z"/>
                                <path style="fill:#FCE9C3;" d="M195.315,218.872c-4.465,0-8.084-3.62-8.084-8.084V192.33c0-20.132,16.378-36.51,36.51-36.51h44.294
                                    c4.465,0,8.084,3.62,8.084,8.084s-3.62,8.084-8.084,8.084h-44.294c-11.216,0-20.341,9.125-20.341,20.341v18.457
                                    C203.4,215.252,199.78,218.872,195.315,218.872z"/>
                                <path style="fill:#F2D8A0;" d="M263.573,129.952h-52.907c-24.037,0-43.593-19.556-43.593-43.594
                                    c0-24.037,19.556-43.593,43.593-43.593h18.995c4.465,0,8.084,3.62,8.084,8.084s-3.62,8.084-8.084,8.084h-18.995
                                    c-15.122,0-27.424,12.303-27.424,27.425s12.303,27.425,27.424,27.425h52.907c4.465,0,8.084,3.62,8.084,8.084
                                    C271.658,126.332,268.038,129.952,263.573,129.952z"/>
                                <circle style="fill:#B0CE6F;" cx="88.294" cy="424.438" r="21.65"/>
                                <g>
                                    <path style="fill:#AB4D4D;" d="M402.055,325.702h-21.134l-23.387,23.387c-3.157,3.157-3.157,8.276,0,11.432
                                        c1.579,1.579,3.648,2.368,5.717,2.368s4.138-0.789,5.717-2.368l34.776-34.776C403.182,325.723,402.621,325.702,402.055,325.702z"/>
                                    <path style="fill:#AB4D4D;" d="M332.415,325.702l-23.387,23.387c-3.158,3.157-3.158,8.276,0,11.432
                                        c1.578,1.579,3.648,2.368,5.717,2.368s4.138-0.789,5.717-2.368l34.819-34.819H332.415z"/>
                                    <path style="fill:#AB4D4D;" d="M283.91,325.702l-23.387,23.387c-3.157,3.157-3.157,8.276,0,11.432
                                        c1.579,1.579,3.648,2.368,5.717,2.368s4.139-0.789,5.717-2.368l34.819-34.819H283.91z"/>
                                    <path style="fill:#AB4D4D;" d="M235.405,325.702l-23.387,23.387c-3.157,3.157-3.157,8.276,0,11.432
                                        c1.579,1.579,3.648,2.368,5.717,2.368s4.138-0.789,5.717-2.368l34.819-34.819H235.405z"/>
                                    <path style="fill:#AB4D4D;" d="M209.764,325.702H186.9l-23.387,23.387c-3.158,3.157-3.158,8.276,0,11.432
                                        c1.579,1.579,3.648,2.368,5.717,2.368s4.138-0.789,5.717-2.368L209.764,325.702z"/>
                                </g>
                                <circle style="fill:#B0CE6F;" cx="158.824" cy="420.927" r="25.161"/>
                                <path style="fill:#FFCC60;" d="M339.108,279.425c0.014-0.493,0.039-0.984,0.039-1.481c0-31.098-25.21-56.309-56.309-56.309
                                    s-56.309,25.211-56.309,56.309c0,0.496,0.024,0.987,0.038,1.481H339.108z"/>
                                <path style="opacity:0.1;enable-background:new    ;" d="M299.729,224.216c-5.332-1.674-11.006-2.581-16.891-2.581
                                    c-31.098,0-56.309,25.211-56.309,56.309c0,0.496,0.024,0.987,0.038,1.481h33.783c-0.014-0.493-0.038-0.984-0.038-1.481
                                    C260.311,252.732,276.884,231.392,299.729,224.216z"/>
                                <path style="fill:#F7EEDF;" d="M399.899,282.455c0,9.002-7.298,16.3-16.3,16.3H182.076c-9.003,0-16.299-7.298-16.299-16.3l0,0
                                    c0-9.002,7.297-16.3,16.299-16.3h201.523C392.601,266.155,399.899,273.453,399.899,282.455L399.899,282.455z"/>
                                <path style="opacity:0.1;enable-background:new    ;" d="M199.73,282.455c0-9.002,7.298-16.3,16.299-16.3h-33.954
                                    c-9.003,0-16.299,7.298-16.299,16.3c0,9.002,7.297,16.3,16.299,16.3h33.954C207.028,298.755,199.73,291.458,199.73,282.455z"/>
                                <path style="fill:#F48911;" d="M485.29,406.79c0,5.953-4.825,10.779-10.778,10.779h-51.739c-5.953,0-10.778-4.826-10.778-10.779
                                    v-6.467c0-5.954,4.825-10.778,10.778-10.778h51.739c5.953,0,10.778,4.825,10.778,10.778V406.79z"/>
                                <path style="fill:#EA9847;" d="M437.862,428.194c0,5.953-4.826,10.778-10.779,10.778h-51.739c-5.954,0-10.779-4.826-10.779-10.778
                                    v-6.467c0-5.954,4.825-10.779,10.779-10.779h51.739c5.953,0,10.779,4.825,10.779,10.779V428.194z"/>
                                <path style="fill:#DB7712;" d="M491.757,428.194c0,5.953-4.825,10.778-10.779,10.778h-51.739c-5.953,0-10.778-4.826-10.778-10.778
                                    v-6.467c0-5.954,4.825-10.779,10.778-10.779h51.739c5.953,0,10.779,4.825,10.779,10.779V428.194z"/>
                                <circle style="fill:#53B559;" cx="121.24" cy="420.927" r="25.161"/>
                                <path style="fill:#EFDFBB;" d="M512,458.456c0,5.954-4.826,10.779-10.779,10.779H10.779C4.826,469.235,0,464.41,0,458.456v-10.778
                                    c0-5.953,4.826-10.779,10.779-10.779h490.442c5.953,0,10.779,4.826,10.779,10.779L512,458.456L512,458.456z"/>
                                <path style="opacity:0.1;enable-background:new    ;" d="M43.655,458.456v-10.778c0-5.953,4.826-10.779,10.779-10.779H10.779
                                    C4.826,436.898,0,441.724,0,447.677v10.778c0,5.954,4.826,10.779,10.779,10.779h43.655C48.48,469.235,43.655,464.41,43.655,458.456z
                                    "/>
                                </svg>
                                </span>
                                <span class="sr-only">Complete</span>
                            </div>
                            <span>Almoço</span>
                        </div>
                        <input id="tab-1" type="radio" name="tabs" checked>
                        <label id="label-tab-1" for="tab-1">Pratos feitos</label>

                        <input id="tab-2" type="radio" name="tabs">
                        <label id="label-tab-2" for="tab-2">Montar Almoço</label>

                        <div class="contents_tabs">
                            <div class="content-tab" id="content-1">
                                <label id="montar-pratos_box" for="select_almoco">
                                    <div class="top-line-box">
                                        <span>Pratos Completos</span>
                                        <button class="label-add" id="adicionarSelectBtn-Pratos">+</button>
                                    </div>
                                    <select name="select_almoco[]" class="select_almoco select_all_almocos select_refeicao" data-tabela="pratos_almoco_e_janta">
                                    <option value=""></option>
                                <?php
                                    $sql = "SELECT opcao, nome, calorias FROM pratos_almoco_e_janta ORDER BY opcao";
                                    $result = mysqli_query($conn, $sql);
                                
                                    $titulo_atual = ""; // Variável para armazenar o título atual
                                
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $opcao = $row['opcao'];
                                            $nome = $row['nome'];
                                            $calorias = $row['calorias'];
                                            
                                            // Verifica se a opção mudou e adiciona um título
                                            if ($opcao != $titulo_atual) {
                                                echo "<optgroup label='$opcao'>";
                                                $titulo_atual = $opcao;
                                            }
                                            
                                            echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
                                        }
                                    } else {
                                        echo "<option value=''>Nenhum prato encontrado</option>";
                                    }
                                ?>
                                </select>
                                </label>
                                <div class="informacoes-detalhadas" id="informacoes-detalhadas-almoco-completo"></div>
                            </div>

                            <div class="content-tab" id="content-2">
                                <label id="montar-almoco_box" for="select_montar_almoco">
                                    <div class="top-line-box">
                                        <span>Monte sua refeição</span>
                                        <button class="label-add" id="adicionarSelectBtn-Montar">+</button>
                                    </div>
                                <select name="select_montar_almoco[]" class="select_montar_almoco select_all_almocos select_refeicao" data-tabela="pratos_opcoes_separadas">
                                <option value=""></option>
                                <?php
                                    $sql = "SELECT nome, calorias FROM pratos_opcoes_separadas ORDER BY nome ASC";
                                    $result = mysqli_query($conn, $sql);
                                
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $nome = $row['nome'];
                                            $calorias = $row['calorias'];

                                            echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
                                        }
                                    } else {
                                        echo "<option value=''>Nenhum prato encontrado</option>";
                                    }
                                ?>
                                </select>
                                </label>
                                <div class="informacoes-detalhadas" id="informacoes-detalhadas-almoco-montar"></div>
                            </div>
                        </div>
                    </section>
                    <section class="tabs-container">
                    <div class="faixa-box">
                        <div id="progress-circleThree" class="progress-circle progress-circle-three" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="p-h"></span><span class="p-f"></span>
                            <span id="progress">
                            <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
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
                            </span> <span class="sr-only">Complete</span>
                        </div>
                        <span>Jantar</span>
                    </div>
                        <input id="j-tab-1" type="radio" name="j-tabs" checked>
                        <label id="j-label-tab-1" for="j-tab-1">Pratos feitos</label>

                        <input id="j-tab-2" type="radio" name="j-tabs">
                        <label id="j-label-tab-2" for="j-tab-2">Montar Janta</label>

                        <div class="contents_tabs">
                            <div class="content-tab" id="j-content-1">
                                <label id="montar-j-pratos_box" for="select_janta">
                                    <div class="top-line-box">
                                        <span>Pratos Completos</span>
                                        <button class="label-add" id="adicionarSelectBtn-J-Pratos">+</button>
                                    </div>
                                <select name="select_janta[]" class="select_janta select_all_jantas select_refeicao" data-tabela="pratos_almoco_e_janta">
                                    <option value=""></option>
                                <?php
                                    $sql = "SELECT opcao, nome, calorias FROM pratos_almoco_e_janta ORDER BY opcao";
                                    $result = mysqli_query($conn, $sql);
                                
                                    $titulo_atual = ""; // Variável para armazenar o título atual
                                
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $opcao = $row['opcao'];
                                            $nome = $row['nome'];
                                            $calorias = $row['calorias'];
                                            
                                            // Verifica se a opção mudou e adiciona um título
                                            if ($opcao != $titulo_atual) {
                                                echo "<optgroup label='$opcao'>";
                                                $titulo_atual = $opcao;
                                            }
                                            
                                            echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
                                        }
                                    } else {
                                        echo "<option value=''>Nenhum prato encontrado</option>";
                                    }
                                ?>
                                </select>
                                </label>
                                <div class="informacoes-detalhadas" id="informacoes-detalhadas-janta-completa"></div>
                            </div>

                            <div class="content-tab" id="j-content-2">
                                <label id="montar-janta_box" for="select_montar_janta">
                                    <div class="top-line-box">
                                        <span>Monte sua refeição</span>
                                        <button class="label-add" id="adicionarSelectBtn-J-Montar">+</button>
                                    </div>
                                    <select name="select_montar_janta[]" class="select_montar_janta select_all_jantas select_refeicao" data-tabela="pratos_opcoes_separadas">
                                    <option value=""></option>
                                <?php
                                    $sql = "SELECT nome, calorias FROM pratos_opcoes_separadas ORDER BY nome ASC";
                                    $result = mysqli_query($conn, $sql);
                                
                                    if (mysqli_num_rows($result) > 0) {
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            $nome = $row['nome'];
                                            $calorias = $row['calorias'];

                                            echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
                                        }
                                    } else {
                                        echo "<option value=''>Nenhum prato encontrado</option>";
                                    }
                                ?>
                                </select>
                                </label>
                                <div class="informacoes-detalhadas" id="informacoes-detalhadas-janta-montar"></div>
                            </div>
                        </div>
                    </section>
                    <label id="montar-lanches_box" for="select_lanches">
                    <div class="faixa-box">
                        <div id="progress-circleFour" class="progress-circle progress-circle-four" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="p-h"></span><span class="p-f"></span>
                            <span id="progress">
                            <svg width="800px" height="800px" viewBox="0 0 47.5 47.5" id="svg2" version="1.1" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:svg="http://www.w3.org/2000/svg">

                            <defs id="defs6">

                            <clipPath clipPathUnits="userSpaceOnUse" id="clipPath16">

                            <path d="M 0,38 38,38 38,0 0,0 0,38 Z" id="path18"/>

                            </clipPath>

                            </defs>

                            <g id="g10" transform="matrix(1.25,0,0,-1.25,0,47.5)">

                            <g id="g12">

                            <g clip-path="url(#clipPath16)" id="g14">

                            <g id="g20" transform="translate(35.9346,10.3232)">

                            <path d="m 0,0 c 0,6.651 -7.597,12.042 -16.967,12.042 -9.371,0 -16.968,-5.391 -16.968,-12.042 0,-6.649 7.597,-8.162 16.968,-8.162 C -7.597,-8.162 0,-6.649 0,0" id="path22" style="fill:#d99e82;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g24" transform="translate(35.9346,16.1406)">

                            <path d="m 0,0 c 0,6.651 -7.597,12.042 -16.967,12.042 -9.371,0 -16.968,-5.391 -16.968,-12.042 0,-6.649 7.597,-8.162 16.968,-8.162 C -7.597,-8.162 0,-6.649 0,0" id="path26" style="fill:#662113;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g28" transform="translate(20.167,10.5488)">

                            <path d="m 0,0 c -0.964,-0.531 -1.288,-0.529 -2.25,0.003 0,0 -7,3.615 -15.709,6.323 -1.166,0.583 -0.267,2.625 0.834,2.625 L 14.75,8.91 c 1.1,0 2.005,-2.311 1.125,-2.542 C 9.666,4.743 0,0 0,0" id="path30" style="fill:#ffcc4d;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g32" transform="translate(35.9346,21.9585)">

                            <path d="m 0,0 c 0,6.651 -7.597,12.042 -16.967,12.042 -9.371,0 -16.968,-5.391 -16.968,-12.042 0,-6.65 7.597,-7.375 16.968,-7.375 C -7.597,-7.375 0,-6.65 0,0" id="path34" style="fill:#d99e82;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g36" transform="translate(10.7417,28.9761)">

                            <path d="M 0,0 C -0.498,0.317 -0.644,0.979 -0.326,1.477 -0.007,1.975 0.654,2.121 1.152,1.802 1.65,1.484 2.396,0.439 2.079,-0.059 1.76,-0.557 0.498,-0.319 0,0" id="path38" style="fill:#ffe8b6;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g40" transform="translate(21.627,31.813)">

                            <path d="M 0,0 C 0.561,0.183 1.164,-0.125 1.347,-0.686 1.529,-1.248 1.223,-1.852 0.66,-2.034 0.098,-2.217 -1.184,-2.13 -1.366,-1.568 -1.549,-1.006 -0.562,-0.182 0,0" id="path42" style="fill:#ffe8b6;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g44" transform="translate(32.208,22.7251)">

                            <path d="m 0,0 c -0.38,-0.453 -1.055,-0.512 -1.507,-0.131 -0.452,0.38 -0.511,1.054 -0.131,1.507 0.381,0.452 1.514,1.058 1.966,0.677 C 0.781,1.673 0.381,0.453 0,0" id="path46" style="fill:#ffe8b6;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g48" transform="translate(27.7422,27.9761)">

                            <path d="M 0,0 C -0.498,0.317 -0.645,0.979 -0.326,1.477 -0.008,1.975 0.653,2.121 1.151,1.802 1.649,1.484 2.396,0.439 2.078,-0.059 1.76,-0.557 0.498,-0.319 0,0" id="path50" style="fill:#ffe8b6;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g52" transform="translate(12.7422,20.9766)">

                            <path d="M 0,0 C -0.498,0.317 -0.645,0.979 -0.326,1.476 -0.008,1.974 0.653,2.12 1.151,1.802 1.649,1.483 2.396,0.438 2.078,-0.059 1.76,-0.558 0.498,-0.319 0,0" id="path54" style="fill:#ffe8b6;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g56" transform="translate(16.9395,27.5859)">

                            <path d="M 0,0 C 0.335,0.486 1.001,0.609 1.487,0.273 1.974,-0.063 2.096,-0.729 1.76,-1.215 1.424,-1.701 0.353,-2.411 -0.133,-2.075 -0.62,-1.739 -0.336,-0.486 0,0" id="path58" style="fill:#ffe8b6;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g60" transform="translate(23.7422,20.9766)">

                            <path d="M 0,0 C -0.498,0.316 -0.645,0.979 -0.326,1.476 -0.008,1.974 0.653,2.12 1.151,1.802 1.649,1.483 2.396,0.438 2.078,-0.059 1.76,-0.558 0.498,-0.319 0,0" id="path62" style="fill:#ffe8b6;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            <g id="g64" transform="translate(6.0576,26.6646)">

                            <path d="M 0,0 C 0.394,0.44 1.07,0.478 1.51,0.084 1.95,-0.311 1.988,-0.986 1.593,-1.427 1.199,-1.867 0.047,-2.436 -0.392,-2.042 -0.833,-1.647 -0.395,-0.44 0,0" id="path66" style="fill:#ffe8b6;fill-opacity:1;fill-rule:nonzero;stroke:none"/>

                            </g>

                            </g>

                            </g>

                            </g>

                            </svg>
                            </span>
                            <span class="sr-only">Complete</span>
                        </div>
                        <span>Lanches</span>
                        <button class="label-add" id="adicionarSelectBtn-Lanches">+</button>
                    </div>
                    <select name="select_lanches[]" class="select_lanches select_refeicao" data-tabela="pratos_lanches">
                    <option value=""></option>
                    <?php
                        $sql = "SELECT nome, calorias FROM pratos_lanches";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $nome = $row['nome'];
                                $calorias = $row['calorias'];

                                echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
                            }
                        } else {
                            echo "<option value=''>Nenhum prato encontrado</option>";
                        }
                    ?>
                    </select>
                    </label>
                    <div class="informacoes-detalhadas" id="informacoes-detalhadas-lanches"></div>
                    <label id="montar-salada_box" for="select_salada">
                    <div class="faixa-box">
                        <div id="progress-circleFive" class="progress-circle progress-circle-five" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                            <span class="p-h"></span><span class="p-f"></span>
                            <span id="progress">
                            <svg height="800px" width="800px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve">
                            <path style="fill:#F9EBCF;" d="M141.122,258.84c-24.234-24.109-24.234-63.341,0-87.45c5.516-5.49,14.46-5.49,19.976,0l67.925,67.574
                                c5.517,5.491,5.516,14.389,0,19.877C204.789,282.949,165.355,282.951,141.122,258.84z"/>
                            <path style="fill:#FFCC60;" d="M172.088,187.287c-11.311,11.254-11.309,29.494,0,40.746c11.308,11.25,29.645,11.25,40.953,0
                                c0.847-0.843,1.61-1.736,2.33-2.653l-40.619-40.41C173.832,185.689,172.934,186.445,172.088,187.287z"/>
                            <path style="fill:#78B591;" d="M154.064,258.777c-7.612-7.651-20.195-8.746-34.01-4.306c4.42-13.888,3.331-26.535-4.284-34.191
                                c-8.561-8.604-23.409-8.916-39.227-2.383c-14.566-10.17-34.72-8.741-47.703,4.309c-12.984,13.052-14.406,33.312-4.288,47.957
                                c-6.499,15.901-6.189,30.827,2.373,39.433c7.613,7.652,20.196,8.747,34.011,4.305c-4.418,13.889-3.33,26.538,4.284,34.191
                                c7.613,7.653,20.196,8.747,34.012,4.306c-4.419,13.888-3.33,26.536,4.285,34.192c14.17,14.244,45.545,5.8,70.078-18.866
                                c24.534-24.664,32.936-56.204,18.766-70.447c-7.613-7.655-20.196-8.75-34.012-4.308
                                C162.768,279.081,161.678,266.432,154.064,258.777z"/>
                            <path style="fill:#619376;" d="M125.853,327.814c-2.076,0-4.151-0.794-5.731-2.382l-68.245-68.604
                                c-3.148-3.165-3.135-8.284,0.03-11.432c3.166-3.148,8.285-3.134,11.432,0.03l68.246,68.604c3.148,3.165,3.135,8.283-0.03,11.432
                                C129.977,327.03,127.915,327.814,125.853,327.814z"/>
                            <path style="fill:#EF645E;" d="M187.991,296.659c-13.914,27.067-47.196,37.655-74.191,23.602c-6.144-3.201-8.559-10.789-5.391-16.95
                                l38.995-75.868c3.168-6.163,10.718-8.563,16.863-5.365C191.261,236.133,201.905,269.592,187.991,296.659z"/>
                            <g>
                                <path style="fill:#C14616;" d="M131.722,323.54c-1.258,0-2.535-0.295-3.728-0.916l-1.113-0.581
                                    c-3.96-2.064-5.497-6.945-3.434-10.906c2.064-3.959,6.945-5.496,10.906-3.434l1.113,0.58c3.96,2.064,5.497,6.945,3.434,10.907
                                    C137.458,321.956,134.641,323.54,131.722,323.54z"/>
                                <path style="fill:#C14616;" d="M169.589,248.496c-1.242,0-2.503-0.287-3.684-0.893c-3.972-2.039-5.54-6.911-3.501-10.885
                                    l0.573-1.115c2.039-3.971,6.909-5.539,10.884-3.501c3.972,2.039,5.54,6.911,3.5,10.885l-0.573,1.115
                                    C175.356,246.893,172.524,248.496,169.589,248.496z"/>
                                <path style="fill:#C14616;" d="M151.553,304.163c-1.255,0-2.529-0.294-3.721-0.912l-1.112-0.579
                                    c-3.961-2.06-5.505-6.94-3.445-10.901c2.058-3.962,6.937-5.506,10.901-3.446l1.112,0.578c3.962,2.059,5.505,6.94,3.446,10.901
                                    C157.294,302.574,154.474,304.163,151.553,304.163z"/>
                                <path style="fill:#C14616;" d="M166.431,277.965c-1.255,0-2.53-0.294-3.721-0.912l-1.112-0.579
                                    c-3.962-2.058-5.505-6.94-3.446-10.901c2.059-3.961,6.937-5.505,10.901-3.446l1.112,0.578c3.962,2.059,5.505,6.94,3.446,10.901
                                    C172.171,276.376,169.351,277.965,166.431,277.965z"/>
                            </g>
                            <ellipse style="fill:#EF645E;" cx="374.45" cy="239.574" rx="37.602" ry="37.409"/>
                            <path style="fill:#78B591;" d="M453.527,373.92c7.9-7.859,9.03-20.849,4.445-35.112c14.336,4.564,27.391,3.439,35.289-4.419
                                c8.885-8.838,9.206-24.164,2.464-40.495c10.496-15.037,9.022-35.843-4.449-49.245c-13.471-13.402-34.384-14.87-49.498-4.426
                                c-16.415-6.709-31.819-6.389-40.702,2.449c-7.9,7.859-9.031,20.849-4.444,35.113c-14.338-4.562-27.392-3.439-35.292,4.42
                                c-7.9,7.86-9.029,20.849-4.445,35.111c-14.335-4.56-27.39-3.437-35.29,4.423c-14.704,14.629-5.986,47.018,19.471,72.342
                                c25.457,25.325,58.014,34.001,72.715,19.372c7.9-7.86,9.03-20.847,4.444-35.111C432.571,382.904,445.626,381.778,453.527,373.92z"/>
                            <path style="fill:#5B8C6F;" d="M390.615,353.323c-2.189,0-4.378-0.838-6.045-2.513c-3.321-3.337-3.307-8.736,0.031-12.057
                                l70.812-70.45c3.336-3.323,8.734-3.307,12.057,0.03c3.321,3.337,3.307,8.736-0.031,12.058l-70.811,70.449
                                C394.965,352.495,392.789,353.323,390.615,353.323z"/>
                            <ellipse style="fill:#FFAB5F;" cx="110.342" cy="330.909" rx="37.603" ry="37.409"/>
                            <path style="fill:#A5BC79;" d="M355.168,226.985c-8.051-8.011-21.359-9.156-35.97-4.508c4.675-14.537,3.523-27.774-4.53-35.784
                                c-9.053-9.007-24.753-9.335-41.483-2.497c-15.404-10.645-36.718-9.148-50.448,4.512c-13.73,13.658-15.234,34.864-4.535,50.19
                                c-6.872,16.644-6.544,32.263,2.51,41.271c8.052,8.009,21.358,9.155,35.969,4.506c-4.674,14.537-3.521,27.775,4.53,35.786
                                c8.052,8.009,21.359,9.155,35.97,4.507c-4.674,14.538-3.522,27.777,4.531,35.786c14.984,14.91,48.166,6.07,74.109-19.742
                                c25.945-25.815,34.831-58.828,19.846-73.733c-8.052-8.011-21.358-9.156-35.97-4.508
                                C364.372,248.232,363.218,234.994,355.168,226.985z"/>
                            <path style="fill:#EF645E;" d="M228.338,120.844c-21.576,21.465-56.684,21.465-78.259-0.001c-4.911-4.886-4.911-12.808,0-17.692
                                l60.471-60.164c4.913-4.888,12.876-4.887,17.786,0C249.912,64.452,249.914,99.378,228.338,120.844z"/>
                            <ellipse style="fill:#FFAB5F;" cx="317.858" cy="121.699" rx="26.543" ry="26.405"/>
                            <path style="fill:#C14616;" d="M377.851,18.631c3.675,3.658,3.675,9.586,0,13.243l-15.972,15.891c-3.676,3.656-9.634,3.655-13.311,0
                                l-15.971-15.891c-3.676-3.657-3.676-9.585,0-13.243l15.971-15.89c3.677-3.656,9.635-3.655,13.311,0L377.851,18.631z"/>
                            <path style="fill:#A5BC79;" d="M100.437,138.606c2.972,2.956,2.972,7.749,0,10.703l-12.909,12.844c-2.97,2.955-7.786,2.953-10.756,0
                                l-12.908-12.844c-2.971-2.954-2.971-7.747,0-10.703l12.909-12.84c2.971-2.956,7.787-2.955,10.756,0L100.437,138.606z"/>
                            <path style="fill:#C14616;" d="M436.463,162.832c2.971,2.956,2.971,7.747,0,10.702l-12.909,12.843c-2.97,2.956-7.786,2.954-10.756,0
                                l-12.909-12.843c-2.971-2.955-2.971-7.746,0-10.702l12.909-12.841c2.972-2.956,7.788-2.955,10.756,0L436.463,162.832z"/>
                            <path style="fill:#899B62;" d="M325.332,298.862c-2.063,0-4.124-0.785-5.702-2.354l-72.171-71.803
                                c-3.165-3.148-3.179-8.267-0.029-11.432c3.149-3.164,8.267-3.178,11.432-0.028l72.171,71.803c3.165,3.149,3.179,8.267,0.029,11.432
                                C329.484,298.067,327.409,298.862,325.332,298.862z"/>
                            <path style="fill:#EF645E;" d="M79.887,330.835c4.611,4.588,4.611,12.025,0,16.612L59.851,367.38
                                c-4.611,4.588-12.086,4.586-16.696,0l-20.036-19.932c-4.61-4.588-4.61-12.025,0-16.612l20.036-19.934
                                c4.612-4.59,12.086-4.586,16.696,0L79.887,330.835z"/>
                            <path style="fill:#C14616;" d="M215.765,341.953c-21.576,21.465-56.683,21.465-78.259,0c-4.911-4.886-4.911-12.808,0-17.693
                                l60.471-60.164c4.912-4.887,12.876-4.886,17.786,0C237.339,285.561,237.343,320.49,215.765,341.953z"/>
                            <g>
                                <ellipse style="fill:#FFAB5F;" cx="316.061" cy="300.481" rx="32.285" ry="32.12"/>
                                <ellipse style="fill:#FFAB5F;" cx="453.162" cy="342.497" rx="26.541" ry="26.405"/>
                            </g>
                            <path style="fill:#EF645E;" d="M386.53,323.113c5.519,5.491,5.519,14.393,0,19.885l-23.985,23.86c-5.518,5.492-14.467,5.49-19.987,0
                                l-23.984-23.86c-5.518-5.492-5.518-14.395,0-19.885l23.984-23.862c5.521-5.49,14.469-5.488,19.987,0L386.53,323.113z"/>
                            <g>
                                <path style="fill:#C14616;" d="M168.717,129.777c-2.062,0-4.122-0.783-5.7-2.35l-0.889-0.885
                                    c-3.166-3.148-3.182-8.266-0.033-11.432c3.147-3.166,8.266-3.181,11.432-0.034l0.889,0.885c3.166,3.148,3.182,8.266,0.033,11.432
                                    C172.87,128.981,170.794,129.777,168.717,129.777z"/>
                                <path style="fill:#C14616;" d="M227.855,70.057c-2.075,0-4.15-0.794-5.729-2.381c-3.149-3.165-3.138-8.283,0.027-11.432l0.89-0.885
                                    c3.163-3.152,8.282-3.139,11.432,0.026c3.149,3.165,3.138,8.283-0.027,11.432l-0.89,0.885
                                    C231.981,69.272,229.918,70.057,227.855,70.057z"/>
                                <path style="fill:#C14616;" d="M193.617,117.391c-2.062,0-4.122-0.784-5.7-2.351l-0.889-0.884
                                    c-3.166-3.149-3.182-8.266-0.033-11.432c3.147-3.166,8.266-3.182,11.432-0.034l0.889,0.884c3.166,3.149,3.182,8.266,0.033,11.432
                                    C197.77,116.595,195.694,117.391,193.617,117.391z"/>
                                <path style="fill:#C14616;" d="M215.849,97.042c-2.065,0-4.128-0.785-5.706-2.357l-0.89-0.887
                                    c-3.163-3.151-3.171-8.269-0.02-11.432c3.15-3.163,8.269-3.172,11.432-0.021l0.889,0.887c3.163,3.152,3.172,8.269,0.021,11.432
                                    C219.996,96.249,217.922,97.042,215.849,97.042z"/>
                            </g>
                            <g>
                                <path style="fill:#A03615;" d="M156.146,350.885c-2.062,0-4.122-0.783-5.7-2.35l-0.89-0.885c-3.166-3.148-3.181-8.265-0.033-11.432
                                    c3.147-3.165,8.266-3.181,11.432-0.034l0.889,0.885c3.166,3.148,3.182,8.266,0.033,11.432
                                    C160.299,350.091,158.222,350.885,156.146,350.885z"/>
                                <path style="fill:#A03615;" d="M215.283,291.165c-2.075,0-4.15-0.794-5.73-2.381c-3.149-3.165-3.137-8.283,0.027-11.432
                                    l0.889-0.885c3.163-3.152,8.282-3.14,11.432,0.026c3.149,3.165,3.137,8.283-0.027,11.432l-0.89,0.885
                                    C219.409,290.38,217.345,291.165,215.283,291.165z"/>
                                <path style="fill:#A03615;" d="M181.046,338.5c-2.063,0-4.125-0.785-5.703-2.355l-0.89-0.885c-3.165-3.15-3.176-8.267-0.027-11.432
                                    c3.15-3.162,8.268-3.176,11.432-0.026l0.889,0.885c3.165,3.15,3.178,8.267,0.027,11.432
                                    C185.196,337.705,183.121,338.5,181.046,338.5z"/>
                                <path style="fill:#A03615;" d="M203.278,318.148c-2.063,0-4.124-0.783-5.701-2.352l-0.889-0.885
                                    c-3.166-3.148-3.179-8.267-0.03-11.432c3.148-3.167,8.267-3.181,11.432-0.03l0.889,0.885c3.166,3.148,3.179,8.267,0.03,11.432
                                    C207.429,317.355,205.353,318.148,203.278,318.148z"/>
                            </g>
                            <path style="fill:#FFFFFF;" d="M236.911,356.727c-24.234-24.111-24.234-63.34,0-87.452c5.516-5.488,14.46-5.488,19.976,0
                                l67.925,67.576c5.517,5.49,5.516,14.389,0,19.876C300.578,380.837,261.144,380.838,236.911,356.727z"/>
                            <path style="fill:#FFCC60;" d="M267.877,285.174c-11.311,11.255-11.309,29.495,0,40.747c11.307,11.25,29.645,11.25,40.953,0
                                c0.846-0.844,1.608-1.736,2.33-2.654l-40.62-40.409C269.62,283.575,268.722,284.333,267.877,285.174z"/>
                            <path style="fill:#F9EBCF;" d="M152.485,482.181c-34.73,0-68.307-12.408-94.543-34.939c-26.064-22.381-43.261-53.295-48.424-87.05
                                c-0.553-3.604,0.506-7.27,2.895-10.036c2.39-2.767,5.872-4.358,9.538-4.358h462.296c3.667,0,7.148,1.59,9.538,4.358
                                c2.389,2.766,3.446,6.432,2.895,10.036c-5.163,33.755-22.36,64.67-48.424,87.05c-26.237,22.531-59.815,34.939-94.544,34.939H152.485
                                z"/>
                            <g>
                                <path style="fill:#DDB690;" d="M132.451,372.763H12.027c1.354,5.487,3.039,10.872,5.024,16.135h115.4
                                    c4.456,0,8.068-3.613,8.068-8.068C140.518,376.375,136.907,372.763,132.451,372.763z"/>
                                <path style="fill:#DDB690;" d="M104.824,410.3h-77.61c3.257,5.607,6.893,11,10.892,16.135h66.718c4.455,0,8.068-3.61,8.068-8.068
                                    C112.892,413.912,109.28,410.3,104.824,410.3z"/>
                            </g>
                            <path style="opacity:0.1;enable-background:new    ;" d="M54.652,360.192c-0.553-3.604,0.506-7.27,2.895-10.036
                                c2.39-2.767,5.872-4.358,9.538-4.358H21.952c-3.667,0-7.149,1.59-9.538,4.358c-2.39,2.766-3.447,6.432-2.895,10.036
                                c5.163,33.755,22.36,64.67,48.424,87.05c26.237,22.531,59.814,34.939,94.543,34.939h45.133c-34.73,0-68.306-12.408-94.543-34.939
                                C77.011,424.861,59.814,393.946,54.652,360.192z"/>
                            <path style="fill:#A5BC79;" d="M390.272,501.322c0,5.895-4.779,10.678-10.675,10.678H126.6c-5.895,0-10.675-4.781-10.675-10.678
                                v-9.61c0-5.897,4.779-10.678,10.675-10.678h252.997c5.895,0,10.675,4.78,10.675,10.678V501.322z"/>
                            <path style="opacity:0.1;enable-background:new    ;" d="M160.899,501.322v-9.61c0-5.897,4.779-10.678,10.675-10.678h-44.972
                                c-5.895,0-10.675,4.78-10.675,10.678v9.61c0,5.895,4.779,10.678,10.675,10.678h44.972C165.678,512,160.899,507.218,160.899,501.322z
                                "/>
                            </svg>
                            </span>
                            <span class="sr-only">Complete</span>
                        </div>
                        <span>Saladas</span>
                        <button class="label-add" id="adicionarSelectBtn-Salada">+</button>
                    </div>
                    <select name="select_salada[]" class="select_salada select_refeicao"  data-tabela="pratos_salada">
                    <option value=""></option>
                    <?php
                        $sql = "SELECT nome, calorias FROM pratos_salada";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $nome = $row['nome'];
                                $calorias = $row['calorias'];

                                echo "<option value='$nome' data-calorias='$calorias'>$nome</option>";
                            }
                        } else {
                            echo "<option value=''>Nenhum prato encontrado</option>";
                        }
                    ?>
                    </select>
                    </label>
                    <div class="informacoes-detalhadas" id="informacoes-detalhadas-salada"></div>
                </div>
                <button type="submit" id="CadEvent" value="CadEvent" class="btn btn-success">Salvar</button>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-fechar" data-bs-dismiss="modal">Fechar</button>
        </div>
    </div>
    </div>
</div>
<!-- Fim do Modal Cadastrar -->

<script src="../static/js/tabs.js"></script>
<script src="../static/js/mascara-datahora.js"></script>

<script src="../static/js/daygrid/index.global.min.js"></script>
<script src="../static/js/dist/index.global.js"></script>
<script src="../static/js/dist/pt-br.global.min.js"></script>
<script src="../static/js/interaction/index.global.min.js"></script>

<script>

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        headerToolbar: {
            left: 'title',
            center: '',
            right: 'dayGridMonth,listMonth prev,next,today',
        },
        initialView: 'dayGridMonth',
        locale: 'pt-br',
        navLinks: true, // can click day/week names to navigate views
        editable: false,
        dayMaxEvents: true, // allow "more" link when too many events
        longPressDelay: 0,
        events: 'php-logic/list-events.php',
        extraParams: function() {
            return {
                cachebuster: new Date().valueOf()
            };
        },
        eventClick: function(info){
            $('#apagar-refeicao-a').attr("href", "php-logic/apagar_refeicao.php?id=" + info.event.id);
            info.jsEvent.preventDefault();

            $('#visualizar #title').text(info.event.title); //info.event.(parametro do db)

            let cafeDaManhaHTML = '';
            let almocoHTML = '';
            let almoco_montarHTML = '';
            let jantaHTML = '';
            let janta_montarHTML = '';
            let lanchesHTML = '';
            let saladaHTML = '';
            info.event.extendedProps.cafe_da_manha.forEach(function(prato) {
                if(prato != ""){
                    cafeDaManhaHTML += '<p>' + prato + '</p>';
                }
            });
            info.event.extendedProps.almoco.forEach(function(prato) {
                if(prato != ""){
                    almocoHTML += '<p>' + prato + '</p>';
                }
            });
            info.event.extendedProps.almoco_montar.forEach(function(prato) {
                if(prato != ""){
                    almoco_montarHTML += '<p>' + prato + '</p>';
                }
            });
            info.event.extendedProps.janta.forEach(function(prato) {
                if(prato != ""){
                    jantaHTML += '<p>' + prato + '</p>';
                }
            });
            info.event.extendedProps.janta_montar.forEach(function(prato) {
                if(prato != ""){
                    janta_montarHTML += '<p>' + prato + '</p>';
                }
            });
            info.event.extendedProps.lanches.forEach(function(prato) {
                if(prato != ""){
                    lanchesHTML += '<p>' + prato + '</p>';
                }
            });
            info.event.extendedProps.salada.forEach(function(prato) {
                if(prato != ""){
                    saladaHTML += '<p>' + prato + '</p>';
                }
            });

            $('#visualizar #cafe_da_manha').html(cafeDaManhaHTML);
            $('#visualizar #almoco').html(almocoHTML);
            $('#visualizar #almoco_montar').html(almoco_montarHTML);
            $('#visualizar #janta').html(jantaHTML);
            $('#visualizar #janta_montar').html(janta_montarHTML);
            $('#visualizar #lanches').html(lanchesHTML);
            $('#visualizar #salada').html(saladaHTML);

            $('#visualizar #calorias').text(info.event.extendedProps.calorias);
            $('#visualizar #carboidratos').text(info.event.extendedProps.carboidratos);
            $('#visualizar #proteinas').text(info.event.extendedProps.proteinas);
            $('#visualizar #gorduras').text(info.event.extendedProps.gorduras);

            $('#visualizar #start').text(info.event.start.toLocaleDateString());
            $('#visualizar').modal('show');
        },
        selectable: true,
        select: function(info) {
            //converte as datas para objetos Date
            let start = new Date(info.start);
            let end = new Date(info.end);

            //diferença em milissegundos entre os dias
            let diff = end - start;


            if (diff === 86400000) { //1 dia em milissegundos
                $('#cadastrar #start').val(info.start.toLocaleDateString());
                $('#cadastrar #end').val(info.end.toLocaleDateString());
                $('#cadastrar').modal('show');
            }
        }
    });

    calendar.render();
});
$(document).ready(function () {
    $("#addevent").on("submit", function (event) {
        event.preventDefault();
        $.ajax({    
            method: "POST",
            url: "php-logic/cad_event.php",
            data: new FormData(this),
            contentType: false,
            processData: false,
            success: function (retorna) {
                if (retorna['sit']) {
                    location.reload();
                } else {
                    $("#msg-cad").html(retorna['msg']);
                }
            }
        });
    });
    
    $('#cancel-apagar-refeicao').click(function() {
        $('#confirmationModal').modal('hide');
    });
});
</script>

<script>
    //mensagem de 3 segundos ao cadastrar com sucesso no calendário

    //onde será a mensagem
    const mensagem = document.getElementById('msg-cad-calend');

    //remover a classe .show para esconder a mensagem
    function ocultarMensagem() {
        const mensagem = document.getElementById('msg-cad-calend');
        mensagem.classList.remove('show');
    }

    //adicionar a classe show, após 3 segundos ocultá-la
    if (mensagem) {
        mensagem.classList.add('show');
        setTimeout(ocultarMensagem, 3000);
    }
</script>

<script>
    //semi circulo para as calorias no calendário cadastro baseada no input range
    const semiCircleDiv = document.querySelector(".semi-circle");
    semiCircleDiv.style.transform = "rotate(" + 0 + "deg)";

    function semiCircleCalorias(atual_calorias, ){
        let total_calorias = document.getElementById('total_calorias').textContent;

        let caloriasPer100 = porcentagem180(atual_calorias, total_calorias);

        function porcentagem180(atual, total){
            return (atual / total) * 180;
        }

        let degrees = parseInt(caloriasPer100);
        if (degrees > 180) {
            degrees = 180;
        }
        semiCircleDiv.style.transform = "rotate(" + degrees + "deg)";
    }

    //barra de progresso dos macronutrientes
    const barraProgressCarboidratos = document.querySelector('#progresso-carboidratos');
    const barraProgressProteinas = document.querySelector('#progresso-proteinas');
    const barraProgressGorduras = document.querySelector('#progresso-gorduras');

    barraProgressCarboidratos.style.width = 0 + "%";
    barraProgressProteinas.style.width = 0 + "%";
    barraProgressGorduras.style.width = 0 + "%";

    function progressBarMacronutrientes(carboidratos, proteinas, gorduras){
        let total_carboidratos = document.getElementById('total_carboidratos').textContent;
        let total_proteinas = document.getElementById('total_proteinas').textContent;
        let total_gorduras = document.getElementById('total_gorduras').textContent;

        let per100Carboidratos = porcentagem100(carboidratos, total_carboidratos);
        let per100Proteinas = porcentagem100(proteinas, total_proteinas);
        let per100Gorduras = porcentagem100(gorduras, total_gorduras);

        function porcentagem100(atual, total){
            return (atual / total) * 100;
        }

        barraProgressCarboidratos.style.width = per100Carboidratos + "%";
        barraProgressProteinas.style.width = per100Proteinas + "%";
        barraProgressGorduras.style.width = per100Gorduras + "%";
    }
</script>

<script>
    //Cor do calendário Cadastrar
    function defaultColor(selectElement) {
        let defaultColor = selectElement.options[0].style.color;
        selectElement.style.borderColor = defaultColor;
        selectElement.style.color = defaultColor;
    }
    function changeSelectStyle(selectElement) {
        let corSelecionada = selectElement.value;
        selectElement.style.borderColor = corSelecionada;
        selectElement.style.color = corSelecionada;
    }
    window.onload = function() {
        const selectElement = document.getElementById('color');
        defaultColor(selectElement);
    };
</script>
<script>
    //circulo para as refeições codepen
    const progress_styleOne = document.getElementById('progress-styleOne');
    const progress_styleTwo = document.getElementById('progress-styleTwo');
    const progress_styleThree = document.getElementById('progress-styleThree');
    const progress_styleFour = document.getElementById('progress-styleFour');
    const progress_styleFive = document.getElementById('progress-styleFive');
    
    const caloriasCafe = parseInt(document.getElementById('calorias-cafe').textContent);
    const caloriasAlmoco = parseInt(document.getElementById('calorias-almoco').textContent);
    const caloriasJanta = parseInt(document.getElementById('calorias-janta').textContent);
    const caloriasLanches = parseInt(document.getElementById('calorias-lanches').textContent);
    const caloriasSalada = parseInt(document.getElementById('calorias-salada').textContent);
    
    let progress_classOne = document.querySelector('.progress-circle-one');
    let progress_classTwo = document.querySelector('.progress-circle-two');
    let progress_classThree = document.querySelector('.progress-circle-three');
    let progress_classFour = document.querySelector('.progress-circle-four');
    let progress_classFive = document.querySelector('.progress-circle-five');

    let shadowfix = "0";

    function getCaloriasRefeicoes(){
        let atualCaloriasCafe = 0;
        let atualCaloriasAlmoco = 0;
        let atualCaloriasJanta = 0;
        let atualCaloriasLanches = 0;
        let atualCaloriasSalada = 0;

        let selectsCafe = document.querySelectorAll('.select_cafe_da_manha');
        let selectsAlmoco = document.querySelectorAll('.select_all_almocos');
        let selectsJanta = document.querySelectorAll('.select_all_jantas');
        let selectsLanches = document.querySelectorAll('.select_lanches');
        let selectsSalada = document.querySelectorAll('.select_salada');
        selectsCafe.forEach((select) => {
            let selectedOption = select.options[select.selectedIndex];
            if(selectedOption !== undefined){
                let caloriasPrato = parseFloat(selectedOption.getAttribute('data-calorias'));

                if (!isNaN(caloriasPrato)) {
                    atualCaloriasCafe += caloriasPrato;
                }
            }else{
                atualCaloriasCafe = 0;
            }
        });
        selectsAlmoco.forEach((select) => {
            let selectedOption = select.options[select.selectedIndex];
            if(selectedOption !== undefined){
                let caloriasPrato = parseFloat(selectedOption.getAttribute('data-calorias'));

                if (!isNaN(caloriasPrato)) {
                    atualCaloriasAlmoco += caloriasPrato;
                }
            }else{
                atualCaloriasAlmoco = 0;
            }
        });
        selectsJanta.forEach((select) => {
            let selectedOption = select.options[select.selectedIndex];
            if(selectedOption !== undefined){
                let caloriasPrato = parseFloat(selectedOption.getAttribute('data-calorias'));

                if (!isNaN(caloriasPrato)) {
                    atualCaloriasJanta += caloriasPrato;
                }
            }else{
                atualCaloriasJanta = 0;
            }
        });
        selectsLanches.forEach((select) => {
            let selectedOption = select.options[select.selectedIndex];
            if(selectedOption !== undefined){
                let caloriasPrato = parseFloat(selectedOption.getAttribute('data-calorias'));

                if (!isNaN(caloriasPrato)) {
                    atualCaloriasLanches += caloriasPrato;
                }
            }else{
                atualCaloriasLanches = 0;
            }
        });
        selectsSalada.forEach((select) => {
            let selectedOption = select.options[select.selectedIndex];
            if(selectedOption !== undefined){
                let caloriasPrato = parseFloat(selectedOption.getAttribute('data-calorias'));

                if (!isNaN(caloriasPrato)) {
                    atualCaloriasSalada += caloriasPrato;
                }
            }else{
                atualCaloriasSalada = 0;
            }
        });


        //porcentagem do progresso do circulo
        let per100Cafe = porcentagem100(atualCaloriasCafe, caloriasCafe);
        let per100Almoco = porcentagem100(atualCaloriasAlmoco, caloriasAlmoco);
        let per100Janta = porcentagem100(atualCaloriasJanta, caloriasJanta);
        let per100Lanches = porcentagem100(atualCaloriasLanches, caloriasLanches);
        let per100Salada = porcentagem100(atualCaloriasSalada, caloriasSalada);

        function porcentagem100(atual, total){
            let porcentagem = (atual / total) * 100;
            if(porcentagem > 100){
                porcentagem = 100;
            }
            return porcentagem;
        }
        let xvaluenowOne = parseInt(per100Cafe);
        let xvaluenowTwo = parseInt(per100Almoco);
        let xvaluenowThree = parseInt(per100Janta);
        let xvaluenowFour = parseInt(per100Lanches);
        let xvaluenowFive = parseInt(per100Salada);

        let rotatenumOne = 'rotate(' + xvaluenowOne * 1.8 + 'deg)';
        let rotatenumTwo = 'rotate(' + xvaluenowTwo * 1.8 + 'deg)';
        let rotatenumThree = 'rotate(' + xvaluenowThree * 1.8 + 'deg)';
        let rotatenumFour = 'rotate(' + xvaluenowFour * 1.8 + 'deg)';
        let rotatenumFive = 'rotate(' + xvaluenowFive * 1.8 + 'deg)';

        if (xvaluenowOne == 0 || xvaluenowTwo == 0 || xvaluenowThree == 0 || xvaluenowFour == 0 || xvaluenowFive == 0 ) {
            let shadowfix = "0";
        }
        else {
            let shadowfix = "1px";
        }

        if (progress_classOne) {
            progress_styleOne.innerHTML = " \
            .progress-circle-one .p-h:before, .progress-circle-one .p-f, .progress-circle-one .p-f:before{ \
            -moz-transform: " + rotatenumOne + "; \
            -webkit-transform: " + rotatenumOne + "; \
            -o-transform: " + rotatenumOne + "; \
            -ms-transform: " + rotatenumOne + "; \
            transform: " + rotatenumOne + "; \
            -webkit-box-shadow: 0 0 0 " + shadowfix + " #828282; \
            box-shadow: 0 0 0 " + shadowfix + " #828282;}\
            \ ";
        }
        if (progress_classTwo) {
            progress_styleTwo.innerHTML = " \
            .progress-circle-two .p-h:before, .progress-circle-two .p-f, .progress-circle-two .p-f:before{ \
            -moz-transform: " + rotatenumTwo + "; \
            -webkit-transform: " + rotatenumTwo + "; \
            -o-transform: " + rotatenumTwo + "; \
            -ms-transform: " + rotatenumTwo + "; \
            transform: " + rotatenumTwo + "; \
            -webkit-box-shadow: 0 0 0 " + shadowfix + " #828282; \
            box-shadow: 0 0 0 " + shadowfix + " #828282;}\
            \ ";
        }
        if (progress_classThree) {
            progress_styleThree.innerHTML = " \
            .progress-circle-three .p-h:before, .progress-circle-three .p-f, .progress-circle-three .p-f:before{ \
            -moz-transform: " + rotatenumThree + "; \
            -webkit-transform: " + rotatenumThree + "; \
            -o-transform: " + rotatenumThree + "; \
            -ms-transform: " + rotatenumThree + "; \
            transform: " + rotatenumThree + "; \
            -webkit-box-shadow: 0 0 0 " + shadowfix + " #828282; \
            box-shadow: 0 0 0 " + shadowfix + " #828282;}\
            \ ";
        }
        if (progress_classFour) {
            progress_styleFour.innerHTML = " \
            .progress-circle-four .p-h:before, .progress-circle-four .p-f, .progress-circle-four .p-f:before{ \
            -moz-transform: " + rotatenumFour + "; \
            -webkit-transform: " + rotatenumFour + "; \
            -o-transform: " + rotatenumFour + "; \
            -ms-transform: " + rotatenumFour + "; \
            transform: " + rotatenumFour + "; \
            -webkit-box-shadow: 0 0 0 " + shadowfix + " #828282; \
            box-shadow: 0 0 0 " + shadowfix + " #828282;}\
            \ ";
        }
        if (progress_classFive) {
            progress_styleFive.innerHTML = " \
            .progress-circle-five .p-h:before, .progress-circle-five .p-f, .progress-circle-five .p-f:before{ \
            -moz-transform: " + rotatenumFive + "; \
            -webkit-transform: " + rotatenumFive + "; \
            -o-transform: " + rotatenumFive + "; \
            -ms-transform: " + rotatenumFive + "; \
            transform: " + rotatenumFive + "; \
            -webkit-box-shadow: 0 0 0 " + shadowfix + " #828282; \
            box-shadow: 0 0 0 " + shadowfix + " #828282;}\
            \ ";
        }
    }
</script>


<script src="../static/js/add-select-cafe.js"></script>
<script src="../static/js/add-select-lanches.js"></script>
<script src="../static/js/add-select-salada.js"></script>
<script src="../static/js/add-select-pratos.js"></script>
<script src="../static/js/add-select-j-pratos.js"></script>
<script src="../static/js/add-select-montar-pratos.js"></script>
<script src="../static/js/add-select-j-montar-pratos.js"></script>

<script>
    //Selects Cadastrar calendário
    atualizarSelectsCafeDaManha();
    atualizarSelectsAlmoco();
    atualizarSelectsAlmocoMontar();
    atualizarSelectsJanta();
    atualizarSelectsJantaMontar();
    atualizarSelectsLanches();
    atualizarSelectsSalada();
    
    //checar se o select já tem o event listener a partir da classe "has-change-event" adicionada a ele na criação
    function hasChangeEventListener(element) {
        if (element && element.classList) {
            return element.classList.contains('has-change-event');
        }
        return false;
    }

    //Caso não tenha o eventListener (no caso dos criados posteriormente), cria-lo com parâmetros
    //Serve para não duplicar event listeners a cada criação de um novo
    function addChangeEventListener(element, informacoesDetalhadas, tabela) {
        if (element && element.classList) {
            element.addEventListener('change', function () {
                let opcaoSelecionada = this.options[this.selectedIndex].value;

                if (opcaoSelecionada.value === "") {
                    informacoesDetalhadas.innerHTML = ""; // Limpa as informações se nada estiver selecionado
                } else {
                    //ao 'change', buscar os detalhes dessa opção passando o 'prato', a div que exibirá as informações e a 'tabela do prato'
                    buscarDetalhesOpcao(opcaoSelecionada, informacoesDetalhadas, tabela);
                    //ao 'change' calcular os macronutrientes através de uma função criada
                    calcularMacronutrientesSelecionados();
                    getCaloriasRefeicoes();
                    atualizarMacronutrientesCadEvent();
                }
            });
            //adiciona a classe para checar se existe o event listener
            element.classList.add('has-change-event');
        }
    }
    // Café
    function atualizarSelectsCafeDaManha() {
        //seleciona os selects 'café'
        let selectsCafeDaManha = document.querySelectorAll('.select_cafe_da_manha');

        for (let i = 0; i < selectsCafeDaManha.length; i++) {
            //para cada um, checa se contém o event listener a partir da classe "has-change-event" e passa os parâmetros
            if (selectsCafeDaManha[i] && !hasChangeEventListener(selectsCafeDaManha[i])) {
                const informacoesDetalhadas = document.getElementById('informacoes-detalhadas-cafe');
                const tabela = "pratos_cafe_da_manha";
                addChangeEventListener(selectsCafeDaManha[i], informacoesDetalhadas, tabela);
            }
        };
    }
    // Almoço 1
    function atualizarSelectsAlmoco() {
        let selectsAlmoco = document.querySelectorAll('.select_almoco');

        for (let i = 0; i < selectsAlmoco.length; i++) {
            if (selectsAlmoco[i] && !hasChangeEventListener(selectsAlmoco[i])) {
                const informacoesDetalhadas = document.getElementById('informacoes-detalhadas-almoco-completo');
                const tabela = "pratos_almoco_e_janta";
                addChangeEventListener(selectsAlmoco[i], informacoesDetalhadas, tabela);
            }
        };
    }
    // Almoço 2
    function atualizarSelectsAlmocoMontar() {
        let selectsAlmocoMontar = document.querySelectorAll('.select_montar_almoco');

        for (let i = 0; i < selectsAlmocoMontar.length; i++) {
            if (selectsAlmocoMontar[i] && !hasChangeEventListener(selectsAlmocoMontar[i])) {
                const informacoesDetalhadas = document.getElementById('informacoes-detalhadas-almoco-montar');
                const tabela = "pratos_opcoes_separadas";
                addChangeEventListener(selectsAlmocoMontar[i], informacoesDetalhadas, tabela);
            }
        };
    }
    // Janta 1
    function atualizarSelectsJanta() {
        let selectsJanta = document.querySelectorAll('.select_janta');

        for (let i = 0; i < selectsJanta.length; i++) {
            if (selectsJanta[i] && !hasChangeEventListener(selectsJanta[i])) {
                const informacoesDetalhadas = document.getElementById('informacoes-detalhadas-janta-completa');
                const tabela = "pratos_almoco_e_janta";
                addChangeEventListener(selectsJanta[i], informacoesDetalhadas, tabela);
            }
        };
    }
    // Janta 2
    function atualizarSelectsJantaMontar() {
        let selectsJantaMontar = document.querySelectorAll('.select_montar_janta');

        for (let i = 0; i < selectsJantaMontar.length; i++) {
            if (selectsJantaMontar[i] && !hasChangeEventListener(selectsJantaMontar[i])) {
                const informacoesDetalhadas = document.getElementById('informacoes-detalhadas-janta-montar');
                const tabela = "pratos_opcoes_separadas";
                addChangeEventListener(selectsJantaMontar[i], informacoesDetalhadas, tabela);
            }
        };
    }
    // Lanches
    function atualizarSelectsLanches() {
        let selectsLanches = document.querySelectorAll('.select_lanches');

        for (let i = 0; i < selectsLanches.length; i++) {
            if (selectsLanches[i] && !hasChangeEventListener(selectsLanches[i])) {
                const informacoesDetalhadas = document.getElementById('informacoes-detalhadas-lanches');
                const tabela = "pratos_lanches";
                addChangeEventListener(selectsLanches[i], informacoesDetalhadas, tabela);
            }
        };
    }
    // Salada
    function atualizarSelectsSalada() {
        let selectsSalada = document.querySelectorAll('.select_salada');

        for (let i = 0; i < selectsSalada.length; i++) {
            if (selectsSalada[i] && !hasChangeEventListener(selectsSalada[i])) {
                const informacoesDetalhadas = document.getElementById('informacoes-detalhadas-salada');
                const tabela = "pratos_salada";
                addChangeEventListener(selectsSalada[i], informacoesDetalhadas, tabela);
            }
        };
    }

    // Função em ajax para buscar os detalhes das opções pelo php
    function buscarDetalhesOpcao(nomePrato, informacoesDetalhadas, tabela) {
        // Faça uma requisição AJAX para um script PHP que busca os detalhes do prato
        var xhr = new XMLHttpRequest();
        if(nomePrato !== ""){
            //busca a partir do nome e tabela do prato selecionado
            xhr.open("GET", "php-logic/detalhes_prato.php?nome=" + encodeURIComponent(nomePrato) + "&tabela=" + tabela, true);

            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    let detalhes = xhr.responseText;

                    informacoesDetalhadas.innerHTML = detalhes;
                }
            };

            xhr.send();
        }else{
            informacoesDetalhadas.innerHTML = "";
            //ao 'change' de um select vazio, calcular os macronutrientes
            totalCalorias = totalCarboidratos = totalProteinas = totalGorduras = 0;

            document.getElementById('atual_calorias').textContent = totalCalorias;
            document.getElementById('atual_carboidratos').textContent = totalCarboidratos;
            document.getElementById('atual_proteinas').textContent = totalProteinas;
            document.getElementById('atual_gorduras').textContent = totalGorduras;
            semiCircleCalorias(totalCalorias);
            progressBarMacronutrientes(totalCarboidratos, totalProteinas, totalGorduras);
        }
    }
    
</script>
<script>
    atualCaloriasInput = document.getElementById('atual_calorias_input');
    atualCarboidratosInput = document.getElementById('atual_carboidratos_input');
    atualProteinasInput = document.getElementById('atual_proteinas_input');
    atualGordurasInput = document.getElementById('atual_gorduras_input');
    function atualizarMacronutrientesCadEvent(){
        atualCaloriasInput.value = document.getElementById('atual_calorias').textContent;
        atualCarboidratosInput.value = document.getElementById('atual_carboidratos').textContent;
        atualProteinasInput.value = document.getElementById('atual_proteinas').textContent;
        atualGordurasInput.value = document.getElementById('atual_gorduras').textContent;
    }
</script>
<script>
    let totalCalorias = 0;
    let totalCarboidratos = 0;
    let totalProteinas = 0;
    let totalGorduras = 0;

    function calcularMacronutrientesSelecionados() {
        totalCalorias = totalCarboidratos = totalProteinas = totalGorduras = 0;

        let selectElements = [];
        // Selecionar elementos de cada classe separadamente e concatenar os resultados
        selectElements = selectElements.concat(Array.from(document.querySelectorAll('.select_cafe_da_manha')));
        selectElements = selectElements.concat(Array.from(document.querySelectorAll('.select_almoco')));
        selectElements = selectElements.concat(Array.from(document.querySelectorAll('.select_montar_almoco')));
        selectElements = selectElements.concat(Array.from(document.querySelectorAll('.select_janta')));
        selectElements = selectElements.concat(Array.from(document.querySelectorAll('.select_montar_janta')));
        selectElements = selectElements.concat(Array.from(document.querySelectorAll('.select_lanches')));
        selectElements = selectElements.concat(Array.from(document.querySelectorAll('.select_salada')));

        let selectsVazios = 0; //contador para selects vazios

        selectElements.forEach((selectElement) => {
            const selectedOption = selectElement.options[selectElement.selectedIndex];
            const nomePrato = selectedOption.value; //valor selecionado no select
            
            if(nomePrato != ""){
                const tabela = selectElement.dataset.tabela;

                // Fazer uma solicitação AJAX para obter os macronutrientes com base no nome do prato
                var xhr = new XMLHttpRequest();
                xhr.open("GET", "php-logic/detalhes_prato.php?nome=" + encodeURIComponent(nomePrato) + "&tabela=" + tabela, false);
                xhr.onreadystatechange = function () {
                    if (xhr.readyState === 4 && xhr.status === 200) {
                        let detalhes = xhr.responseText;
                        if (detalhes.trim() !== "Nenhum prato selecionado.") {
                            // Resolver o conflito entre JSON junto com HTML
                            // console.log('detalhes: ',detalhes); Quando clicado em erro unicode, puxa o home.php
                            let jsonPart = detalhes.substring(detalhes.indexOf('{'), detalhes.lastIndexOf('}') + 1);
                            // Analise o JSON para obter um objeto JavaScript
                            let detalhesObj = JSON.parse(jsonPart);

                            totalCalorias += parseInt(detalhesObj.totalCalorias);
                            totalCarboidratos += parseInt(detalhesObj.totalCarboidratos);
                            totalProteinas += parseInt(detalhesObj.totalProteinas);
                            totalGorduras += parseInt(detalhesObj.totalGorduras);

                            document.getElementById('atual_calorias').textContent = totalCalorias;
                            document.getElementById('atual_carboidratos').textContent = totalCarboidratos;
                            document.getElementById('atual_proteinas').textContent = totalProteinas;
                            document.getElementById('atual_gorduras').textContent = totalGorduras;
                            semiCircleCalorias(totalCalorias);
                            progressBarMacronutrientes(totalCarboidratos, totalProteinas, totalGorduras);
                        }else{
                            selectsVazios++;
                        }
                    }
                }
            xhr.send();
            }
        });
        //Caso todos os selects fiquem vazios, zerar as contagens
        if (selectsVazios === selectElements.length) {
            totalCalorias = totalCarboidratos = totalProteinas = totalGorduras = 0;

            document.getElementById('atual_calorias').textContent = totalCalorias;
            document.getElementById('atual_carboidratos').textContent = totalCarboidratos;
            document.getElementById('atual_proteinas').textContent = totalProteinas;
            document.getElementById('atual_gorduras').textContent = totalGorduras;
            semiCircleCalorias(totalCalorias);
            progressBarMacronutrientes(totalCarboidratos, totalProteinas, totalGorduras);
        }
    }
</script>

<script>
    //Preferências (alto, baixo)
    const allButtons = document.querySelectorAll('.preferencia-btn');

    allButtons.forEach(function(btn) {
        btn.addEventListener('click', function() {
            //limpar as opções de todos os selects
            const allSelects = document.querySelectorAll('select.select_refeicao');
            allSelects.forEach(function(select) {
                select.selectedIndex = -1;
            });
            //desabilitar todos os botões
            allButtons.forEach(function(disableBtn) {
                disableBtn.disabled = true;
                disableBtn.classList.remove('selected');
            });
            
            this.classList.add('selected'); //adicionar o .selected ao botão clicado

            let preferencia = this.getAttribute('data-preferencia'); //preferencia do botão, como o valor

            allSelects.forEach(function(select) {
                let tabela = select.getAttribute('data-tabela');

                $.ajax({
                    url: 'php-logic/get_pratos_preferencia.php',
                    method: 'POST',
                    data: { preferencia: preferencia, tabela: tabela },
                    success: function(data) {
                        select.selectedIndex = -1; //limpa as seleções anteriores no select atual

                        for (let i = 0; i < select.options.length; i++) {
                            let option = select.options[i];
                            if (option.value === data) {
                                option.selected = true;
                                break;
                            }
                        }

                        //aciona o evento 'change' no select
                        const event = new Event('change');
                        select.dispatchEvent(event);
                    },
                });
            });
            setTimeout(function() {
                const selectedButton = document.querySelector('.preferencia-btn.selected');
                allButtons.forEach(function(thisbtn) {
                    if (thisbtn !== selectedButton) { //se o botão não conter '.selected'
                        thisbtn.disabled = false; //não desabilitar ele
                    };
                });
            }, 1000);
        });
    });
</script>
<script>
    const limparBtns = document.querySelectorAll('.limpar-selecoes-btn');

    limparBtns.forEach(function(limparBtn) {
        limparBtn.addEventListener('click', function() {
            const allSelects = document.querySelectorAll('select.select_refeicao');

            allSelects.forEach(function(select) {
                select.selectedIndex = -1;
                // Disparar evento de change após limpar a seleção
                const event = new Event('change');
                select.dispatchEvent(event);
            });

            // Desabilitar todos os botões de preferência
            const allButtons = document.querySelectorAll('.preferencia-btn');
            allButtons.forEach(function(btn) {
                btn.disabled = false;
                btn.classList.remove('selected');
            });
            
            //ao clicar em 'limpar'
            document.getElementById('informacoes-detalhadas-cafe').innerHTML = "";
            document.getElementById('informacoes-detalhadas-almoco-completo').innerHTML = "";
            document.getElementById('informacoes-detalhadas-almoco-montar').innerHTML = "";
            document.getElementById('informacoes-detalhadas-janta-completa').innerHTML = "";
            document.getElementById('informacoes-detalhadas-janta-montar').innerHTML = "";
            document.getElementById('informacoes-detalhadas-lanches').innerHTML = "";
            document.getElementById('informacoes-detalhadas-salada').innerHTML = "";
            totalCalorias = totalCarboidratos = totalProteinas = totalGorduras = 0;

            document.getElementById('atual_calorias').textContent = totalCalorias;
            document.getElementById('atual_carboidratos').textContent = totalCarboidratos;
            document.getElementById('atual_proteinas').textContent = totalProteinas;
            document.getElementById('atual_gorduras').textContent = totalGorduras;
            semiCircleCalorias(totalCalorias);
            progressBarMacronutrientes(totalCarboidratos, totalProteinas, totalGorduras);
            getCaloriasRefeicoes();
        });
    });
</script>