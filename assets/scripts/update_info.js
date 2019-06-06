$(document).ready(function(){
    $("#update-info").submit(function(event){
        event.preventDefault(); 
        $.ajax({
            type : "POST", 
            url: "../controller/update_info.php", 
            dataType : "json", 
            data: $(this).serializeArray(),
            success: function(data) {
              $("#display-info").removeClass("hide");
              $("#display-info").html(data);
            } 
        })
})
});