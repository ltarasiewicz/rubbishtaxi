<?php 
/*Template Name: About Us*/
?>
<?php get_header(); ?>
<div class="jumbotron cus_jumbotron aboutUs-cus_jumbotron aboutx">
        <div class="about-us-before "></div>
        <!--<div class="about-us-after"></div>-->
        <div class="container jumbotron-content">
            <div class="row top-portion">
             <?php if ( function_exists ( dynamic_sidebar('Banner Section For About Page') ) ) : ?>
						<?php dynamic_sidebar ('Banner Section For About Page'); ?>
                        <?php endif; ?>   
            </div>
            <div class="row">
                <!-- jumbo-footer -->
                <div class="row jumbo-footer">
            	<!-- jumbo-footer -->
                <div class=" clearfix">
                	<div class="phone col-sm-4">
                			<?php echo get_post_meta($post->ID, 'phone', true); ?>	
                    	
                    </div>
                   <?php if ( function_exists ( dynamic_sidebar('Home Banner Below Section') ) ) : ?>
						<?php dynamic_sidebar ('Home Banner Below Section'); ?>
                        <?php endif; ?>
					

                    
            	</div>
            </div>
            </div>
        </div>
    </div>
<div class="container main">
        <div class="row cus-page-header ">
            <div class="col-xs-12 placeholder">
                <h1><?php echo get_the_title(22); ?></h1>
                <div class="page-head-phone"><?php echo get_post_meta($post->ID, 'phone_samll_device', true); ?></div>
                <div class="get">
                	<a  href="<?php echo get_permalink(18); ?>" class="get-quote-btn btn btn-primary btn-lg col-sm-4" data-toggle="modal" data-target="#myModal">Get A Quote</a>
					
				
                </div>
                
            </div>
        </div>
        
        <div class="row placeholders" style="border-bottom: 0px !important;">
            <div class="col-xs-12 placeholder">
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
        </div>
        
        <!-- who we are -->
        <div class="who-we-are" style="display:none;">
            <div class="row placeholders">
                <div class="col-xs-12 placeholder">
                    <h1 class="title-header1 text-center">Who we are</h1>
                    <div class="row">
                    <?php
					global $post;
					$args = array( 'numberposts' => 1, 'order'=> 'DESC');
					$myposts = get_posts( $args );
					$myposts = get_posts('numberposts=20&category=5');
					foreach( $myposts as $post  ) :
						setup_postdata($post);
						$getContent = get_the_content();
						$getContent = apply_filters('<p>'.the_content.'</p>', $getContent);
						$getContent = str_replace(']]>', ']]&gt;', $getContent);
					?>
                    
                        <div class="col-md-3 col-sm-6 placeholder about_person">
                            <div class="head-shot"><?php the_post_thumbnail('full'); ?></div>
                          <div class="member-title"><?php echo get_the_title(); ?></div>
                            <?php echo get_the_content(); ?>
                      </div>
                        
                     <?php endforeach;?>   
                        
                    </div>
                </div>
            </div>
        </div><!-- who we are-->
    </div>
<div class="container main border">
        <div class="row">
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