<?php
/*Template Name: Contact Us*/
?>
<?php get_header(); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" xmlns="http://www.w3.org/1999/html"></script>
    <div class="header contact">
        <h1><?php echo $mobileHeading = get_post_meta($post->ID, 'page_title', true) ?: get_the_title(); ?></h1>
    </div>
    <div class="container main contact">
        <h2>HOW CAN WE HELP YOU?</h2>
        <div class="row">
            <div class="col-md-6">
                <form id="main-contact-form" name="confrm" action="<?php echo get_option('home'); ?>/contact_feedback.php" method="post"
                      onSubmit="return contactfrm();">
                    <div class="form-group">
                        <textarea name="message" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="Email address">
                    </div>
                    <div class="form-group">
                        <input type="text" name="postcode" class="form-control" placeholder="Postcode">
                    </div>
                    <div class="form-group">
                        <input type="text" name="phone" class="form-control" placeholder="Phone number">
                    </div>
                    <div class="form-group clearfix">
                        <div class="radio-buttons-group">
                            <label class="radio-inline">
                                <input type="radio" name="type" value="Domestic">
                                <span class="radio-text">Domestic</span>
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="type" value="Commercial">
                                <span class="radio-text">Commercial</span>
                            </label>
                        </div>
                        <input type="submit" class="btn-submit">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div id="contact-information">
                    <div class="phone-block">
                        <p>If you have any questions call</p>
                        <div class="page-head-phone">
                            <p>02 9573 1112</p>
                        </div>
                    </div>
                    <div class="address-block">
                        <p>
                            110 Renwick Street, Marrickville NSW 2204,<br/>
                            AustraliaPO Box 922, Marrickville NSW 1475E<br/>
                            <strong>info@rubbishtaxi.com.au</strong>
                        </p>
                    </div>
                </div>
        </div>
            </div>
    </div>
<?php get_footer(); ?>