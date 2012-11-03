$(document).ready(function(){
    $('.avatarreply').click(function(e){
        e.preventDefault();
        var name = $(this).parent().children('span.avatarname').text();
        $('.blogcommentform textarea').val(name+': ');
    })
    
    $(".remove").click(function(e){
        e.preventDefault();
        var id = $(this).data('id');
        var remove = confirm("remove comment #"+id);
        
        if(remove){
             $.post("/comment/removeComment", {'id': id}, function(theResponse){
                 
                 $("#comment_"+id).remove();
                 
                 
             });
        }
        
    })
    
    
    
})