(function($, window) {
    $(function() {
        //課題1
        $('h2').remove();

        //課題2：html()メソッドとtext()メソッドの違い
//        $('#index').html('jQueryの<span class="title">htmlメソッド</span>で書き換え');
//        $('#index').text('jQueryの<span class="title">htmlメソッド</span>で書き換え');

        //課題3
        $('#index').append("<li>メソッド</li>");

        //課題4～5
        $('#index').find('li').each(function() {
            alert($(this).text().length);
            //下記2行が課題5
            var s = $(this).text().length;
            $(this).append("[" + s + "文字]");
        });
    });
})(jQuery, window);