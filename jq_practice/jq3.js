(function($, window) {
    $(function() {
        // 課題1
        $('body').on('click', function() {
            $('#click_me').css({'color': 'red'});
        });

        //課題2
        $('#login').on('click', function(e) {
            checkEmail();
            checkPassword();
        });

        function checkEmail(){
            var email = $('#email').val();
            if (email == '') {
                alert('メールアドレスを入力してください');
            } else if (email.indexOf('@') < 0) {
                alert('メールアドレスには必ず「@」が必要です');
            }
        }
        function checkPassword(){
            var password = $('#password').val();
            if (password == '') {
                alert('パスワードを入力してください');
            } else if (password.length < 6) {
                alert('パスワードは6文字以上です');
            }
        }

 
        //課題3
        alert('first');
        $('#get_bank_list').on('click', function(e) {
            alert('click');
            var url = 'https://raw.githubusercontent.com/zengin-code/source-data/master/data/banks.json';

            $.getJSON(url, {}, function(){
            }).done(function(data, status, xhr) {
                alert('done');
                var result = JSON.stringify(data);
                $('#result').val(result);
            }).fail(function(data, status, err) {
                alert('fail');
                var result = JSON.stringify(data);
                $('#result').val(result);
            }).always(function() {
                alert('always');
            });
            alert('under ajax');
        });
        alert('last');


        //課題5~6
        $('#zip').jpostal({
            click : '#btn_post',
            postcode : [
                '#zip'
            ],
            address : {
                '#pref'  : '%3',
                '#city'  : '%4',
                '#street'  : '%5'
            }
        });        
    });
})(jQuery, window);