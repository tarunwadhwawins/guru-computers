<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta & Link Tags -->
  <?php
    $title = 'Thank You – Guru Computers';
    $keyword  = '';
    $description  = "Thank you, we have received your request. Our executive will get in touch with you within 24-48 hours.";
    
    include_once('common/common-css.php'); ?>
    <!--  -->
</head>

<body>
    <!--  -->
    <?php include_once('common/header.php'); ?>
    <!--  -->
    <div class="repairBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12">
                    <h1 class="m-0">Thank You</h1>
                </div>
            </div>
        </div>
    </div>
    <!--  -->
    <section class="thankYou">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>Thank You</h2>
                    <h3>Your Submission has been received. We will be in touch with you soon. </h3>
                    <a href="<?php echo $url; ?>" class="primaryButton">Back to home</a>
                </div>
            </div>
        </div>
    </section>
    <!--  -->
    <?php include_once('common/footer.php'); ?>
    <!--  -->
    <?php include_once('common/common-js.php'); ?>
    <!--  -->

</body>

</html>