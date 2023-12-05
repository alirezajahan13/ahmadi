var $ = jQuery;

$(document).ready(function(){
    $(window).on('scroll' , function(){
        if($(document).scrollTop() >= 130){
            $('.mobMenuStickyParent').addClass('showStickyHeader');       
        }
        else{
            $('.mobMenuStickyParent').removeClass('showStickyHeader');                     
        }
    });
});