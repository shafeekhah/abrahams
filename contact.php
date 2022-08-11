<?php include("includes/header.php");?>

<!-- Inner Banner -->
<div class="inner-banner banner-shape contact-banner">
    <div class="container">
        <h1 class="banner-title">Contact</h1>
    </div>
</div>
<!-- Inner Banner End -->

<div class="inner-holder contact-holder">
    <div class="container">
        

        <div class="contact-block">

            <div class="row">

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="contact-left">

                        <h2>Send Message</h2>

                        <form id="contact-form" method="post" action="mail.php" role="form">

                            <div class="messages"></div>

                            <div class="form-group">
                                <label for="form_name">Name <span>*</span></label>
                                <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Firstname is required.">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="form_lastname">Subject <span>*</span></label>
                                <input id="form_lastname" type="text" name="subject" class="form-control" required="required" data-error="Lastname is required.">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="form_email">Email <span>*</span></label>
                                <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Valid email is required.">
                                <div class="invalid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="form_phone">Phone</label>
                                <input id="form_phone" type="tel" name="phone" class="form-control">
                                <div class="valid-feedback"></div>
                            </div>

                            <div class="form-group">
                                <label for="form_message">Message <span>*</span></label>
                                <textarea id="form_message" name="message" class="form-control" rows="5" required="required" data-error="Please,leave us a message."></textarea>
                                <div class="invalid-feedback"></div>
                            </div>

                            <input type="submit" class="btn btn-success btn-send submit-btn" value="Submit">

                        </form>
                    
                    </div>

                </div>

                <div class="col-lg-6 col-md-6 col-sm-12 col-12">

                    <div class="contact-right">

                        <div class="map"><iframe src="https://www.google.com/maps/d/embed?mid=1mKc2ruBqPQGeqYhtzk0uwT2iI4JTmSj0" width="100%" height="480"></iframe></div>

                    </div>

                </div>

            </div>

            
        </div>
        <!-- contact-block end -->

    </div>
</div>
<!-- Inner holder -->

<?php include("includes/footer.php");?>