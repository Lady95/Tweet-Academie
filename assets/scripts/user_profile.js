$(document).ready(function () {
    $.ajax({
        url: "../controller/user_profile.php",
        dataType: "JSON",
        success: function (data) {
            if (data) {
                $.each(data, function (i, value) {
                    $("#tweet_list").append("<div class='card border-secondary mb-2' id='tweet-" + value.id_tweet + "' style='max-width: 40rem;'>" +
                        "<div class='card-header'>" +
                        "<img class='rounded mr-3' width='50px' height='50px' src=" + value.avatar + " alt='avatar' style=\"float:left;\">" +
                        "                        <a href='' class='text-secondary'><h5 class='card-title'>" + value.display_name + "</h5></a>" +
                        "                        <h6 class='card-subtitle mb-2 text-muted'>@" + value.username + "</h6>" +
                        "                    </div>" +
                        "                    <div class='card-body'>" +
                        "                        <p class='card-text'>" + value.content + "</p></div>" +
                        "<div class='card-footer text-muted'><a href='#' id='RT-"+value.id_tweet+"' class='card-link text-muted'>RT</a>\n" +
                        "    <a href='#' id='LK-"+value.id_tweet+"' class='card-link text-muted'>LK</a><p class='float-right'>"+value.tweet_date+"</p></div>" +
                        "                </div>");
                });
            }
        }
    });
});

$("#add_tweet").submit(function () {

});