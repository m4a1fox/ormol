$(document).ready(function(){
    $('.avatarreply').click(function(e){
        e.preventDefault();
        var name = $(this).parent().children('span.avatarname').text();
        $('.blogcommentform textarea').val(name+': ');
    })
    
})