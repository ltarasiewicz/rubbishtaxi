<?php
/*Template Name: Home Template*/
get_header();
$testimonials = get_posts(array('post_type' => 'testimonial', 'posts_per_page' => -1));

$args = array(
    'post_type' => 'service',
    'posts_per_page' => 4,
    'status' => 'publish'
);

$services = get_posts($args);

?>
    <div class="jumbotron cus_jumbotron adj">
        <div class="cus_jumbotron_bg">
                <div class="row jumbo-footer">
                    <h1>Rubbish Removal Sydney</h1>
                    <div class=" clearfix">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container main">
        <div class="row">
            <div class="col-sm-12 placeholder">
                <div class="inner-section">
                    <div class="row">
                        <div class="col-sm-4">
                            <h3>Why choose the rubbish taxi?</h3>
                            <p>You won't find a friendlier, more reliable rubbish removal company anywhere in Sydney.</p>
                            <a href="http://rubbishtaxi.com.au/about-us/" class="cus-link">Read more</a>
                        </div>
                        <div class="col-sm-4">
                            <h3>Services</h3>
                            <ul class="list-unstyled">
                                <?php foreach ($services as $service) : ?>
                                    <li>
                                        <a class="cus-link" href="<?php echo get_permalink($service->ID) ?>"><?php echo $service->post_title; ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-block">
                                <p>If you have any questions call</p>
                                <div class="page-head-phone clearfix">
                                    <p>02 9573 1112</p>
                                </div>
                                <a href="#" data-toggle="modal" data-target="#quoteModal" target="_blank" class="get-quote-btn">Get A Quote</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="inner-section">
                    <?php the_content(); ?>
                    <div class="row">
                        <div class="hp-icons-block">
                            <div class="col-xs-4 text-center">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/dist/ico1.png"/>
                                <h3><strong>TRUSTED AND<br/>PROFESSIONAL</strong></h3>
                            </div>
                            <div class="col-xs-4 text-center">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/dist/ico2.png"/>
                                <h3><strong>FULLY INSURED</strong></h3>
                            </div>
                            <div class="col-xs-4 text-center">
                                <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/dist/ico3.png"/>
                                <h3><strong>WE RECYCLE</strong></h3>
                            </div>
                        </div>
                    </div>
                    <div class="bottom-content">
                        <?php echo types_render_field('content-below-icons'); ?><a class="cus-link" href="<?php echo site_url() ?>/what-rubbish/">&nbsp;Read more</a>
                    </div>
                    <a href="#" data-toggle="modal" data-target="#quoteModal" target="_blank" class="get-quote-btn pull-right">Get A Quote</a>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-xs-12">
                        <h2>Testimonials</h2>
                        <div class="flexslider testimonials">
                            <ul class="slides">
                                <?php foreach ($testimonials as $testimonial) : ?>
                                    <li>
                                        <div class="testimonial">
                                            <p>
                                                <i class="fa fa-quote-left"></i><em><?php echo $testimonial->post_content ?></em>
                                                <i class="fa fa-quote-right"></i>
                                            </p>

                                            <p class="pull-right">
                                                <small><em><?php echo $testimonial->post_title ?></em></small>
                                            </p>
                                        </div>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </div>

                </div>

        </div>
    </div>
<?php get_footer(); ?>