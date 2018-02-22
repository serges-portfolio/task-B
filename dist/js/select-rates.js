$(function () {
    $('.visibility-option').hide();
    $('.active-opt').show();

    $('#choose').change(function () {
        $('.visibility-option').slideUp();
        $('.visibility-option').removeClass('current-opt');
        $('.visibility-option').removeClass('active-opt');
        $("." + $(this).val()).slideDown();
        $("." + $(this).val()).addClass('current-opt');
    });
});