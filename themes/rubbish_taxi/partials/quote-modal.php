<div class="modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Get a free quote</h4>
            </div>
            <div class="modal-body">
                <form class="main-contact-form" name="confrm"
                      action="<?php echo get_option('home'); ?>/contact_feedback.php" method="post"
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
                                <input type="radio" name="type" value="Domestic" checked="checked">
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
        </div>
    </div>
</div>