<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title><?php echo $title; ?></title>
        <meta charset="UTF-8" />

        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/login.css"/>
         <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/css/modal_cadastro.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"/>
        <script  src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min  .js"></script>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <script  src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script  src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script  src="<?php echo base_url(); ?>assets/js/sigere.js"></script>





    </head>
    <body>

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
                        <!-- <label>Email: </label>-->
                        <input type="email" class="ipt-geral ipt-email" placeholder="Email" >
                        <!-- <br/><br/>-->
                        <!-- <label>Senha:</label>-->
                        <br/>
                        <input type="password" class="ipt-geral ipt-password" placeholder="Senha">
                        <br/>

                        <div class="btn-login">
                            <div class=" text-btn">Logar</div>
                        </div>

                    </div>


                    <div class="f_login">
                        <div class="cadastro">Ainda não é cadastrado?</div>
                        <div class="senha">Esqueceu a Senha?</div>
                    </div>

                </div>
            </div>
            
            <?php  $this->load->view('modal/cadastro_view.php');?>
            
           
        </div>

        <div class="footer"></div>
    </body>


