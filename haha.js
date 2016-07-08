$(document).ready(function(){
    $("#123").hide();
    $("#click1").on("click", function(){
        $("#123").toggle();
    });
});