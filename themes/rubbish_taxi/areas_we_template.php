<?php 
/*Template Name: Areas We Service*/
?>
<?php get_header(); ?>
<div class="jumbotron cus_jumbotron service-area-cus_jumbotron areax">
    	<div class="container jumbotron-content">
        	<div class="row top-portion">
            <?php if ( function_exists ( dynamic_sidebar('Banner Section For Areas We Service Page') ) ) : ?>
						<?php dynamic_sidebar ('Banner Section For Areas We Service Page'); ?>
                        <?php endif; ?> 
            
            </div>
            <div class="row">
            	<!-- jumbo-footer -->
                <div class="jumbo-footer clearfix">
                    <?php if ( function_exists ( dynamic_sidebar('Home Banner Below Section') ) ) : ?>
						<?php dynamic_sidebar ('Home Banner Below Section'); ?>
                        <?php endif; ?>
					

                    
            	</div>
            </div>
        </div>
    </div>
<div class="container main">
<div class="row cus-page-header">
<div class="col-xs-12 placeholder">
<h1><?php echo get_the_title(60); ?></h1>
<div class="page-head-phone"><a href="#" target="_blank">02 9573 1112 <span class="hide_desk_or">or</span></a></div>
<div class="get">
<a href="<?php echo get_permalink(18); ?>" class="get-quote-btn btn btn-primary btn-lg col-sm-4" data-toggle="modal" data-target="#myModal">Get A Quote</a>
</div>
</div>
</div>
 <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php if ( is_front_page() ) { ?>
						<?php /*?><h2><?php the_title(); ?></h2><?php */?>
					<?php } else { ?>
						<?php /*?><h1><?php the_title(); ?></h1><?php */?>
					<?php } ?>

					<?php the_content(); ?>
				<?php /*?><?php comments_template( '', true ); ?><?php */?>

		<?php endwhile; ?>       
    </div>
<div class="container main border">
        <div class="row  ">
            <div class="col-xs-12 placeholder">
            	
    		<div class="qutebox">
            	<?php if ( function_exists ( dynamic_sidebar('About Below Section') ) ) : ?>
						<?php dynamic_sidebar ('About Below Section'); ?>
                        <?php endif; ?>
            </div>
    		</div>
   		 </div>
    </div>
<?php get_footer(); ?>