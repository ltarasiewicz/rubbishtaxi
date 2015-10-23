<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<div class="container footer <?php if ('area' === get_post_type() || 'service' === get_post_type() || is_front_page()) { echo 'no-border'; } ?>">
    <footer>
        <div class="row ">
            <div class="col-sm-3">
                <div class="footer-partial">
                    <?php get_template_part('partials/services', 'footer'); ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-partial">
                    <?php get_template_part('partials/areas', 'footer'); ?>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="footer-partial">
                    <?php get_template_part('partials/articles', 'footer'); ?>
                </div>
            </div>
            <div class="col-sm-3">
                <?php if ( function_exists ( dynamic_sidebar('Follow Section') ) ) : ?>
                    <?php dynamic_sidebar ('Follow Section'); ?>
                <?php endif; ?>
            </div>
        </div>
    </footer>
    <div class="row">
        <div class="col-sm-12">
            <div class="sub-footer">
                <?php

                $defaults = array(
                    'theme_location' => 'footer-menu',
                    'menu' => '',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul class="ftr_nav">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );

                wp_nav_menu($defaults);

                $defaults = array(
                    'theme_location' => 'footer-menu-mobile',
                    'menu' => '',
                    'container' => '',
                    'container_class' => '',
                    'container_id' => '',
                    'menu_class' => '',
                    'menu_id' => '',
                    'echo' => true,
                    'fallback_cb' => 'wp_page_menu',
                    'before' => '',
                    'after' => '',
                    'link_before' => '',
                    'link_after' => '',
                    'items_wrap' => '<ul class="text_centre">%3$s</ul>',
                    'depth' => 0,
                    'walker' => ''
                );
                wp_nav_menu($defaults);
                ?>
            </div>
        </div>
    </div>

</div><!-- Footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript" src="../../wp-content/themes/rubbish_taxi/js/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            directionNav: false
        });
    }
</script>
<?php wp_footer(); ?>

<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-57Q7K6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>
    (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(), event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            '//www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-57Q7K6');
</script>
<!-- End Google Tag Manager -->
</body>
</html>