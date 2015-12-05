$(document).ready(function() {
    // open the login window
    $(".login-show").click(function() {
        $("#login").show();
        $("#signup").hide();
        return false;
    });

    // close the login window
    $("#login-close").click(function() {
        $("#login").hide();
        return false;
    });

    // open the sign up window
    $(".signup-show").click(function() {
        $("#login").hide();
        $("#signup").show();
        return false;
    });

    // close the sign up window
    $("#signup-close").click(function() {
        $("#signup").hide();
        return false;
    });
});











