$(document).ready(function(){
    //// navigation motions ////
    $("#navi li").has("ul").hover(function(){
        $(this).addClass("current").children("ul").fadeIn('3000');
    }, function() {
        $(this).removeClass("current").children("ul").stop(true, true).fadeOut('3000');
    });
    //// End navigation motions ////   
    
    var currentMenu = $('#navi a[href="' + currentUrl + '"]');
    var search_text = $("#search-form input[type=text]");
    var search_btn = $("#searchBtn");
    
    
    $(currentMenu).css({'color': 'red'});


    	$(search_text).keyup(function(){
            if($(this).val().length > 0){
                $(search_btn).css({'visibility': 'visible', 'cursor': 'pointer'});	
            }else{
                $(search_btn).css({'visibility': 'hidden'});
            }
        });


    $(search_btn).click(function(){
        $(this).val();
        $(search_btn).css({'visibility': 'hidden', 'cursor': 'pointer'});
    });
    
    
    $('code > span > span').css({'color': 'white'});
    $("#code > code").css({'margin': '10px 40px'});
      
    var codeWidth = $("#code").width();
    var codeHeight = $("#code").height();
    
    $("code").css({'width': codeWidth, 'height': codeHeight, 'position': 'absolute'});
//    $("#chat-bubble").infoBar();
//    $("#chat-bubble-two").infoBar();
});



    

