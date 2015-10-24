<?php get_header(); ?>
<?php
if (has_post_thumbnail()) {
    $thumbnailUrl = wp_get_attachment_url(get_post_thumbnail_id());
}
?>
<?php
$removalServices = get_posts(array('post_type' => 'service', 'posts_per_page' => -1, 'order' => 'ASC'));
$testimonials = get_posts(array('post_type' => 'testimonial', 'posts_per_page' => -1));

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
        <div class="col-md-12">
            <div class="inner-section">
                <div class="row">
                    <div class="col-md-5">
                        <p>
                            <small>The Rubbish Taxi offers obligation free onsite quotes to all of its customers.
                                This allows us to provide you with a firm price for your rubbish removal job.
                            </small>
                        </p>
                    </div>
                    <div class="col-md-4">
                        <div class="page-head-phone"><p>02 9573 1112 <span class="hide_desk_or">or</span></p></div>
                    </div>
                    <div class="col-md-3">
                        <a href="#" data-toggle="modal" data-target="#quoteModal" target="_blank" class="get-quote-btn">Get A Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-md-12">
            <div class="inner-section">
                <h2><?php echo get_the_title(); ?></h2>
                <img class="img-responsive pull-right img-thumbnail" src="<?php echo $thumbnailUrl; ?>"/>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="inner-section">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>All Rubbish Removal Services</h2>
                        <ul id="removal-services-list">
                            <?php foreach ($removalServices as $service) : ?>
                                <li><i class="fa fa-angle-double-right"></i><a
                                        href="<?php echo get_post_permalink($service->ID) ?>"><?php echo $service->post_title; ?></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <h2>Transparent Pricing</h2>

                        <p>When providing you with a price, it is calculated based on and including the following:</p>

                        <p>
                            <small>(Hover on icons for more information)</small>
                        </p>
                        <ul id="pricing-benefits-list">
                            <li>All tip fees</li>
                            <br/>
                            <li>Charged per cubic metre</li>
                            <i class="fa fa-info-circle" data-toggle="tooltip" data-placement="right"
                               title="We charge you for what we take, not the trucks capacity"></i><br/>
                            <li>First hours labour</li>
                            <i data-toggle="tooltip" data-placement="right"
                               title="On average a truck can be filled within the first hour"
                               class="fa fa-info-circle"></i><br/>
                            <li>GST – this is included in the price we quote</li>
                            </i>
                        </ul>
                    </div>
                </div>
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
                                <p><i class="fa fa-quote-left"></i><em><?php echo $testimonial->post_content ?></em><i
                                        class="fa fa-quote-right"></i></p>

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
