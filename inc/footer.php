 <!-- footer -->
  <!-- footer -->
  <?php
  require_once './includes/emails.php';
  ?>
  <section class="w3l-footer-29-main">
  <div class="footer-29 py-5">
    <div class="container py-lg-4">
      <div class="row footer-top-29">
        <div class="col-lg-4 col-md-6 footer-list-29 footer-1 pr-lg-5">
          <div class="footer-logo mb-4">
            <a class="navbar-brand" href="/">
              <span class="fa fa-bank"></span> SKY TRUST BANK</a>
          </div>
          <p>
          NOTE: Neither SKY TRUST BANK nor any of its affiliates will ever ask you for your NIN(UK), 
          Social Security number(USA), any other country Identification Number, account information,
           passwords or PINs via Facebook or Twitter.
        </p>
        </div>
        <div class="col-lg-2 col-md-6 col-sm-5 col-5 footer-list-29 footer-2 mt-md-0 mt-5">

          <ul>
            <h6 class="footer-title-29">Site Links</h6>
            <li><a href="/">Home </a></li>
            <li><a href="services">Services </a></li>
            <li><a href="mortgage">Mortgages </a></li>
            <li><a href="#">Wealth Management </a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-7 col-7 footer-list-29 footer-3 mt-lg-0 mt-5">
        <ul>
            <h6 class="footer-title-29">Account</h6>
            <li><a href="login">Login </a></li>
            <li><a href="register">Sign Up </a></li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 footer-list-29 footer-4 mt-lg-0 mt-5">
            <h6 class="footer-title-29">Head Office</h6>
            <p class="mb-3">Dalwood Avenue Los Angeles, CA, USA</p>
            <p class="mb-2"> <span class="fa fa-phone"></span> <a href="tel:(+1)440">(+1) 440</a></p>
            <p class="mb-2"><span class="fa fa-envelope-o"></span> <a href="<?=$email?>"><?=$email?></a></p>
            <p><span class="fa fa-globe"></span> <a href="mailto:<?=$email?>"><?=$email?></a></p>
        </div>
      </div>
    </div>
  </div>
  <!-- copyright -->
  <section class="w3l-copyright text-center">
    <div class="container">
      <p class="copy-footer-29">© 2022 SKY TRUST BANK. All rights reserved.</p>
    </div>

    <!-- move top -->
    <button onclick="topFunction()" id="movetop" title="Go to top">
      &#10548;
    </button>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
  </section>
  <!-- //copyright -->
</section>
<!-- //footer --><!-- //footer -->



<!--  javascripts file here -->
<script src="web_assets/js/jquery-3.3.1.min.js"></script>

<script src="web_assets/js/theme-change.js"></script> <!-- //light and dark mode switch js -->

<script src="web_assets/js/circles.js"></script>

<!-- stats number counter-->
<script src="web_assets/js/jquery.waypoints.min.js"></script>
<script src="web_assets/js/jquery.countup.js"></script>
<script>
  $('.counter').countUp();
</script>
<!-- //stats number counter -->

<!-- owl carousel -->
<script src="web_assets/js/owl.carousel.js"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1
        },
        480: {
          items: 1
        },
        667: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    })
  })
</script>
<!-- //script -->
<!-- owl carousel -->

<!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo2").owlCarousel({
      loop: true,
      margin: 20,
      nav: false,
      responsiveClass: true,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        1000: {
          items: 1,
          nav: false,
          loop: false
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="web_assets/js/bootstrap.min.js"></script><!-- //bootstrap js -->
<!-- tidio live chat starts here -->
<script src="//code.tidio.co/0zrryl4ndcjaegtsj1kjpdrv6dkpwj95.js" async></script>
<!-- tidio live chat ends here -->

</body>

</html>