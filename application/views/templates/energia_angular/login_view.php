<!DOCTYPE html>
<html lang="pt-BR" ng-app="sigere">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8" />

        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modal/modal_cadastro.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modal/modal_senha.css"/>
        <script src="<?php echo base_url(); ?>assets/js/jquery/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/angular/angular.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/angular/lib/angular-messages.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/Back-end/login/sigere_login_dados.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/Back-end/login/modal/sigere_cadastro_dados.js"></script>
      <!-- <script src="<?php echo base_url(); ?>assets/js/Back-end/login/directives/validation.js"></script>-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    </head>
    <body ng-controller="telaDeLoginCtrl">
        <div class="masc"  ng-click="closeModal()" ng-style="modalMascara"></div>
        <div class="header">
            <div class="title">SIGERE</div>
        </div>

        <div class="section">

            <div class="login">
                <div class="p_corpo_inputs">
                    <div class="title_login">Bem vindo!
                        <div class="sub-title">Por favor, digite o seu email e senha.</div>
                    </div>
                    <div class="p_inputs title_inputs">
                        <form name="loginForm" autocomplete="off">
                            <input type="text" name="email" class="ipt-geral ipt-email" placeholder="Email" ng-required="true" ng-model="login.email"  ng-pattern="/^[A-Za-z0-9_.-]+@[A-Za-z0-9_]+\.[a-z]{2}/">
                            <br/>
                            <input type="password" name="senha" class="ipt-geral ipt-password" placeholder="Senha" ng-model="login.senha" ng-required="true">
                            <br/>
                        </form>
                        <button class="btn-login text-btn" ng-click="validaLogin(login)" ng-disabled="loginForm.$invalid">Entrar</button>
                    </div>
                    <div class="f_login"> 
                        <div ng-messages="loginForm.email.$error">
                            <div class="err-login-geral" ng-show="loginForm.email.$dirty"  ng-message="required" >*Campo Email Vazio</div>
                            <div class="err-login-geral" ng-message="pattern">*Formato de email Invalido</div>
                        </div>
                        <div class="err-login-geral" ng-show="loginForm.senha.$error.required && loginForm.senha.$dirty">*Campo Senha Vazio</div>
                        <div class="err-login-geral">{{login.mensagem}}</div>
                    </div>


                    <div class="f_login"> 


                        <div id="err-login-email-php" class="err-login-geral"></div>
                        <div id="err-login-senha-php" class="err-login-geral"></div>
                        <div class="cadastro" ng-click="openModal()">Ainda não é cadastrado?</div>
                        <div class="senha">Esqueceu a Senha?</div>
                    </div>

                </div>
            </div>

            <?php $this->load->view('templates/energia_angular/modal/cadastro_view.php'); ?>
            <?php $this->load->view('templates/energia_angular/modal/senha_view.php'); ?>


        </div>

        <div class="footer">
            <div class="f-text">
                <div class="f-text-geral">@2017 Sigere.com | Todos os direitos reservados</div>
                <div class="f-text-geral">É proibida a reprodução total ou parcial de qualquer conteudo deste site</div>
            </div>
        </div>



    </body>


