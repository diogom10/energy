<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8" />

        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modal_cadastro.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modal_senha.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/menu_vertical.css"/>
        <script  src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script  src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script  src="<?php echo base_url(); ?>assets/js/sigere_login.js"></script>
        <script  src="<?php echo base_url(); ?>assets/js/sigere_home.js"></script>




    </head>
    <body>
        <div class="masc"></div>


       

        <div class="header">
            <div class="control-icon-menu">
               
               <img class="masc-icon" src="<?php echo base_url(); ?>assets/images/menu.png" />
               <img class="icon-menu" src="<?php echo base_url(); ?>assets/images/menu.png" />
            </div>
            <div class="title">SIGERE</div>

        </div>

        <div class="section">
             <div class="aside">
            <div class="control-aside">
                <div class="header-aside">
                    <div class="control-img-aside">
                        <img class="img-user-aside" src="<?php echo base_url(); ?>assets/images/kratos.jpg" />
                    </div>
                    <div class="control-text-aside">
                        <div class="text-name-aside"> <?= $this->session->userdata('nome_de_usuario'); ?></div>
                    </div>
                </div>
                <div class="section-aside">
                    <div class="control-menu-aside">
                        <div class="menu-aside-geral" id="menu-aside-home">Home</div>
                        <div class="show-drop-luz">
                            <div class="menu-aside-geral" id="menu-aside-luz">Luz</div>
                            <div class="menu-aside-geral" id="menu-aside-controle">Controle</div>
                        </div>
                        <div class="show-drop-energia">
                            <div class="menu-aside-geral" id="menu-aside-energia">Energia</div>
                            <div class="menu-aside-geral" id="menu-aside-medicao">Medição</div>
                            <div class="menu-aside-geral" id="menu-aside-relatorio">Relatorio</div>
                        </div>
                        <div class="menu-aside-geral" id="menu-aside-conta">Minha Conta</div>
                    </div>
                </div>
                <div class="footer-aside"></div>
            </div>
        </div>
            <div class="control-section">
                
            </div>
        </div>

        <div class="footer">
            <div class="f-text">
                <div class="f-text-geral">@2017 Sigere.com | Todos os direitos reservados</div>
                <div class="f-text-geral">É proibida a reprodução total ou parcial de qualquer conteudo deste site</div>
            </div>
        </div>

    </body>


