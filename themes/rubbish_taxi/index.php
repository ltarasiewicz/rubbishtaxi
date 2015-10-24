<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
get_header(); ?>

<!-- JUMBOTRON -->
<div class="jumbotron cus_jumbotron blog-cus_jumbotron blogx">
    <div class="container jumbotron-content">
        <div class="row top-portion">
            <div class="jumbo-left-col">
                <?php if (function_exists(dynamic_sidebar('Banner Section For Blog Page'))) : ?>
                    <?php dynamic_sidebar('Banner Section For Blog Page'); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<!-- Main section -->
<div class="container main">
    <div class="row cus-page-header">
        <div class="col-xs-12 placeholder">
            <h1>Blog</h1>

            <div class="page-head-phone pull-right"><a href="#" target="_blank"> 02 9573 1112 <span class="hide_desk_or">or</span></a>
            </div>
            <a name="see_post"></a>

            <div class="get">
                <a href="<?php echo get_permalink(18); ?>" class="get-quote-btn btn btn-primary btn-lg col-sm-4"
                   data-toggle="modal" data-target="#myModal">Get A Quote</a>
            </div>

        </div>
    </div>

    <div class="row">
        <!-- blog-post -->
        <div class="col-xs-12 col-md-8 placeholder">
            <?php
            //Run the loop to output the posts.
            //* If you want to overload this in a child theme then include a file
            //* called loop-index.php and that will be used instead.
            if (is_single())
                get_template_part('loop', 'single');
            else
                get_template_part('loop', 'index');
            ?>
            <!-- pagination -->
            <!-- pagination -->
        </div>
        <!-- blog-post-->
    </div>
</div><!-- Main -->
<?php get_footer(); ?>
