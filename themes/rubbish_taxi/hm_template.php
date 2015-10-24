<?php
/*Template Name: Home Template*/
get_header();
$testimonials = get_posts(array('post_type' => 'testimonial', 'posts_per_page' => -1));
?>
    <div class="jumbotron cus_jumbotron adj">
        <div class="cus_jumbotron_bg">
            <!--<div class="rubbishAfter"></div>-->
            <div class="container jumbotron-content ">
                <div class="row top-portion add_none">
                    <div class=" col-sm-8 home_inner_banner">
                        <h1><?php echo get_post_meta($post->ID, 'heading', true); ?></h1>

                        <div class=" col-sm-12">
                            <div class="placeholder clearfix">
                                <div
                                    class="phone col-sm-10"> <?php echo get_post_meta($post->ID, 'phone', true); ?> </div>
                                <div class="col-sm-5 clearfix">
                                    <?php if (function_exists(dynamic_sidebar('Home Banner Section'))) : ?>
                                        <?php dynamic_sidebar('Home Banner Section'); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-4">
                        <div class="placeholder clearfix">
                            <?php if (function_exists(dynamic_sidebar('Why Choose The Rubbish Taxi'))) : ?>
                                <?php dynamic_sidebar('Why Choose The Rubbish Taxi'); ?>
                            <?php endif; ?>
                        </div>
                        <div class="placeholder clearfix services">
                            <?php if (function_exists(dynamic_sidebar('Services Section'))) : ?>
                                <?php dynamic_sidebar('Services Section'); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="row jumbo-footer">
                    <!-- jumbo-footer -->
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
                    <div class="page-head-phone pull-right">
                        <?php echo get_post_meta($post->ID, 'phone_samll_device', true); ?>
                    </div>
                    <div class="get">
                        <a href="#" data-toggle="modal" data-target="#quoteModal" target="_blank" class="get-quote-btn">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="inner-section">
                    <?php the_content(); ?>
                    <a href="#" data-toggle="modal" data-target="#quoteModal" target="_blank" class="get-quote-btn">Get A Quote</a>
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