<?php 
/*Template Name: Contact Us*/
?>
<?php get_header(); ?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>
$(document).ready(function () {

	function checkCount(){
		//var total = 0;
		return $.find('input[value!=""]').length;    
		///return total;
	}
 $(".contact-content").children('div.checkbox').find(':checkbox').click(function () {
	 $('div.step1image').css('display', 'none');
	 $('div.step2image').css('display', 'none');
	 $('div.step3image').css('display', 'none');
	 $('div.step2image').css('display', 'block');
	 $("div.step2image").animate({
		 "left": "40%"
	 }, "slow");
	 $(".col-xs-4.step2").css('opacity', '1');
	 $(".col-xs-4.step3").css('opacity', .3);
	 $(".contact-cus_jumbotron").removeClass('jumbotron_st3');
	 $(".contact-cus_jumbotron").addClass('jumbotron_st2');
	 $("div.step1image").animate({
		 "left": "7%"
	 }, "slow");
 });
 $("#comment-area").click(function () {
	 $('div.step1image').css('display', 'none');
	 $('div.step2image').css('display', 'none');
	 $('div.step3image').css('display', 'none');
	 $('div.step3image').css('display', 'block');
	 $("div.step3image").animate({
		 "left": "70%"
	 }, "slow");
	 $(".col-xs-4.step3").css('opacity', 'inherit');
	 $(".contact-cus_jumbotron").addClass('jumbotron_st3');
	 $(".contact-cus_jumbotron").removeClass('jumbotron_st2');
 });
 $(".contact-content").find('input:text').click(function () {console.log( $(".step2"));

	 $('div.step1image').css('display', 'none');
	 $('div.step2image').css('display', 'none');
	 $('div.step3image').css('display', 'none');
	 $('div.step1image').css('display', 'block');
	 $(".col-xs-4.step3").css('opacity', .3);
	 $(".col-xs-4.step2").css('opacity', .3);
	 $(".contact-cus_jumbotron").removeClass('jumbotron_st3');
	 $(".contact-cus_jumbotron").removeClass('jumbotron_st2');
	 $("div.step1image").animate({
		 "left": "7%"
	 }, "slow");
 });

 $('input:text').on('input', function () {
	 var count = checkCount();
	// alert(count);	
	 
 });
});
  
</script>
<script type="text/javascript">
	<!--//--><![CDATA[//><!--
		var images = new Array()
		function preload() {
			for (i = 0; i < preload.arguments.length; i++) {
				images[i] = new Image()
				images[i].src = preload.arguments[i]
			}
		}
		preload(
			"http://rubbishtaxi.com.au/wp-content/themes/rubbish_taxi/images/contact-us-bg.jpg",
			"http://rubbishtaxi.com.au/wp-content/themes/rubbish_taxi/images/contact-us-bg2.jpg",
			"http://rubbishtaxi.com.au/wp-content/themes/rubbish_taxi/images/contact-us-bg3.jpg"
		)
	//--><!]]>
</script>  

<div class="jumbotron cus_jumbotron contact-cus_jumbotron conx">
  <div class="mm-view">
    <div class="step1image"></div>
    <div class="step2image"></div>
    <div class="step3image"></div>
  </div>
  <div class="container jumbotron-content">
    <div class="row top-portion">
      <div class="col-xs-4 step1">
      <h1>1</h1>
      <div class="contact-content">
      <h2>Fill in your details</h2>
      <form name="confrm" action="<?php echo get_option('home'); ?>/contact_feedback.php"  method="post" onSubmit="return contactfrm();">
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
        <div class="col-xs-4 step2">
          <h1>2</h1>
          <div class="contact-content">
            <h2>Select Service</h2>
            <div class="checkbox">
              <label>
                <input name="service[]" type="checkbox" value="Rubbish removal" />
                Rubbish removal </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="service[]" value="Deceased Estates">
                Deceased Estates </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="service[]" value="Demolition Services">
                Demolition Services </label>
            </div>
            <div class="checkbox">
              <label>
                <input type="checkbox" name="service[]" value="Commercial & Industrial Strip-outs">
                Commercial & Industrial Strip-outs </label>
            </div>
          </div>
        </div>
        <div class="col-xs-4 step3">
          <h1>3</h1>
          <div class="contact-content">
            <h2>Comments</h2>
            <div class="form-group">
              <textarea class="form-control" name="commands" id="comment-area" rows="4" cols="3"></textarea>
            </div>
            <input type="submit" class="btn-submit">
          </div>
        </div>
      </form>
    </div>
    <div class="row"> 
      <!-- jumbo-footer -->
      <div class="jumbo-footer clearfix">
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
  </div>
</div>
<div class="container main">
  <div class="row cus-page-header contact_header">
    <div class="col-xs-12 placeholder">
      <div class="page-head-phone"><?php echo get_post_meta($post->ID, 'phone_samll_device', true); ?></div>
    </div>
  </div>
  <div class="row  contact_header noned">
    <div class="col-xs-12 placeholder"> <?php echo get_post_meta($post->ID, 'des_small_device', true); ?>
      <h2 class="a_center">frEE quote</h2>
    </div>
  </div>
  <div class="row contact_header">
    <div class="col-md-4 step1">
    <h1>1</h1>
    <div class="contact-content">
    <h2>Fill in your details</h2>
    <form name="confrm_two" action="<?php echo get_option('home'); ?>/contact_feedback.php"  method="post" onSubmit="return contactfrm1();">
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
      <div class="col-md-4 step2">
        <h1>2</h1>
        <div class="contact-content">
          <h2>Select Service</h2>
          <div class="checkbox">
            <label>
              <input name="service[]" type="checkbox" value="Rubbish removal" />
              Rubbish removal </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="service[]" value="Deceased Estates">
              Deceased Estates </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="service[]" value="Demolition Services">
              Demolition Services </label>
          </div>
          <div class="checkbox">
            <label>
              <input type="checkbox" name="service[]" value="Commercial & Industrial Strip-outs">
              Commercial & Industrial Strip-outs </label>
          </div>
        </div>
      </div>
      <div class="col-md-4 step3">
        <h1>3</h1>
        <div class="contact-content">
          <h2>Comments</h2>
          <div class="form-group">
            <textarea class="form-control" name="commands" rows="4" cols="3"></textarea>
          </div>
          <input type="submit" class="btn-submit">
        </div>
      </div>
    </form>
  </div>
</div>
<?php get_footer(); ?>