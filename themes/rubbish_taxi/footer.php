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
<div class="container footer <?php if ('area' === get_post_type()) { echo 'no-border'; } ?>">
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

                ?>
                <!--<ul class="ftr_nav">
                    <li class="pad-left-remove "><a href="#">WHATRUBBISH? FUND</a></li>
                    <li><a href="#">TERMS &amp; CONDITION</a></li>
                    <li><a href="#">FAQS</a></li>
                     <li class=""><a href="services.html">SERVICES</a></li>
                    <li class=""><a href="service-area.html">Areas we Service</a></li>
                    <li class=""><a href="blog.html">Blog</a></li>
                    <li class="border-right-remove pad-right-remove hidden_mobile"><a href="contact.html">CONTACT US</a></li>
                </ul>-->
                <?php

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
                <!--<ul class="text_centre">
                    <li class=""><a href="#">WHATRUBBISH? FUND</a></li>
                    <li><a href="#">TERMS &amp; CONDITION</a></li>
                    <li><a href="#">FAQS</a></li>
                </ul>-->
            </div>
        </div>
    </div>

</div><!-- Footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        /*
         *  Simple image gallery. Uses default settings
         */

        $('.fancybox').fancybox();

        /*
         *  Different effects
         */

        // Change title type, overlay closing speed
        $(".fancybox-effects-a").fancybox({
            helpers: {
                title: {
                    type: 'outside'
                },
                overlay: {
                    speedOut: 0
                }
            }
        });

        // Disable opening and closing animations, change title type
        $(".fancybox-effects-b").fancybox({
            openEffect: 'none',
            closeEffect: 'none',

            helpers: {
                title: {
                    type: 'over'
                }
            }
        });

        // Set custom style, close if clicked, change title type and overlay color
        $(".fancybox-effects-c").fancybox({
            wrapCSS: 'fancybox-custom',
            closeClick: true,

            openEffect: 'none',

            helpers: {
                title: {
                    type: 'inside'
                },
                overlay: {
                    css: {
                        'background': 'rgba(238,238,238,0.85)'
                    }
                }
            }
        });

        // Remove padding, set opening and closing animations, close if clicked and disable overlay
        $(".fancybox-effects-d").fancybox({
            padding: 0,

            openEffect: 'elastic',
            openSpeed: 150,

            closeEffect: 'elastic',
            closeSpeed: 150,

            closeClick: true,

            helpers: {
                overlay: null
            }
        });

        /*
         *  Button helper. Disable animations, hide close button, change title type and content
         */

        $('.fancybox-buttons').fancybox({
            openEffect: 'none',
            closeEffect: 'none',

            prevEffect: 'none',
            nextEffect: 'none',

            closeBtn: false,

            helpers: {
                title: {
                    type: 'inside'
                },
                buttons: {}
            },

            afterLoad: function () {
                this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
            }
        });


        /*
         *  Thumbnail helper. Disable animations, hide close button, arrows and slide to next gallery item if clicked
         */

        $('.fancybox-thumbs').fancybox({
            prevEffect: 'none',
            nextEffect: 'none',

            closeBtn: false,
            arrows: false,
            nextClick: true,

            helpers: {
                thumbs: {
                    width: 50,
                    height: 50
                }
            }
        });

        /*
         *  Media helper. Group items, disable animations, hide arrows, enable media and button helpers.
         */
        $('.fancybox-media')
            .attr('rel', 'media-gallery')
            .fancybox({
                openEffect: 'none',
                closeEffect: 'none',
                prevEffect: 'none',
                nextEffect: 'none',

                arrows: false,
                helpers: {
                    media: {},
                    buttons: {}
                }
            });

        /*
         *  Open manually
         */

        $("#fancybox-manual-a").click(function () {
            $.fancybox.open('1_b.jpg');
        });

        $("#fancybox-manual-b").click(function () {
            $.fancybox.open({
                href: 'iframe.html',
                type: 'iframe',
                padding: 5
            });
        });

        $("#fancybox-manual-c").click(function () {
            $.fancybox.open([
                {
                    href: '1_b.jpg',
                    title: 'My title'
                }, {
                    href: '2_b.jpg',
                    title: '2nd title'
                }, {
                    href: '3_b.jpg'
                }
            ], {
                helpers: {
                    thumbs: {
                        width: 75,
                        height: 50
                    }
                }
            });
        });


    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $.smoothAnchors("slow");
    });
</script>
<?php
/* Always have wp_footer() just before the closing </body>
 * tag of your theme, or you will break many plugins, which
 * generally use this hook to reference JavaScript files.
 */

wp_footer();
?>

<!-- Google Tag Manager -->
<noscript>
    <iframe src="//www.googletagmanager.com/ns.html?id=GTM-57Q7K6"
            height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<script>(function (w, d, s, l, i) {
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
    })(window, document, 'script', 'dataLayer', 'GTM-57Q7K6');</script>
<!-- End Google Tag Manager -->

</body>
</html>