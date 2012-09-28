$(document).ready( function() {

    $('#container_id').fileTree({ root: '/application/', script: 'usefull/jqueryFileTree/connectors/jqueryFileTree.php' }, function(file) {
        
        $(".titlesnormal h1 name").text('')
        $.ajax({
            type: "POST",
            url: "/usefull/file.php",
            data: "name="+file,
            success: function(data){
                $("#close-btn").css('visibility', 'visible');
                $("#file").css('display', 'block').val(data)
            }
       });

        $(".titlesnormal h1 > name").text(file)
    });

    $("#save-btn").click(function(){
        var text = $("#file").val();
        var file = $(".titlesnormal h1 name").text()
        $.ajax({
        type: "POST",
        url: "/usefull/file.php",
        data: {text: text, file: file}, 
        success: function(data){
            alert(data)
            }
        });
    })
    
    $("#file").live('keydown', function(e) {
        $("#save-btn, #close-btn").css('visibility', 'visible');

        var keyCode = e.keyCode || e.which; 
        if (keyCode == 9) {
            var myValue = "\t";
            var startPos = this.selectionStart;
            var endPos = this.selectionEnd;
            var scrollTop = this.scrollTop;
            this.value = this.value.substring(0, startPos) + myValue + this.value.substring(endPos,this.value.length);
            this.focus();
            this.selectionStart = startPos + myValue.length;
            this.selectionEnd = startPos + myValue.length;
            this.scrollTop = scrollTop;
            e.preventDefault(); 
        }
    });
    
    $("#close-btn").click(function(){
        var yes = confirm("Close file?");
        if(yes){
            $("#file").hide()
            $(this).removeAttr('style');
            $("#save-btn").removeAttr('style');
            $(".titlesnormal h1 name").text('')
        }
    })
});