$(document).ready(function () {

    var base_url = 'http://localhost/energia/index.php/';
    var tempo = 500;
    var valida_nome = 0;
    var valida_email = 0;
    var valida_password = 0;
    var validador = 0;
    $(".cadastro").on("click", function () {

        $(".geral_modal").fadeIn(tempo);
        $(".masc").fadeIn(tempo);

    });

    $(".masc").on("click", function () {

        $(".geral_modal_senha").fadeOut();
        $(".geral_modal").hide();
        $(".ipt-modal-nome").val("");
        $(".ipt-modal-email").val("");
        $(".ipt-modal-senha").val("");
        $(".ipt-modal-senha2").val("");
        $(".err-senha").hide();
        $(".ipt-modal-senha").css("border", "");
        $(".ipt-modal-senha2").css("border", "");
        $(".err-email").hide();
        $(".err-senha2").hide();
        $(".ipt-modal-email").css({"border": ""});
        $(".err-nome").hide();
        $(".ipt-modal-nome").css({"border": ""});
        $(".ipt-modal-senha").css({"border": ""});
        $(".ipt-modal-senha2").css({"border": ""});
        $(".err-nome3").hide();
        $(".err-email2").hide();
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
            $(".err-nome3").fadeIn();
            $(".err-nome").hide();
            $(".ipt-modal-nome").css({"border": "1px solid #efa5a5"});
             valida_nome = 0;
        } else if (!nomeValido.test(name))
        {
            $(".err-nome").fadeIn();
            $(".err-nome3").hide();
            $(".ipt-modal-nome").css({"border": "1px solid #efa5a5"});
            valida_nome = 0;
        } else 
        {
           
            $(".err-nome").hide();
            $(".err-nome3").hide();
            $(".ipt-modal-nome").css({"border": ""});
             valida_nome = 1;

        }
        //fim da validação campo nome//////////////////////////////////


        //validação campo email////////////////////////////////////////
        var emailValido = /^.+@.+..{2,}$/;
        if (email == "") {

            $(".err-email2").fadeIn();
            $(".err-email").hide();
            $(".ipt-modal-email").css({"border": "1px solid #efa5a5"});
            valida_email = 0;
        } else if (!emailValido.test(email))
        {
            $(".err-email").fadeIn();
            $(".err-email2").hide();
            $(".ipt-modal-email").css({"border": "1px solid #efa5a5"});
            valida_email = 0;

        } else 
        {
            
            $(".err-email").hide();
            $(".err-email2").hide();
            $(".ipt-modal-email").css({"border": ""});
            valida_email = 1;
        }

        //fim da validação campo email///////////////////////////////


        //validação campo senha//////////////////////////////////////
       var senhaValida = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/;
       // var senhaValida = "^(?=.*\d)(?=.*[a-zA-Z])(?!.*[\W_\x7B-\xFF]).{4,15}$";
        
        if (password !== password2)
        {
            $(".err-senha2").hide();
            $(".err-senha").fadeIn();
            $(".ipt-modal-senha").css({"border": "1px solid #efa5a5"});
            $(".ipt-modal-senha2").css({"border": "1px solid #efa5a5"});
            valida_password = 0;
            
        } else if (!senhaValida.test(password) && password === "")
        {
            $(".err-senha2").fadeIn();
            $(".err-senha").hide();
            $(".ipt-modal-senha").css({"border": "1px solid #efa5a5"});
            $(".ipt-modal-senha2").css({"border": "1px solid #efa5a5"});
            valida_password = 0;
        } else 
        {
            $(".err-senha2").hide();
            $(".err-senha").hide();
            $(".ipt-modal-senha").css({"border": ""});
            $(".ipt-modal-senha2").css({"border": ""});
            valida_password = 1;

        }

    
        //fim da validação campo senha//////////////////////////////

      validador = valida_nome+valida_email+valida_password;
      console.log(validador);
   
    
        if (validador === 3) {
            
            alert("Usuario cadastrado com sucesso"); 
            
            $.ajax({
                type: 'Post',
                url: base_url + "Sigere/Cadastrar",
                data: {name: name, email: email, pwd: password},
                success: function (res) {
                             

                }
        
            });
            
        

        $(".geral_modal_senha").fadeOut();
        $(".geral_modal").hide();
        $(".ipt-modal-nome").val("");
        $(".ipt-modal-email").val("");
        $(".ipt-modal-senha").val("");
        $(".ipt-modal-senha2").val("");
        $(".err-senha").hide();
        $(".ipt-modal-senha").css("border", "");
        $(".ipt-modal-senha2").css("border", "");
        $(".err-email").hide();
        $(".err-senha2").hide();
        $(".ipt-modal-email").css({"border": ""});
        $(".err-nome").hide();
        $(".ipt-modal-nome").css({"border": ""});
        $(".ipt-modal-senha").css({"border": ""});
        $(".ipt-modal-senha2").css({"border": ""});
        $(".err-nome3").hide();
        $(".err-email2").hide();
        $(".masc").fadeOut();
       
        }

        return false;

    });



                
    });

