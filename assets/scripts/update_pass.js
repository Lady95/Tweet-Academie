$(document).ready(function(){
    $("#form_update_pass").submit(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "../Controller/update_pass.php",
            dataType: "json",
            data: $(this).serializeArray(),
            success: function(data) {
                if(data === true) {
                    $("#display-error").html("");
                    $("#display-error").addClass("hide");
                    $("#display-success").toggleClass("hide");
                    $("#display-success").html("Update password Successfull");
                } else {
                    $("#display-error").html("");
                    $("#display-success").addClass("hide");
                    $("#display-error").removeClass("hide");
                    $("#display-error").html(data);
                }
            }
        })
    });
});