$(document).ready(function() {
    
    $(".deactivate").click(function(){
        
        if (confirm("Are you sure you want to deactivate your account")) {
            location.replace("../controller/deactivate.php");
        }
    })
    
});