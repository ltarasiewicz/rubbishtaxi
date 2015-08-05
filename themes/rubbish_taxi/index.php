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
                    	<p class="pull-left"><?php echo strlen(substr(get_the_content(),0,110)) ?substr(strip_tags(get_the_content()),0,110).'&hellip;&nbsp;&nbsp;' : get_the_content().'&nbsp;&nbsp;'; ?></p>
                    	<a href="<?php echo get_permalink(); ?>" class="cus-link pull-right">Read more</a>
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
                <div class="page-head-phone"><a href="#" target="_blank"> 02 9573 1112 <span class="hide_desk_or">or</span></a></div>
                <a name="see_post"></a>
                <div class="get">
                	<a href="<?php echo get_permalink(18); ?>" class="get-quote-btn btn btn-primary btn-lg col-sm-4" data-toggle="modal" data-target="#myModal">Get A Quote</a>
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
			 if(is_single())
				get_template_part( 'loop', 'single' );
			else
			 	get_template_part( 'loop', 'index' );
			?>
			  
                <!-- pagination -->
                <!-- pagination -->
                
            </div><!-- blog-post-->
        </div>
    </div><!-- Main -->
    
    
     <div class="container main border">
        <div class="row">
            <div class="col-xs-12 placeholder">
            	
    		<div class="qutebox">
            	<span>If you have question call as</span>
            	<div class="page-head-phone add"><a href="#" target="_blank"> 9573 1112 </a></div>
            	<p>
The Rubbish Taxi offers obligation free onsite quotes to all of its customers. This allows us to provide you with a firm price for your rubbish </p>
            	<a data-target="#myModal" data-toggle="modal" class="get-quote-btn btn btn-primary btn-lg col-sm-4" href="<?php echo get_permalink(18); ?>">Get A Quote</a>
            </div>
    		</div>
   		 </div>
    </div>


	<?php /*?>	<div id="container">
			<div id="content" role="main">

			<?php
			 Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 
			 get_template_part( 'loop', 'index' );
			?><?php */?>
			<?php /*?></div><!-- #content -->
		</div><!-- #container --><?php */?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
