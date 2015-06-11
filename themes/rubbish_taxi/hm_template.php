<?php 
/*Template Name: Home Template*/
get_header();
?>
<div class="jumbotron cus_jumbotron adj">
  <div class="cus_jumbotron_bg"> 
    <!--<div class="rubbishAfter"></div>-->
    <div class="container jumbotron-content ">
      <div class="row top-portion add_none">
        <div class=" col-sm-8 home_inner_banner">
          <h1><?php echo get_post_meta($post->ID, 'heading', true); ?></h1>
          <!-- <form name="confrm" action="<?php echo get_option('home'); ?>/contact_feedback.php"  method="post" onSubmit="return contactfrm();">
            <div class="col-xs-4 step1 step11">
              <h1>1</h1>
              <div class="contact-content">
                <h2>Fill in your details</h2>
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Email Address">
                </div>
                <div class="form-group">
                  <input type="text" name="postcode" class="form-control" placeholder="Postcode">
                </div>
                <div class="form-group">
                  <input type="text" name="pno" class="form-control" placeholder="Phone">
                </div>
              </div>
            </div>
            <div class="col-xs-4 step2 step11" style="opacity: inherit;!important">
              <h1>2</h1>
              <div class="contact-content">
                <h2>Select Service</h2>
                <div class="checkbox" style="background:#fff;padding: 4px;">
                  <label>                                    
                    <input name="service[]" type="checkbox" value="Rubbish removal" />
                    Rubbish removal </label>                 
                </div>                                       
                <div class="checkbox" style="background:#fff;padding: 4px;">
                  <label>                                    
                    <input type="checkbox" name="service[]" value="Deceased Estates">
                    Deceased Estates </label>                
                </div>                                       
                <div class="checkbox" style="background:#fff;padding: 4px;">
                  <label>                                    
                    <input type="checkbox" name="service[]" value="Demolition Services">
                    Demolition Services </label>             
                </div>                                       
                <div class="checkbox" style="background:#fff;padding: 4px;">
                  <label>
                    <input type="checkbox" name="service[]" value="Commercial & Industrial Strip-outs">
                    Commercial & Industrial Strip-outs </label>
                </div>
              </div>
            </div>
	
            <div class="col-xs-4 step3 step11" style="opacity: inherit;!important">
              <h1>3</h1>
              <div class="contact-content">
                <h2>Comments</h2>
                <div class="form-group">
                  <textarea class="form-control" name="commands" id="comment-area" rows="4" cols="3"></textarea>
                </div>
                <input type="submit" class="btn-submit">
              </div>
            </div>
          </form>-->
           <div class=" col-sm-12">
              <div class="placeholder clearfix">
                <div class="phone col-sm-10"> <?php echo get_post_meta($post->ID, 'phone', true); ?> </div>
                  <div class="col-sm-5 clearfix">
                  <?php if ( function_exists ( dynamic_sidebar('Home Banner Section') ) ) : ?>
                    <?php dynamic_sidebar ('Home Banner Section'); ?>
                  <?php endif; ?>
                  </div>
              </div>
            </div>
        </div>
        <div class=" col-sm-4">
          <div class="placeholder clearfix">
            <?php if ( function_exists ( dynamic_sidebar('Why Choose The Rubbish Taxi') ) ) : ?>
            <?php dynamic_sidebar ('Why Choose The Rubbish Taxi'); ?>
            <?php endif; ?>
          </div>
          <div class="placeholder clearfix services">
            <?php if ( function_exists ( dynamic_sidebar('Services Section') ) ) : ?>
            <?php dynamic_sidebar ('Services Section'); ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="row jumbo-footer"> 
        <!-- jumbo-footer -->
        <div class=" clearfix">
          <div class="phone col-sm-4"> <?php //echo get_post_meta($post->ID, 'phone', true); ?> </div>
          <?php //if ( function_exists ( dynamic_sidebar('Home Banner Below Section') ) ) : ?>
          <?php //dynamic_sidebar ('Home Banner Below Section'); ?>
          <?php //endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container main">
  <div class="row cus-page-header">
    <div class="col-sm-12 placeholder">
      <div class="page-head-phone">
	  <?php /* ?><?php 
	  global $is_IE;
	  if(!$is_IE){  
	  ?>
	  <a href="tel:02 9573 1112" >9573 1112</a>
	  <?php } else { ?> 
	  <a href="javascript:void(0)">9573 1112</a>
	  <?php } ?> <?php */ ?>
	  
		<?php
		/* if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'mobile') || strstr(strtolower($_SERVER['HTTP_USER_AGENT']), 'android')) {
		   echo '<a href="tel:9573 1112" >9573 1112</a>';
		}else{
		   echo '0415 826 946';
		} */
		?>
	  
	  <?php echo get_post_meta($post->ID, 'phone_samll_device', true); ?> </div>
      <div class="get"> <a href="<?php echo get_permalink(18); ?>" target="_blank" class="get-quote-btn">Get A Quote</a> </div>
    </div>
  </div>
  <div class="row">
    <div class="placeholder">
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
  <div class="container main">
  <div class="row placeholders"><a href="<?php echo get_permalink(18); ?>" target="_blank" class="get-quote-btn">Get A Quote</a></div>
  <div class="placeholder clearfix services add">
    <?php if ( function_exists ( dynamic_sidebar('Services Section') ) ) : ?>
    <?php dynamic_sidebar ('Services Section'); ?>
    <?php endif; ?>
  </div>
  
  <div class="row placeholders testimonial">
    <div class="clearfix">
      <div class="col-sm-12 placeholder">
        <h1 class="title-header1 text-center">Testimonials</h1>
      </div>
    </div>
    <div class="clearfix test-content-holder">
      <div class="row">
        <?php
				global $post;
				
				$myposts = get_posts( $args );
				$myposts = get_posts('numberposts=2&category=4');
				foreach( $myposts as $post  ) :
					setup_postdata($post);
					$getContent = get_the_content();
					$getContent = apply_filters('<p>'.the_content.'</p>', $getContent);
					$getContent = str_replace(']]>', ']]&gt;', $getContent);
				?>
        <div class="col-lg-6 placeholder">
          <blockquote class="style1"> <div> <?php echo get_the_content(); ?> <em class="text-right"><?php echo get_the_title(); ?></em> </div> </blockquote>
        </div>
        <?php endforeach;?>
      </div>
    </div>
  </div>
  </div>
</div>
<?php get_footer(); ?>