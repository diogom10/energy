/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
var base_url = 'http://localhost/energia/index.php/';
var url_upload = 'http://localhost/energia/';


$(document).ready(function () {



    $(".icon-menu").click(function () {

        setTimeout(function () {
            $('.aside').show();

        }, 1);

        $(".aside").animate({left: '0%'});
        $(".control-section").animate({left: '18%'});
        $(".masc-icon").show();
        $(".icon-menu").hide();
        //  $(".control-icon-menu").animate({left: '18%'});
        $("#menu-aside-luz").mouseenter(function () {
            $("#menu-aside-controle").fadeIn(200);
        });

        $("#menu-aside-energia").mouseenter(function () {
            $("#menu-aside-medicao").fadeIn(200);
            $("#menu-aside-relatorio").fadeIn(200);
        });


        $(".show-drop-luz").mouseleave(function () {
            $("#menu-aside-controle").hide();
        });

        $(".show-drop-energia").mouseleave(function () {
            $("#menu-aside-medicao").hide();
            $("#menu-aside-relatorio").hide();
        });
    });

    $(".masc-icon").click(function () {

        $(".aside").animate({left: '-18%'});
        $(".control-section").animate({left: '0%'});
        $(".masc-icon").hide();
        $(".icon-menu").show();
        $(".control-icon-menu").animate({left: '3%'});
        setTimeout(function () {
            $('.aside').hide();

        }, 300);


    });

    $(".sair").on("click", function () {

        $(".g-modal-sair").fadeIn(500);
        $(".masc").fadeIn(500);
        $(".btn-sim").on("click", function () {


            $.ajax({
                type: 'Post',
                url: base_url + "Home/sair",
                cache: false,
                data: {login: true},
                dataType: 'JSON',
                success: function () {

                },
                error: function () {}

            }).done(function (Retorno_sair) {
                if (Retorno_sair === 1)
                    ;
                window.location.href = 'http://localhost/energia';
            });

        });

    });

    $(".masc").on("click", function () {

        $(".g-modal-sair").hide();
        $(".masc").hide();

    });

    $(".btn-nao").on("click", function () {

        $(".g-modal-sair").hide();
        $(".masc").hide();

    });


    $(".img-user-aside").mouseenter(function () {
        $(".text-img-user").show();
    });

    $(".img-user-aside").mouseleave(function () {
        $(".text-img-user").hide();
    });


    $(".img-user-aside").click(function () {
        $("#file").click();
    });

    $("#file").change(function (e) {
        //var file = $('#file').val();
        //var nome_arquivo = $(this).val().split("\\").pop();

        var data = new FormData();

        data.append('file', $('#file')[0].files[0]);
<<<<<<< HEAD

=======
        
       console.log(data);
>>>>>>> b2eea89
        $.ajax({
            url: base_url + 'Home/upload',
            type: "POST",
            dataType: 'JSON',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function () {}
        }).done(function (Retorno_upload) {
               
           if(Retorno_upload.valido){
               $(".img-user-aside").attr('src',url_upload + Retorno_upload.imagem);
<<<<<<< HEAD
=======
                $(".J-text").hide();
              
           }else{
               $(".J-text").show();
               $(".J-text").html(Retorno_upload.erro);
>>>>>>> b2eea89
           }
          
        

        });

    });
});



