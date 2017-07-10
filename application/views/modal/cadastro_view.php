

<div class="geral_modal">
    <div class="visual_modal">
        <div class="header-cadastro">
            Cadastrar Usuario
        </div>

        <div class="section-cadastro">
            <input type="text" name="nome" class="ipt-geral-modal ipt-modal-nome" placeholder="Digite seu Nome Completo" >
            <input type="email" name="email" class="ipt-geral-modal ipt-modal-email" placeholder="Digite seu Email">
            <input type="password" name="senha" class="ipt-geral-modal ipt-modal-senha" placeholder="Digite sua Senha">
            <input type="password" name="senha2" class="ipt-geral-modal ipt-modal-senha2" placeholder="Digite sua senha Novamente">
        </div>
        <div class="footer-cadastro">
            <div class="err-nome err-geral">*Caracter Invalido no Nome</div>
            <div class="err-nome2 err-geral">*Numero Minimo de Caracteres</div>
            <div class="err-nome3 err-geral">*Campo Nome Obrigatorio</div>
            <div class="err-email err-geral">*Formato de Email Invalido</div>
             <div class="err-email2 err-geral">*Campo Email Obrigatorio</div>
            <div class="err-senha err-geral">*Senhas Não Coincidem</div>
            <div class="err-senha2 err-geral">*Minimimo Aceito 6 Caracteres, com 1 Letra Maiuscula e 1 Numero</div>
            <div class="err-php err-geral">*teste</div>
            <div class="sucesso-cadastro">
                <img class="sucesso-imagem" src="<?php echo base_url()?>assets/images/certo.png" />
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