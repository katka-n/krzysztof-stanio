/**
 * Created by kaska on 1/25/17.
 */

$(document).ready(function () {

    var isDialog = false;
    var dialogForm;

    function isValidEmailAddress(emailAddress) {
        var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
        return pattern.test(emailAddress);
    }

    function dialogDestroy() {
        dialogForm.addClass('return-dialog');
        window.setTimeout(function () {
            dialogForm.remove();
        }, 1000);
    }

    function sendMail() {
        var input = dialogForm.find('#email');

        if (!isValidEmailAddress(input.val())) {

            alert('Podany adres e-mail jest nieprawidłowy');

        } else {
            $.post('save-email.php', {
                    'email' : input.val()
                },
                function (response) {
                    if(response.status > 0) {
                        dialogDestroy();
                    } else {
                        alert('Podany adres e-mail jest nieprawidłowy');
                    }
                }, 'json');
        }
    }

    $('body').mouseleave(function () {
        if (isDialog) {
            return;
        }
        var dialogHtml = '';
        dialogHtml += '<div class="dialogForm">';
        dialogHtml += '<div class="elem">';
        dialogHtml += '<h2>Odchodzisz? Zostaw swój e-mail <span><br> otrzymasz powiadomienia o nowościach na blogu<br>i rabatach na mój kurs programowania</span></h2>';
        dialogHtml += '</div>';
        dialogHtml += '<div class="elem">';
        dialogHtml += '<label for="email">Email: </label>';
        dialogHtml += '<input class="email" id="email" type="email" placeholder="Podaj swój e-mail" />';
        dialogHtml += '</div>';
        dialogHtml += '<div class="elem">';
        dialogHtml += '<input class="send-email" id="send-email" type="button" value="Wyślij" />';
        dialogHtml += '</div>';
        dialogHtml += '</div>';

        if (!$('.dialogForm').length) {
            dialogForm = $('body').append(dialogHtml).find('.dialogForm');
            isDialog = true;
        }

        dialogForm.find('#send-email').click(function () {
            sendMail();
        });

        dialogForm.find('#email').keypress(function (event) {
            if (event.keyCode == 13) {
                sendMail();
            }
        });

    });

    $(document).click(function (event) {
        if (!$(event.target).closest('.dialogForm').length) {
            dialogDestroy();
        }
    }).keyup(function (event) {
        if (event.keyCode == 27) {
            dialogDestroy();
        }
    });
});