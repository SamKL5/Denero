
$(document).ready(function(){
    $(".popup-block").click(function(){
        if($(this).css('background-color') == 'rgb(172, 139, 255)'){
            $(this).css('background-color',"#ffe88b");
        }else{
            $(this).css('background-color', 'rgb(172, 139, 255)');
        }

    });
    $(".popup-block > p").hover(function(){
        $(this).prev().show();
    },function(){
        $(this).prev().hide();
    })
})
