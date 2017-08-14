

<div class="geral_modal" ng-style="modalCadastro">
    <div class="visual_modal">
        <div class="header-cadastro">
            Cadastrar Usuario
        </div>

        <div class="section-cadastro">

            <form name="cadastroForm" autocomplete="off">
                <input type="text" name="nome" class="ipt-geral-modal ipt-modal-nome" placeholder="Digite seu Nome Completo" ng-model="cadastro.nome" ng-required="true"  autocomplete="off" >
                <input type="email" name="email" class="ipt-geral-modal ipt-modal-email" placeholder="Digite seu Email" ng-model="cadastro.email" ng-required="true"  autocomplete="off"> 
                <div class="controle-senha">
                    <input type="password" name="senha" class="ipt-geral-modal ipt-modal-senha" placeholder="Digite sua Senha" ng-model="cadastro.senha" ng-required="true"  autocomplete="off">
                    <input type="password" name="senha2" class="ipt-geral-modal ipt-modal-senha2" placeholder="Digite sua senha Novamente" ng-model="cadastro.senha2" ng-required="true"  autocomplete="off">
                </div>
            </form>
        </div>
        <div class="footer-cadastro">
            <div class="err-geral" ng-show="cadastroForm.nome.$pattern">*Caracter Invalido</div>
            <div class="err-geral" ng-show="cadastroForm.nome.$pattern">*Coloque nome e Sobrenome</div>
            <div class="err-geral" ng-show="cadastroForm.nome.$error.required && cadastroForm.nome.$dirty">*Campo Nome Obrigatorio</div>
            <div class="err-geral">*Formato de Email Invalido</div>
            <div class="err-geral" ng-show="cadastroForm.email.$error.required && cadastroForm.email.$dirty">*Campo Email Obrigatorio</div>
            <div class="err-geral">*Senhas Não Coincidem</div>
            <div class="err-geral">*Minimimo Aceito 6 Caracteres, com 1 Letra Maiuscula e 1 Numero</div>
            <div class="err-geral">*teste</div>
            <div class="sucesso-cadastro">
                <img class="sucesso-imagem" src="<?php echo base_url() ?>assets/images/certo.png" />
            </div>
            <div class="btn-voltar">
                <div class="text-btn-voltar">Voltar</div>
            </div>


            <div class="btn-done">
                <div class="text-btn-done">Cadastrar</div>
            </div>
            <!-- <div class="btn-cancelar">Cancelar</div>-->
        </div>
    </div>
</div>