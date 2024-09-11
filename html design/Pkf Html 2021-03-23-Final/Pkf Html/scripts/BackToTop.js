ScrollTimer = 0;
function ScrollStep() {
    if ($(document).scrollTop() > 0) {
        $(document).scrollTop($(document).scrollTop() - Math.ceil(Math.sqrt($(document).scrollTop()) * 2));
        ScrollTimer = setTimeout(function () { ScrollStep(); }, 2);
    }
    else
        StopScroll();
}
function StopScroll() {
    clearTimeout(ScrollTimer);
}
$(document).ready(function () {
    $("body").append("<button class='BTT hidden' type='button' onclick='ScrollStep()' title='Back to top'><i class='fas fa-arrow-alt-up'></i></button>");
    $(window).scroll(function () {
        if ($(window).scrollTop() > 50)
            $(".BTT").removeClass("hidden");
        else
            $(".BTT").addClass("hidden");
    });
});