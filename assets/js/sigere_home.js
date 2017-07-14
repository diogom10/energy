/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {



    $(".icon-menu").click(function () {

        setTimeout(function () {
            $('.aside').show();

        },1);
        
        $(".aside").animate({left: '0%'});
        $(".control-section").animate({width: '84%'});
        $(".masc-icon").show();
        $(".icon-menu").hide();
        $(".control-icon-menu").animate({left: '18%'});
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
        $(".control-section").animate({width: '100%'});
        $(".masc-icon").hide();
        $(".icon-menu").show();
        $(".control-icon-menu").animate({left: '3%'});
        setTimeout(function () {
            $('.aside').hide();

        },300);


    });

});




