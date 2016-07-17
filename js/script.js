$(document).ready(function(){
    $("#reset").click(function(){
        $(this).closest('form').find("input[type=text],input[type=email],textarea").val("");
        $('#status').empty();
    });
});

