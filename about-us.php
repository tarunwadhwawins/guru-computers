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
    <section class="aboutUs">
        <div class="aboutBanner">
            <img src="<?php echo $url; ?>assets/images/about_banner.jpg" alt="aboutimage">
        </div>
        <div class="productBanner">
            <div class="container">
                <h2>Who we are</h2>
                <img class="rightimg" src="<?php echo $url; ?>assets/images/about_us.jpg" alt="aboutimage">
                <p>Guru Computers was established in the summer of 2013. Sukh, the owner has over 15 years of experience in fixing computers. He has worked with world-leading computer manufacturing companies like DELL and has a lot of customer service experience
                    under his belt. Since its inception, Guru Computers has built a huge market of satisfied clients by offering a reliable computer repair service and data backup solutions at an affordable cost. We are patient listeners and we fix things
                    right the first time as we never cut corners in our repairs. You can depend on us to give you the most economical choice to fix your device. We are the computer experts and we guarantee a memorable experience with all your Apple and
                    Windows computer repairs. </p>
                <h2>Why Choose Us</h2>
                <p>When we undertake a computer for repairs, we strive to do the best that we possibly can. While there are times that some computers cannot be fixed due to excessive damage, but, mostly we can fix any brand of a computer with almost any
                    extent of the damage. Most computer repair shops will send the dead or severely damaged computers to repair centers which are expensive. However, at Guru Computers, you can get your computers fixed at an affordable price and mostly
                    the same day, as we have trained technicians on site.</p>
            </div>
        </div>
    </section>
    <!-- footer -->
    <?php include_once('common/footer.php'); ?>
    <!--  -->
    <!-- script -->
    <?php include_once('common/common-js.php'); ?>
    <!--  -->
</body>

</html>