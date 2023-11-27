$(document).ready(function () {
    $("#toggle").click(function () {
        $("#generatePdf").fadeToggle(5000);
        $("form").fadeToggle(3600);

    });
});
$('#ajouInput').click(function() {
    const submitButton = $('#ajouInput');
    submitButton.addClass('animate__animated animate__rubberBand');

    setTimeout(function() {
        submitButton.removeClass('animate__animated animate__rubberBand');
    }, 1000);
});

$('#generatePdf').click(function() {
    const submitButton = $('#generatePdf');
    submitButton.addClass('animate__animated animate__rubberBand');

    setTimeout(function() {
        submitButton.removeClass('animate__animated animate__rubberBand');
    }, 1000);
});

$('#sub').click(function() {
    const submitButton = $('#sub');
    submitButton.addClass('animate__animated animate__rubberBand');

    setTimeout(function() {
        submitButton.removeClass('animate__animated animate__rubberBand');
    }, 1000);
});