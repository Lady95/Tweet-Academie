$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "../controller/register.php",
            dataType: "json",
            data: $(this).serializeArray(),
            success: function(data) {
                if (data === true) {
                    $("#display-error").html("");
                    $("#display-error").addClass("hide");
                    location.replace("../index.php");
                } else {
                    $("#display-error").removeClass("hide");
                    $("#display-error").html(data);
                }
            }
        })
    });
});
