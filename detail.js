$(document).ready(function() {
    $("#vege-detail").click(function() {
        $("#detail").show();
        //$("#vege").show();

        var detail_window = $("#detail-window");
        var detail_window_width = $("#detail-right").width();

        detail_window.animate({right: "300px"}, 3300);
        return false;
    });

    $(".detail-close").click(function() {
        //$("#detail").hide();
        var detail_window = $("#detail-window");
        var detail_window_width = $("#detail-right").width();

        detail_window.animate({left: "300px"}, 330);
        return false;
    });

    $("#detail-left").click(function() {
        //$("#detail").hide();
        var detail_window = $("#detail-window");
        var detail_window_width = $("#detail-right").width();

        detail_window.animate({left: "300px"}, 330);

        return false;
    });

 });