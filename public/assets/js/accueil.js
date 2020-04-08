$(function () {
    $("#callToScrollBas").click(function () {
        $("#callToScrollBas").fadeOut(100);
        $('#blockVideoAccueil').animate(
            {"top":"0"},
            1500
        );
        $("#callToScrollTop").fadeIn(500);

    });
    $("#callToScrollTop").click(function () {
        $("#callToScrollTop").fadeOut(100);
        $('#blockVideoAccueil').animate(
            { "top": "100%" },
            1500
        );
        $("#callToScrollBas").fadeIn(500);
    });
});
