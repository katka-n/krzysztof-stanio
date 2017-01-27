/**
 * Created by kaska on 1/25/17.
 */

var activeWindow = $(location).attr('pathname');

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
            end = dc.length;
        }
    }
    // because unescape has been deprecated, replaced with decodeURI
    //return unescape(dc.substring(begin + prefix.length, end));
    return decodeURI(dc.substring(begin + prefix.length, end));
}

var myCookie = getCookie("okienko");

// tak ma być po naprawie POSTa maila do bazy
// if(activeWindow === "/" && myCookie === null || activeWindow === "/kurs" && myCookie === null ){
if (activeWindow === "/" || activeWindow === "/kurs") {
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

                console.info(111111);
                // var token = "{{ csrf_token() }}";
                console.log(input.val());
                $.post( "/mailing", {
                    'email' : input.val()
                });

                console.info(12324242143);

                // console.info(111111);
                // var token = dialogForm.find('#csrf-token').val();
                // $.ajax({
                //     type: "POST",
                //     url: "/mailing",
                //     data: {
                //         'email': input.val(),
                //         '_token': token
                //     }
                //
                // })
                // console.log(input.val());
            }
        }

        $('body').mouseleave(function () {
            if (isDialog) {
                return;
            }
            var dialogHtml = '';
            dialogHtml += '<div class="dialogForm">';
            dialogHtml += '<div class="elem">';
            // dialogHtml += '<meta name="csrf-token" content="{{ csrf_token() }}" />';
            dialogHtml += '<h2>Odchodzisz? Zostaw swój e-mail <span><br> otrzymasz powiadomienia<br>o nowych wpisach i rabatach na kurs</span></h2>';
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

        function createCookie(name, value, days) {
            var date, expires;
            if (days) {
                date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            } else {
                expires = "";
            }
            document.cookie = name + "=" + value + expires + "; path=/";
        }

        createCookie('okienko', 1, 60);
    });


} else {
    console.log('');
}
