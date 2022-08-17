<!-- script -->
<script src="./assets/js/jquery-min.js"></script>
<script src="./assets/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/owl.carousel.min.js"></script>
<!--  -->

<script>
    // <!-- Banner-craousel -->
    $(document).ready(function() {
        $(".replacement").owlCarousel({
            items: 1,
            nav: true,
            navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
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
<!-- testimonialContent -->
<script>
    $(document).ready(function() {
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