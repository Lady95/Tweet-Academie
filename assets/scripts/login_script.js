$(document).ready(function() {
    $("form").submit(function(event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: "../controller/login.php",
            dataType: "json",
            data: $(this).serializeArray(),
            success: function(data) {
                console.log("top");
                if (data.code === true) {
                    $("#display-error").html("");
                    $("#display-error").addClass("hide");
                    $("#display-success").removeClass("hide");
                    $("#display-success").html("Login Successfull");
                    setTimeout(function(){location.replace("user_profile.php?user_id="+data.user_id);},500);
                } else if (data === "desac"){
                    $("#display-error").html("");
                    $("#display-error").removeClass("hide");
                    $("#display-error").html("<li>Your account has been de-activated</li>");
                } else {
                    $("#display-error").html("");
                    $("#display-error").removeClass("hide");
                    $("#display-error").html(data);
                }
            }
        });
    });
});