<!-- script -->
<script src="./assets/js/jquery-min.js"></script>
<script src="./assets/js/cloudflare_jquery.min.js"></script>
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
            autoplayTimeout: 3000000,
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
<script>
// Add active class to the current button (highlight it)
// var header = document.getElementById("navActive");
// var btns = header.getElementsByClassName("nav-item");
// for (var i = 0; i < btns.length; i++) {2
//   btns[i].addEventListener("click", function() {
//   var current = document.getElementsByClassName("active");
//   current[0].className = current[0].className.replace(" active", "");
//   this.className += " active";
//   });
// }

</script>
<!-- Form-Validations -->
<script>
    function validateName() {
        // alert("xbxb")
        var name = document.getElementById("contact-name").value
        var email = document.getElementById("contactEmail").value
        var number = document.getElementById("mobnumber").value

        if (name == "") {
            document.getElementById('nameerror').innerHTML = "Name is Required"
                // return true;
        } else {
            document.getElementById('nameerror').innerHTML = ""
        }

        if (email == "") {
            document.getElementById('emailerror').innerHTML = "Email is required"
                // return false;
        } else if (email != email.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
            document.getElementById("emailerror").innerHTML = "enter valid email";
        } else {
            document.getElementById('emailerror').innerHTML = ""
        }

        if (number == "") {
            document.getElementById('numbererror').innerHTML = "Mobile Number is required"
                // return true;
        } else {
            document.getElementById('numbererror').innerHTML = ""
        }


    }
</script>