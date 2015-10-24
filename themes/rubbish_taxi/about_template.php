<?php
/*Template Name: About Us*/
?>
<?php get_header(); ?>
<div class="header about-us">
    <h1><?php echo get_the_title(22); ?></h1>
</div>
<div class="container main">
    <div class="row cus-page-header ">
        <div class="col-xs-12 placeholder">
            <div class="inner-section">
                <div class="row">
                    <div class="quote-block col-sm-8">
                        <p>
                            <small>
                                Rubbish Taxi offers obligation free onsite quotes to all its customers.
                                This allows us to provide you with a firm price for your rubbish removal job.
                            </small>
                        </p>
                        <a href="#" data-toggle="modal" data-target="#quoteModal" target="_blank" class="get-quote-btn">Get
                            A Quote</a>
                    </div>
                    <div class="call-block col-sm-4">
                        <p>
                            <small>If you have any questions, give us a call</small>
                        </p>
                        <div class="page-head-phone pull-right">
                            <p>02 9573 1112</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row placeholders" style="border-bottom: 0px !important;">
        <div class="col-xs-12 placeholder">
            <?php if (have_posts()) while (have_posts()) : the_post(); ?>
                <?php if (is_front_page()) { ?>
                    <?php /*?><h2><?php the_title(); ?></h2><?php */ ?>
                <?php } else { ?>
                    <?php /*?><h1><?php the_title(); ?></h1><?php */ ?>
                <?php } ?>

                <?php the_content(); ?>
                <?php /*?><?php comments_template( '', true ); ?><?php */ ?>

            <?php endwhile; ?>
        </div>
    </div>

    <!-- who we are -->
    <div class="who-we-are" style="display:none;">
        <div class="row placeholders">
            <div class="col-xs-12 placeholder">
                <h1 class="text-center">Who we are</h1>

                <div class="row">
                    <?php
                    global $post;
                    $args = array('numberposts' => 1, 'order' => 'DESC');
                    $myposts = get_posts($args);
                    $myposts = get_posts('numberposts=20&category=5');
                    foreach ($myposts as $post) :
                        setup_postdata($post);
                        $getContent = get_the_content();
                        $getContent = apply_filters('<p>' . the_content . '</p>', $getContent);
                        $getContent = str_replace(']]>', ']]&gt;', $getContent);
                        ?>

                        <div class="col-md-3 col-sm-6 placeholder about_person">
                            <div class="head-shot"><?php the_post_thumbnail('full'); ?></div>
                            <div class="member-title"><?php echo get_the_title(); ?></div>
                            <?php echo get_the_content(); ?>
                        </div>

                    <?php endforeach; ?>

                </div>
            </div>
        </div>
    </div>
    <!-- who we are-->
</div>
<div class="container main border">
    <div class="row">
        <div class="col-xs-12 placeholder">

            <div class="qutebox">
                <?php if (function_exists(dynamic_sidebar('About Below Section'))) : ?>
                    <?php dynamic_sidebar('About Below Section'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>   