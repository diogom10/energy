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
        <script  src="<?php echo base_url(); ?>assets/js/sigere.js"></script>





    </head>
    <body>
        <div class="masc"></div>


        <div class="aside">
            <div class="control-menu"></div>
        </div>

        <div class="header">

            <div class="title">SIGERE</div>

        </div>

        <div class="section">
            Seja bem vindo <?php echo $this->session->userdata('nome_de_usuario'); ?>
        </div>

        <div class="footer">
            <div class="f-text">
                <div class="f-text-geral">@2017 Sigere.com | Todos os direitos reservados</div>
                <div class="f-text-geral">É proibida a reprodução total ou parcial de qualquer conteudo deste site</div>
            </div>
        </div>

    </body>


