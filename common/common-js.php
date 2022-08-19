<!-- script -->
<script src="./assets/js/jquery-min.js"></script>
<script src="./assets/js/cloudflare_jquery.min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<script src="./assets/form-validator/jquery.form-validator.js"></script>
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
            modules: 'security'
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
                    if (response.Success == true) {
                        $messageDiv.text('Thank You! Our Team Will Get Back To You Soon!!');
                        document.getElementById("contactForm").reset();
                        $messageDiv.addClass('alert alert-success').fadeIn(1500);
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
</script>