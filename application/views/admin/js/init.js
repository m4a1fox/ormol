$(document).ready(function(){
    

    $("#article").hide();
    $("#show-article").css('cursor', 'pointer').click(function(){
        $("#article").slideToggle('slow');
        $("#show-article").css({'border-bottom': 'none'})
    })
    
    $("input[name='link']").focus(function(){
        var text = $("input[name='title']").val().toLowerCase();
        $(this).val(toTranslit(text));
    })
    if($("textarea").size() > 0){
        var oFCKeditor = new FCKeditor('text',/*id block*/ '812px'/*width*/, '700px'/*height*/, 'Default'/*toolbar Set*/, ''/*value*/, 'usefull'/*path to folder with fckedit*/);
        oFCKeditor.ReplaceTextarea();
    }
    
    
    function slideout(){
        setTimeout(function(){
            $("#response").css({'opacity': '0'});
    }, 2000);}

    


    $("#article").sortable({ opacity: 0.8, cursor: 'move', update: function() {
                var order = $(this).sortable("serialize") + '&update=update';
                $.post("/ladmin/changePosition", order, function(theResponse){
                    $("#response").html(theResponse);
                    $("#response").css({'opacity': '1'});
                    slideout();
                });
            }
        });

});








