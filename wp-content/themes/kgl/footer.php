<footer class=footer>
    <div class=footer-consult>
        <div class=container>
            <div class=col-xs-12><a href=# data-toggle=modal data-target=#myModal><?php pll_e('Записаться на бесплатную консультацию');?></a>
            </div>
        </div>
    </div>
    <div class=footer-main>
        <div class=container>
            <div class=row>
                <div class="footer-body clearfix">
                    <div class=col-md-3><img
                            src=<?php echo esc_url(get_template_directory_uri()); ?>/images/KGL-logo-white.png height=60
                            width=120>

                        <p class=copy>&copy; 2013-2015 Korea Green Life <br><? pll_e('Все права защищены'); ?></p></div>
                    <div class="col-md-2 col-sm-6 no-paddings">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer1',
                            'menu_class' => '',
                            'container' => 'nav',
                            'container_class' => 'footer-nav'
                        )); ?>
                    </div>
                    <div class="col-md-2 col-sm-6 no-paddings">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'footer2',
                            'menu_class' => '',
                            'container' => 'nav',
                            'container_class' => 'footer-nav'
                        )); ?>
                    </div>
                    <div class=col-md-3>
                        <?php get_search_form(); ?>
                        <ul class=social>
                            <li><a href="<?php echo do_shortcode('[shortcode-variables slug="twitter_link"]'); ?>" target="_blank"><span class="icon icon-twitter"></span></a></li>
                            <li><a href="<?php echo do_shortcode('[shortcode-variables slug="facebook_link"]'); ?>" target="_blank"><span class="icon icon-fb"></span></a></li>
                            <li><a href="<?php echo do_shortcode('[shortcode-variables slug="vk_link"]'); ?>" target="_blank"><span class="icon icon-vk"></span></a></li>
                            <li><a href="<?php echo do_shortcode('[shortcode-variables slug="mir_link"]'); ?>" target="_blank"><span class="icon icon-mir"></span></a></li>
                            <li><a href="<?php echo do_shortcode('[shortcode-variables slug="ok_link"]'); ?>" target="_blank"><span class="icon icon-ok"></span></a></li>
                        </ul>
                    </div>
                    <img class=tiger src=<?php echo esc_url(get_template_directory_uri()); ?>/images/tiger.png></div>
            </div>
        </div>
    </div>
</footer>
<div class="modal  fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <?php
                if (get_locale() == 'en') :
                    echo do_shortcode('[contact-form-7 id="135" title="Contact form English"]');
                else :
                    echo do_shortcode('[contact-form-7 id="136" title="Contact form Russian"]');
                endif;
            ?>
<!--            <form method="post" action="#" id="form-send-email" enctype="multipart/form-data">-->
<!--                <div class="modal-header">-->
<!--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>-->
<!--                    <h4 class="modal-title" id="myModalLabel">Записаться на бесплатную консультацию</h4>-->
<!--                </div>-->
<!--                <div class="modal-body">-->
<!---->
<!--                    <div class="form-group">-->
<!--                        <label for="name" class="control-label">Имя:</label>-->
<!--                        <input type="text" class="form-control" id="name" name="full_name">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="email" class="control-label">Почта:</label>-->
<!--                        <input type="email" class="form-control" id="email" name="email">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="tel" class="control-label">Почта:</label>-->
<!--                        <input type="tel" class="form-control" id="tel" name="phone">-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="message-text" class="control-label">Текстовое поле:</label>-->
<!--                        <textarea class="form-control" id="message-text" rows="4" name="message"></textarea>-->
<!--                    </div>-->
<!--                    <div class="form-group">-->
<!--                        <label for="file" class="control-label">Прикрепить файл:</label>-->
<!--                        <input type="file" class="form-control" id="file" name="file">-->
<!--                    </div>-->
<!--                    <input type="hidden" name="action" value="contact_form" />-->
<!--                </div>-->
<!--                <div class="modal-footer">-->
<!--                    <button type="button" class="btn btn-default" data-dismiss="modal">Отменить</button>-->
<!--                    <button class="btn btn-success">Отправить</button>-->
<!--                </div>-->
<!--            </form>-->
        </div>
    </div>
</div>
<script>
    (function (b, o, i, l, e, r) {
        b.GoogleAnalyticsObject = l
        b[l] || (b[l] =
            function () {
                (b[l].q = b[l].q || []).push(arguments)
            });
        b[l].l = +new Date;
        e = o.createElement(i);
        r = o.getElementsByTagName(i)[0];
        e.src = 'https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e, r)
    }(window, document, 'script', 'ga'));
    ga('create', 'UA-XXXXX-X');
    ga('send', 'pageview');
</script>
<script src=<?php echo esc_url(get_template_directory_uri()); ?>/scripts/vendor.js></script>
<script src=<?php echo esc_url(get_template_directory_uri()); ?>/scripts/jquery.form.js></script>
<script src=<?php echo esc_url(get_template_directory_uri()); ?>/scripts/plugins.js></script>
<script src=<?php echo esc_url(get_template_directory_uri()); ?>/scripts/main.js></script>
<?php wp_footer(); ?>

</body>
</html>
