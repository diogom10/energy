$(document).ready(function () {

    var base_url = 'http://localhost/energia/';

    $(".cadastro").on("click", function () {
        
        $(".geral_modal").show();  
        $(".masc").show();
        
    });
 
    $(".masc").on("click", function () {
        
        $(".geral_modal_senha").hide();  
        $(".geral_modal").hide();  
        $(this).hide();
        
    });
    
    $(".senha").on("click", function () {
        
        $(".geral_modal_senha").show();  
        $(".masc").show();
    });
 
    
    
});
