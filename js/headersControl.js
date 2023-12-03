var $ = jQuery;

$(document).ready(function(){
    $(window).on('scroll' , function(){
        if($(document).scrollTop() >= 140){
            $('.mobMenuStickyParent').addClass('showStickyHeader');       
        }
        else{
            $('.mobMenuStickyParent').removeClass('showStickyHeader');                     
        }
    });
});