;(function ($) {
    $(document).ready(function(){
        $(window).scroll(function(){
            if ($(this).scrollTop() > 200) {
                $('#main-menu-index').addClass('shown');
            } else {
                $('#main-menu-index').removeClass('shown');
            }
        });

        var cmenu = $('.header--nav li.current_page_item a');

        if (cmenu.length > 0) {
            cmenu.addClass('active');
        }

        var $lang = $('a[hreflang]');
        $lang.html($lang.html().replace(/&nbsp;/g, ''));
        $lang.addClass('lang-switcher');

        $('#form-send-email').submit(function(e) {
            $(this).ajaxSubmit({
                type: 'POST',
                url: '/wp-admin/admin-ajax.php',
                data: $('#form-send-email').serialize(),
                success: function (res) {
                    console.log(res);
                }
            });
            return false;
        });

        $('.wpcf7-submit').addClass('btn btn-success');
    });
}(jQuery));
