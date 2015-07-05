<?php get_header(); ?>
<?php
    if (has_post_thumbnail()) {
        $thumbnailUrl = wp_get_attachment_url(get_post_thumbnail_id());
    }
?>
<?php
    $removalServices = get_posts('post_type=service');
?>

<div class="jumbotron cus_jumbotron service-single-area-cus_jumbotron areax">
    <div class="container jumbotron-content">
        <div class="row top-portion">
            <div class="col-xs-12 clearfix text-center"><h1><?php echo get_the_title(); ?></h1></div>
        </div>
    </div>
</div>

<!-- Main section -->
<div class="container main single-area-main-section">
    <div class="row cus-page-header">
        <div class="single-area-section">
            <div class="col-md-5">
                <p>
                    <small>The Rubbish Taxi offers obligation free onsite quotes to all of its customers.
                    This allows us to provide you with a firm price for your rubbish removal job.</small>
                </p>
            </div>
            <div class="col-md-4">
                <div class="page-head-phone"><p>02 9573 1112 <span class="hide_desk_or">or</span></p></div>
            </div>
            <div class="col-md-3">
                <a href="http://rubbishtaxi.local/contact-us/" target="_blank" class="get-quote-btn">Get A Quote</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="single-area-section">
            <div class="col-md-6">
                <h1><?php echo str_replace('Rubbish Removal', '', get_the_title()); ?></h1>
                <?php the_content(); ?>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="<?php echo $thumbnailUrl; ?>"/>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="single-area-section">
                <div class="col-sm-6">
                    <h1>All Rubbish Removal Services</h1>
                    <ul id="removal-services-list">
                        <?php foreach($removalServices as $service) : ?>
                        <li><?php echo $service->post_title; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <h1>Transparent Pricing</h1>
                    <ul id="removal-services-list">
                        <?php foreach($removalServices as $service) : ?>
                            <li><?php echo $service->post_title; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
        </div>
    </div>
    <div class="row">
        <div class="single-area-section">
            <div class="col-xs-12">
                <h1>Testimonials</h1>
                <div class="flexslider testimonials">
                    <ul class="slides">
                        <li>
                            <div class="testimonial">
                                <p><i class="fa fa-quote-left"></i>Thank you for the great service. Thank you for the great service. Thank you for the great service<i class="fa fa-quote-right"></i></p>
                                <p class="pull-right"><small><em>Tom&Jerry, Sydney</em></small></p>
                            </div>
                        </li>
                    </ul>
                </div>
             </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
