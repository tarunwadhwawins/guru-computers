<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta & Link Tags -->
   <?php
    $title = '';
    $keyword  = '';
    $description  = "";
    
    include_once('common/common-css.php'); ?>
    <!--  -->
</head>

<body>
    <!-- header -->
    <?php include_once('common/header.php'); ?>
    <!--  -->
    <section class="contact">
        <!-- Banner -->
        <div class="repairBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-sm-12">
                        <h1 class="m-0">Contact</h1>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
        <div class="container">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="textWigits">
                        <div class="callus">
                            <img src="<?php echo $url; ?>assets/images/phoneimage.png" alt="contactimage">
                            <h4>Call Us</h4>
                            <p>Guru Computers</p>
                            <a href="tel:+1 (604) 256-2193" class="primaryButton">+1 (604) 256-2193</a>
                        </div>
                        <div class="callus">
                            <img src="<?php echo $url; ?>assets/images/clockimage.png" alt="contactimage">
                            <h4>Support Hours</h4>
                            <p>Monday-Saturday : 10:00 am - 07:00 pm</p>
                            <p>Sunday : Closed</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 offset-lg-1">
                    <div class="question boxShadow">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <div class="contactField">
                                    <h2> Have a question or query? </h2>
                                    <h3> We would love to hear from you! </h3>
                                </div>
                            </div>
                            <form method="post" id="contactForm" class="row">
                                <div id='quotesmessage'></div>
                                <div class="col-md-6">
                                    <div class="contactField">
                                        <h5>
                                            Your Name
                                        </h5>
                                        <input type="text" name="name" value="" size="40" class="form-control" data-validation="required">
                                        <span id="nameerror" class="text-danger"> </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contactField">
                                        <h5>
                                            Your Email
                                        </h5>
                                        <input type="text" name="email" value="" class="form-control" data-validation="required email">
                                        <span id="emailerror" class="text-danger"> </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contactField">
                                        <h5>
                                            Services
                                        </h5>
                                        <select name="service" class="form-control" data-validation="required">
                                            <option value="Apple MacBook Screen Replacement">Apple MacBook Screen Replacement</option>
                                            <option value="Apple MacBook Logicboard Repair">Apple MacBook Logicboard Repair</option>
                                            <option value="Apple MacBook liquid damage repair">Apple MacBook liquid damage repair</option>
                                            <option value="Apple MacBook keyboard replacement.">Apple MacBook keyboard replacement.</option>
                                            <option value="Other Parts">Other Parts</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="contactField">
                                        <h5>
                                            Contact No
                                        </h5>
                                        <input type="text" name="contact_no" value="" class="contact_no form-control" placeholder="(___)___-____" data-validation="required">
                                        <span id="numbererror" class="text-danger"></span>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="contactField">
                                        <h5>Your Message</h5>
                                        <textarea name="message" cols="40" rows="10" class="form-control" data-validation="required"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="contactField">
                                        <button class="primaryButton" type="submit">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2609.1455708569288!2d-122.89315088453829!3d49.15984507931819!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5485d909135b5a27%3A0x42caa7bde48e26b9!2sGuru+IT+Solutions+-+Macbook+and+PC+repairs!5e0!3m2!1sen!2sin!4v1539838338968"
            width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </section>
    <!-- footer -->
    <?php include_once('common/footer.php'); ?>
    <!--  -->
    <!-- script -->
    <?php include_once('common/common-js.php'); ?>
    <!--  -->
</body>

</html>