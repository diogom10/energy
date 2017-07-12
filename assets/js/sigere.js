$(document).ready(function () {

    var base_url = 'http://localhost/energia/index.php/';
    var tempo = 500;
    var valida_nome = 0;
    var valida_email = 0;
    var valida_password = 0;
    var validador = 0;


    $(".ipt-geral-modal").attr('autocomplete', 'off');
    $(".ipt-geral").attr('autocomplete', 'off');

    $(".cadastro").on("click", function () {

        $(".geral_modal").fadeIn(tempo);
        $(".masc").fadeIn(tempo);

    });
// ao clicar na mascara todas inputs e atributos são resetados
    $(".masc").on("click", function () {





        $(".geral_modal_senha").fadeOut();
        $(".geral_modal").hide();
        $(".ipt-modal-nome").val("");
        $(".ipt-modal-email").val("");
        $(".ipt-modal-senha").val("");
        $(".ipt-modal-senha2").val("");
        $("#err-senha").hide();
        $(".ipt-modal-senha").css("border", "");
        $(".ipt-modal-senha2").css("border", "");
        $("#err-email").hide();
        $("#err-senha2").hide();
        $(".ipt-modal-email").css({"border": ""});
        $("#err-nome").hide();
        $(".ipt-modal-nome").css({"border": ""});
        $(".ipt-modal-senha").css({"border": ""});
        $(".ipt-modal-senha2").css({"border": ""});
        $("#err-nome3").hide();
        $("#err-email2").hide();
        $("#err-php").hide();
        $(".section-cadastro").show();
        $(".geral_modal").css({"width": "40%"});
        $(".geral_modal").css({"left": "29%"});
        $(".ipt-modal-nome").show();
        $(".ipt-modal-email").show();
        $(".ipt-modal-senha").show();
        $(".ipt-modal-senha2").show();
        $(".sucesso-cadastro").hide();

        $("#err-login-senha").hide();
        $("#err-login-senha-php").hide();
        $(".ipt-password").css({"border": ""});

        $("#err-login-email").hide();
        $("#err-login-email2").hide();
        $(".ipt-email").css({"border": ""});
        $(".btn-done").show();
        $(".btn-voltar").hide();

        $(this).fadeOut();

    });


    $(".senha").on("click", function () {
        $(".geral_modal_senha").fadeIn(tempo);
        $(".masc").fadeIn(tempo);
    });



    $(".btn-done").on("click", function () {

        var name = $(".ipt-modal-nome").val();
        var email = $(".ipt-modal-email").val();
        var password = $(".ipt-modal-senha").val();
        var password2 = $(".ipt-modal-senha2").val();


        //validação campo nome/////////////////////////////////////////
        var nomeValido = /^[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ ]+$/;

        if (name == "") {

            $("#err-nome3").fadeIn();
            $("#err-nome").hide();
            $("#err-nome2").hide();
            $(".ipt-modal-nome").css({"border": "1px solid #efa5a5"});
            valida_nome = 0;

        } else if (!nomeValido.test(name))
        {
            $(".ipt-modal-nome").css({"border": "1px solid #efa5a5"});

            if ($(".ipt-modal-nome").val().length <= 3)
            {
                $("#err-nome").hide();
                $("#err-nome2").fadeIn();
                $("#err-nome3").hide();
            } else
            {
                $("#err-nome").fadeIn();
                $("#err-nome2").hide();
                $("#err-nome3").hide();

            }
            valida_nome = 0;

        } else
        {

            $("#err-nome").hide();
            $("#err-nome3").hide();
            $("#err-nome2").hide();
            $(".ipt-modal-nome").css({"border": ""});
            valida_nome = 1;

        }
        //fim da validação campo nome//////////////////////////////////


        //validação campo email////////////////////////////////////////
        //var emailValido = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)[a-zA-Z-0-9]{2,3}?/;
        var emailValido = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)+.[a-zA-Z-0-9]{1,}$/;
        if (email === "") {

            $("#err-email2").fadeIn();
            $("#err-email").hide();
            $(".ipt-modal-email").css({"border": "1px solid #efa5a5"});
            valida_email = 0;
        } else if (!emailValido.test(email))
        {
            $("#err-email").fadeIn();
            $("#err-email2").hide();
            $(".ipt-modal-email").css({"border": "1px solid #efa5a5"});
            valida_email = 0;

        } else
        {

            $("#err-email").hide();
            $("#err-email2").hide();
            $(".ipt-modal-email").css({"border": ""});
            valida_email = 1;
        }

        //fim da validação campo email///////////////////////////////


        //validação campo senha//////////////////////////////////////
        //var senhaValida = /^[a-z0-9\._-\.[A-Z]{1}]{6,}?/;
        var senhaValida = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{4,}$/;

        if (password === "" || password2 === "")
        {
            $("#err-senha2").fadeIn();
            $("#err-senha").hide();
            $(".ipt-modal-senha").css({"border": "1px solid #efa5a5"});
            $(".ipt-modal-senha2").css({"border": "1px solid #efa5a5"});
            valida_password = 0;

        } else if (password !== password2)
        {
            $("#err-senha2").hide();
            $("#err-senha").fadeIn();
            $(".ipt-modal-senha").css({"border": "1px solid #efa5a5"});
            $(".ipt-modal-senha2").css({"border": "1px solid #efa5a5"});
            valida_password = 0;

        } else if (!senhaValida.test(password))
        {
            $("#err-senha2").fadeIn();
            $("#err-senha").hide();
            $(".ipt-modal-senha").css({"border": "1px solid #efa5a5"});
            $(".ipt-modal-senha2").css({"border": "1px solid #efa5a5"});
            valida_password = 0;
        } else
        {
            $("#err-senha2").hide();
            $("#err-senha").hide();
            $(".ipt-modal-senha").css({"border": ""});
            $(".ipt-modal-senha2").css({"border": ""});
            valida_password = 1;

        }


        //fim da validação campo senha//////////////////////////////

        validador = valida_nome + valida_email + valida_password;
        console.log(validador);


        if (validador === 3) {



            $.ajax({
                type: 'Post',
                url: base_url + "Sigere/validador_cadastro",
                 cache: false,
                data: {name: name, email: email, pwd: password},
                dataType: 'JSON',
                success: function () {
                },
                error: function () {}

            }).
                    done(function (retorno_cadastro) {

                        if (retorno_cadastro.existe_erro)
                        {
                            $("#err-php").fadeIn();
                            $("#err-php").html(retorno_cadastro.mensagem);
                            $(".ipt-modal-email").css({"border": "1px solid #efa5a5"});
                        } else
                        {
                            $(".section-cadastro").hide();
                            $(".ipt-modal-nome").hide();
                            $(".ipt-modal-email").hide();
                            $(".ipt-modal-senha").hide();
                            $(".ipt-modal-senha2").hide();

                            $(".err-php").hide();
                            $(".geral_modal").css({"width": "30%"});
                            $(".geral_modal").css({"left": "35%"});
                            $(".sucesso-cadastro").fadeIn();
                            $(".btn-done").hide();
                            $(".btn-voltar").fadeIn();
                            $(".header-cadastro").html("Cadastro Feito com Sucesso");

                            $(".btn-voltar").on("click", function () {

                                $(".geral_modal_senha").fadeOut();
                                $(".geral_modal").hide();
                                $(".ipt-modal-nome").val("");
                                $(".ipt-modal-email").val("");
                                $(".ipt-modal-senha").val("");
                                $(".ipt-modal-senha2").val("");
                                $("#err-senha").hide();
                                $(".ipt-modal-senha").css("border", "");
                                $(".ipt-modal-senha2").css("border", "");
                                $("#err-email").hide();
                                $("#err-senha2").hide();
                                $(".ipt-modal-email").css({"border": ""});
                                $("#err-nome").hide();
                                $(".ipt-modal-nome").css({"border": ""});
                                $(".ipt-modal-senha").css({"border": ""});
                                $(".ipt-modal-senha2").css({"border": ""});
                                $("#err-nome3").hide();
                                $("#err-email2").hide();
                                $(".masc").fadeOut();


                                $(".geral_modal").css({"width": "40%"});
                                $(".geral_modal").css({"left": "29%"});
                                $(".sucesso-cadastro").hide();
                                $(".text-btn-done").html("Cadastrar");
                                $(".header-cadastro").html("Cadastrar Usuario");

                                $(".section-cadastro").show();
                                $(".ipt-modal-nome").show();
                                $(".ipt-modal-email").show();
                                $(".ipt-modal-senha").show();
                                $(".ipt-modal-senha2").show();

                                $(".btn-done").show();
                                $(".btn-voltar").hide();



                            });

                        }

                    });
        }


    });

    $(".btn-login").on("click", function () {

        var valida_login_email;
        var valida_login_senha;
        var email_login = $(".ipt-email").val();
        var password_login = $(".ipt-password").val();

        //validção do campo email///////////////
        var emailValido = /^[a-zA-Z0-9][a-zA-Z0-9\._-]+@([a-zA-Z0-9\._-]+\.)+.[a-zA-Z-0-9]{1,}$/;
        if (email_login === "") {

            $("#err-login-email").fadeIn();
            $("#err-login-email2").hide();
            $(".ipt-email").css({"border": "1px solid #efa5a5"});
            valida_login_email = 0;
        } else if (!emailValido.test(email_login))
        {
            $("#err-login-email").hide();
            $("#err-login-email2").fadeIn();
            $(".ipt-email").css({"border": "1px solid #efa5a5"});
            valida_login_email = 0;

        } else
        {

            $("#err-login-email").hide();
            $("#err-login-email2").hide();
            $(".ipt-email").css({"border": ""});
            valida_login_email = 1;
        }

        //fim da validação do campo email///////////


        //validação campo senha/////////////////////

        if (password_login === "")
        {
            $("#err-login-senha").fadeIn();
            $("#err-login-senha-php").hide();
            $(".ipt-password").css({"border": "1px solid #efa5a5"});

            valida_login_senha = 0;


        } else
        {
            $("#err-login-senha").hide();
            $("#err-login-senha-php").hide();
            $(".ipt-password").css({"border": ""});

            valida_login_senha = 1;

        }
        //Fim da validação campo senha//////////////

        validador = valida_login_senha + valida_login_email;



        if (validador === 2) {


            console.log("tudo ok JS");
            console.log(validador);
            $.ajax({
                type: 'Post',
                url: base_url + "Sigere/validador_login",
                cache: false,
                data: {email_login: email_login, pwd_login: password_login},
                dataType: 'JSON',
                success: function () {
                },
                error: function () {}

            }).done(function (retorno_login) {
                
                if (retorno_login.existe_erro === 'email')
                {
                    $("#err-login-email-php").fadeIn();
                    $("#err-login-senha-php").hide();
                    $("#err-login-email-php").html(retorno_login.mensagem);
                    $(".ipt-email").css({"border": "1px solid #efa5a5"});

                } else if (retorno_login.existe_erro === 'senha')
                {
                    $("#err-login-senha-php").fadeIn();
                    $("#err-login-email-php").hide();
                    $("#err-login-senha-php").html(retorno_login.mensagem);
                    $(".ipt-password").css({"border": "1px solid #efa5a5"});
                }
                
                else
                {
                    window.location.replace("http://localhost/energia/index.php/Sigere/home_view");
                    alert("usuario:: "+retorno_login.usuario);
                    $(".boas").html(retorno_login.usuario);
                }
            });
        }
    });

    return false;
});

