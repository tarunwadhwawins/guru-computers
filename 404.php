<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta & Link Tags -->
    <?php
    $title = '404 - Guru Computers';
    $keyword  = '';
    $description  = "Guru Computers was established in the summer of 2013. Sukh, the owner has over 15 years of experience in fixing computers.";

    include_once('common/common-css.php'); ?>
    <!--  -->
</head>

<body>
    <!-- -->
    <?php include_once('common/header.php'); ?>
    <!--  -->
    <section class="repairBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="m-0">404 Page</h1>
                </div>
            </div>
        </div>
    </section>

    <section class="error404">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>404</h2>
                    <h3>Oopps! The page you were looking for, couldn't be found.</h3>
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