<!-- script -->
<script src="<?php echo $url; ?>assets/js/jquery-min.js"></script>
<script src="<?php echo $url; ?>assets/js/cloudflare_jquery.min.js"></script>
<script src="<?php echo $url; ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $url; ?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo $url; ?>assets/form-validator/jquery.form-validator.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>

<script>
    // <!-- Banner-craousel -->
    $(document).ready(function() {
        $(".replacement").owlCarousel({
            items: 1,
            nav: true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
            autoplay: true,
            autoplayTimeout: 3000,
            smartSpeed: 800,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    });
</script>
<!-- testimonialContent -->
<script>
    var base_url = '<?php echo $url; ?>';
    $(document).ready(function() {
        $.validate({
            modules: 'security',
            reCaptchaSiteKey: '6LdmI44hAAAAAPLZHO9DaTyvHoP0e5mpRZsjEX0S',
            reCaptchaTheme: 'light'
        });
        $("#contactForm").submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: base_url + "core/general?action=ConactFormSave",
                type: "POST",
                data: $(this).serialize(),
                success: function(response) {
                    var $messageDiv = $('#quotesmessage')
                    $messageDiv.hide().html(response.Message);
                    grecaptcha.reset();
                    if (response.Success == true) {
                        window.location = 'https://www.gurucomputers.ca/thankyou';
                    } else {
                        $messageDiv.text('Error');
                        $messageDiv.addClass('alert alert-danger').fadeIn(1500);
                    }
                    setTimeout(function() {
                        $messageDiv.fadeOut(1500, function() {
                            $(this).removeClass('alert alert-success alert-danger');
                        });
                    }, 3000);
                }
            });
        });
        $(".contact_no").inputmask("(999) 999-9999");
        $(".testimonialContent").owlCarousel({
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
    });
</script>
<script>
    $(window).scroll(function() {
        if ($(this).scrollTop() > 150) {
            $('header').addClass('fixedHeader');
        } else {
            $('header').removeClass('fixedHeader');
        }
    });
    // Back to top
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 150) {
            $(".backToTop ").addClass("show");
        } else {
            $(".backToTop ").removeClass("show");
        }
    });

    $(".navbar-toggler").click(function(){ 
     $(".navbar-toggler").toggleClass("active");
     $("body").toggleClass("overflow-hidden");
     $(".navbar-collapse").toggleClass("active");
     $(".section-bg").toggleClass("active");
    });
    $(".section-bg").click(function(){ 
     $(".navbar-toggler").removeClass("active");
     $("body").removeClass("overflow-hidden");
     $(".navbar-collapse").removeClass("active");
     $(".section-bg").removeClass("active");
    });
</script>