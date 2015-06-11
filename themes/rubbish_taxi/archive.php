<?php
/**
 * The template for displaying Archive pages.
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		    <div class="jumbotron cus_jumbotron blog-cus_jumbotron blogx">
    	<div class="container jumbotron-content">
        	<div class="row top-portion">
            	<div class="jumbo-left-col">
                	<?php if ( function_exists ( dynamic_sidebar('Banner Section For Blog Page') ) ) : ?>
					<?php dynamic_sidebar ('Banner Section For Blog Page'); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
            	<!-- jumbo-footer -->
                <div class="jumbo-footer clearfix">
                	<?php
global $post;

$myposts = get_posts( $args );
$myposts = get_posts('numberposts=1&category=1');
foreach( $myposts as $post  ) :
	setup_postdata($post);
	$getContent = get_the_content();
	$getContent = apply_filters('<p>'.the_content.'</p>', $getContent);
	$getContent = str_replace(']]>', ']]&gt;', $getContent);
?>
                	<h2><?php echo get_the_title();?></h2>
                    <div class="text">
                    	<p class="pull-left"><?php echo strlen(substr(get_the_content(),0,110)) ?substr(get_the_content(),0,110).'&hellip;&nbsp;&nbsp;' : get_the_content().'&nbsp;&nbsp;'; ?></p>
                    	<a href="<?php the_permalink(); ?>" class="cus-link pull-right">Read more</a>
                    </div>
                    <?php endforeach;?>
            	</div>
            </div>
        </div>
    </div>
    
	<!-- Main section -->
    <div class="container main">
    	<div class="row cus-page-header">
        	<div class="col-xs-12 placeholder">
            	<h1>Blog</h1>
                <div class="page-head-phone"><a href="tel:0415 826 946" target="_blank"> 0415 826 946 <span class="hide_desk_or">or</span></a></div>
                
                <div class="get">
                	<a href="<?php echo get_permalink(18); ?>" class="get-quote-btn btn btn-primary btn-lg col-sm-4" data-toggle="modal" data-target="#myModal">Get A Quote</a>
                </div>
                
            </div>
        </div>
        
        <div class="row">
        	<!-- blog-post -->
        	<div class="col-xs-12 col-md-8 placeholder">

<?php
	/* Queue the first post, that way we know
	 * what date we're dealing with (if that is the case).
	 *
	 * We reset this later so we can run the loop
	 * properly with a call to rewind_posts().
	 */
	if ( have_posts() )
		the_post();
?>

			<h1 class="page-title">
<?php if ( is_day() ) : ?>
				<?php printf( __( 'Daily Archives: <span>%s</span>', 'twentyten' ), get_the_date() ); ?>
<?php elseif ( is_month() ) : ?>
				<?php printf( __( 'Monthly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'twentyten' ) ) ); ?>
<?php elseif ( is_year() ) : ?>
				<?php printf( __( 'Yearly Archives: <span>%s</span>', 'twentyten' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentyten' ) ) ); ?>
<?php else : ?>
				<?php _e( 'Blog Archives', 'twentyten' ); ?>
<?php endif; ?>
			</h1>

<?php
	/* Since we called the_post() above, we need to
	 * rewind the loop back to the beginning that way
	 * we can run the loop properly, in full.
	 */
	rewind_posts();

	/* Run the loop for the archives page to output the posts.
	 * If you want to overload this in a child theme then include a file
	 * called loop-archive.php and that will be used instead.
	 */
	 get_template_part( 'loop', 'archive' );
?>

		</div><!-- blog-post-->
            
            <!-- archives -->
            <div class="col-xs-3 col-md-3  col-xs-offset-1 blog_right_bar">
          		<div class="archives placeholder">
                    <?php if ( function_exists ( dynamic_sidebar('Archive Section') ) ) : ?>
					<?php dynamic_sidebar ('Archive Section'); ?>
                    <?php endif; ?>
                </div>
            </div><!-- archives -->
        </div>
        
        
        
    </div><!-- Main -->
    
    
     <div class="container main border">
        <div class="row">
            <div class="col-xs-12 placeholder">
            	
    		<div class="qutebox">
            	<span>If you have question call as</span>
            	<div class="page-head-phone add"><a href="tel:0415 826 946" target="_blank"> 0415 826 946 </a></div>
            	<p>
The Rubbish Taxi offers obligation free onsite quotes to all of its customers. This allows us to provide you with a firm price for your rubbish </p>
            	<a data-target="#myModal" data-toggle="modal" class="get-quote-btn btn btn-primary btn-lg col-sm-4" href="<?php echo get_permalink(18); ?>">Get A Quote</a>
            </div>
    		</div>
   		 </div>
    </div>
<?php get_footer(); ?>
