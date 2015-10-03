<?php get_header(); ?>
<?php
if (has_post_thumbnail()) {
    $thumbnailUrl = wp_get_attachment_url(get_post_thumbnail_id());
}
?>
<?php
$coveredAreasStr = types_render_field('covered-area', array('separator' => '|'));
$coveredAreasArray = explode('|', $coveredAreasStr);
$googleMapArea = types_render_field('google-map-area') ? types_render_field('google-map-area') : 'Sydney';
$childAreas = get_children([
    'post_parent' => get_the_ID(),
    'post_type' => 'area',
    'post_status' => 'publish'
]);
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
                        This allows us to provide you with a firm price for your rubbish removal job.
                    </small>
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
            <div class="col-md-12">
                <h2><?php echo str_replace('Rubbish Removal', '', get_the_title()); ?></h2>
                <img class="img-responsive pull-right img-thumbnail" src="<?php echo isset($thumbnailUrl) ?: ''; ?>"/>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
    <?php if (isset($childAreas) && is_array($childAreas) ) : ?>
    <div class="single-area-section">
        <div class="row">
            <div class="col-xs-12">
                <h1>Areas We Cover<br/><?php echo get_the_title(); ?></h1>
                <div id="suburbs-list">
                    <?php foreach ($childAreas as $childArea) : ?>
                        <a href="<?php esc_url(get_permalink($childArea->ID)) ?>" type="button" class="btn btn-info"><?php echo $childArea->post_title; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
    <?php endif ?>

    <div class="row">
        <div class="single-area-section">
            <div class="col-md-4">
                <h1>We Were Here</h1>
                <p>
                    For rubbish removal in your area see the list above for suburbs that we service.
                    If your suburb isn't listed, call us to discuss your needs on (02) 9573 1112 or contact us vie
                    email.
                </p>
            </div>
            <div class="col-md-8">
                <div id="embedded-gmap">
                    <iframe
                        width="600"
                        height="450"
                        frameborder="0" style="border:0"
                        src="https://www.google.com/maps/embed/v1/place?key=AIzaSyAw2O0uMq8gkDXK3959JdBIm1BNZfqzewA
        &q=<?php echo urlencode($googleMapArea); ?>&zoom=15" allowfullscreen>
                    </iframe>
                </div>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
