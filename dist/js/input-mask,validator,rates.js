/*___________________input-mask__________*/
$(document).ready(function() {
    $("#phone-client").mask("+7 (999) 999-99-99");
    $("#help-doc-phone").mask("+7 (999) 999-99-99");
    $('#callback-tel').mask("+7 (999) 999-99-99");
});



/*___________VALIDATOR______________*/


$("#help_form").validate({

    rules: {
        ima_kl: {
            required: true
        },
        telefon_lida: {
            required: true
        }
    },
    messages: {
        ima_kl: {
            required: "Это поле обязательно нужно заполнить"
        },
        telefon_lida: {
            required: "Это поле обязательно нужно заполнить"
        }
    }
});

$("#document_form").validate({

    rules: {
        help_doc_name: {
            required: true
        },
        help_doc_phone: {
            required: true
        },
        help_doc_email: {
            required: true
        }
    },
    messages: {
        help_doc_name: {
            required: "Это поле обязательно нужно заполнить"
        },
        help_doc_phone: {
            required: "Это поле обязательно нужно заполнить"
        },
        help_doc_email: {
            required: "Это поле обязательно нужно заполнить"
        }
    }
});

$("#question_form").validate({

            rules: {
                callback_name: {
                    required: true
                },
                callback_question: {
                    required: true
                },
                callback_tel: {
                    required: true
                }
            },
            messages: {
                callback_name: {
                    required: "Это поле обязательно нужно заполнить"
                },
                callback_question: {
                    required: "Это поле обязательно нужно заполнить"
                },
                callback_tel: {
                    required: "Это поле обязательно нужно заполнить"
                }
            }

});

/*__________select-rates________(анимация тарифов)*/ 

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
