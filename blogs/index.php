<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta & Link Tags -->
    <?php
        $title = 'MacBook Replacement & Repair Services| Guru Computers Blog';
        $keyword  = 'MacBook Screen Replacement, MacBook Battery Replacement, Laptop DC jack Replacement, MacBook Water Damage treatment';
        $description  = "Follow Guru Computers Delta blog to get the latest news, useful hacks, and tips on MacBook, Laptop repair, keyboard replacement, Macbook care, and more.";
    include_once('../common/common-css.php'); ?>
        <!--  -->
</head>

<body>
    <!-- -->
    <?php include_once('../common/header.php'); ?>
    <!--  -->
    <section class="repairBanner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="m-0">BLOGS</h1>
                </div>

            </div>
        </div>
    </section>
    <section class="blogs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blogwrapper">
                        <a href="spilled-water-on-laptop">
                            <div class="blogimg">
                            <img src="<?php echo $url; ?>assets/images/blogImages/spilled-water-on-laptop-1.jpg" alt="MacBook repair delta">
                                <div class="dateinfo">
                                    <span>19</span>
                                    <span class="month">Dec</span>
                                    <span>2022</span>
                                </div>
                            </div>
                            <div class="blogdata">
                                <h2>Spilled Water on your Laptop? Here’s what you should do now!</h2>
                                <p>Did you accidentally spilled water on your laptop? Don’t panic! You can still limit the damage and save your device. But, the first thing you should do immediately after you have spilled water or any other liquid... </p>
                                <div class="readMore">Read More ...</div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="blogwrapper">
                        <a href="7-signs-that-you-need-to-replace-your-laptop-battery">
                            <div class="blogimg">
                                <img src="<?php echo $url; ?>assets/images/7-signs-that-you-need-to-replace-your-laptop-battery-1.jpg" alt="MacBook repair delta">
                                <div class="dateinfo">
                                    <span>05</span>
                                    <span class="month">Dec</span>
                                    <span>2022</span>
                                </div>
                            </div>
                            <div class="blogdata">
                                <h2>7 Signs that you need to replace your laptop battery</h2>

                                <!-- <span class="adminBlogs"> 
                                    <span class="admin"><i class="fa fa-user"></i>gurucomputers</span>
                                <span class="admin"><i class="fa fa-folder-o"></i>Blogs</span>
                                </span> -->
                                <p>Should I replace my laptop or its battery?
                                </p>
                                <p>Are you pondering over this question but can’t decide which way to go? Don’t worry; you are at the right place. In this blog, we’ll discuss signs that indicate... </p>
                                <div class="readMore">Read More ...</div>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--  -->
    <?php include_once('../common/footer.php'); ?>
    <!--  -->
    <?php include_once('../common/common-js.php'); ?>
    <!--  -->
</body>

</html>