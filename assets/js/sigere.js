$(document).ready(function () {

    var base_url = 'http://localhost/energia/';
    var tempo = 500;

    $(".cadastro").on("click", function () {

        $(".geral_modal").fadeIn(tempo);
        $(".masc").fadeIn(tempo);

    });

    $(".masc").on("click", function () {

        $(".geral_modal_senha").fadeOut();
        $(".geral_modal").fadeOut();
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
     
     console.log("Nome: "+name);
     console.log("Email: "+email);
     console.log("Password: "+password);
    });


});
