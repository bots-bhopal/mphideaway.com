<!--==========================
  Footer
============================-->
<footer id="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-info text-justify">
          <h3>MP Hideaway</h3>
          <p>MP Hideaway offers to feel the raw “HEART OF INDIA” and it’s natural alluring beauty, the state which is a perfect blend of heritage, culture and nature. MP Hideaway as a Destination Management Company based in Bhopal handling all the travel related service for Madhya Pradesh.</p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{url('/')}}">Home</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{url('about')}}">About us</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Packages</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Nature & Wildlife</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Heritage &Culture</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="#">Jal Mahotsav</a></li>
            <li><i class="ion-ios-arrow-right"></i> <a href="{{url('contact')}}">Contact Us</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-6 footer-contact">
          <h4>Contact Us</h4>
          <p>25-A, IInd Floor, Maple High Street, Hoshangabad Road, Bhopal (M.P.) - 462026<br>
            <strong>Phone:</strong> +91 79870 50021<br>
            <strong>Email:</strong> info@mphideaway.com<br>
          </p>

          <div class="social-links">
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="twitter"><i class="fa fa-whatsapp"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-pinterest"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-youtube"></i></a>
          </div>

        </div>

        <div class="col-lg-3 col-md-6 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Your Happiness is Our Promise</p>
          <form action="" method="post">
            <input type="email" name="email"><input type="submit"  value="Subscribe">
          </form>
        </div>

      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright">
        &copy; Copyright
        <strong>
            <script>document.write(new Date().getFullYear())</script>
        </strong> All Rights Reserved
    </div>

    <div class="credits">
      <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
      -->
      Designed by <a href="https://www.blueoceantech.in" target="_blank" style="color:#FA7B20;">Blue Ocean Tech Solutions Pvt. Ltd.</a>
    </div>
  </div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
<!-- Uncomment below i you want to use a preloader -->
<!-- <div id="preloader"></div> -->

<!-- JavaScript Libraries -->
<script src="{{ asset('public/lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('public/lib/jquery/jquery-migrate.min.js') }}"></script>
<script src="{{ asset('public/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('public/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('public/lib/superfish/hoverIntent.js') }}"></script>
<script src="{{ asset('public/lib/superfish/superfish.min.js') }}"></script>
<script src="{{ asset('public/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('public/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('public/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('public/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('public/lib/lightbox/js/lightbox.min.js') }}"></script>
<script src="{{ asset('public/lib/touchSwipe/jquery.touchSwipe.min.js') }}"></script>

<!-- Template Main Javascript File -->
<script src="{{ asset('public/js/main.js') }}"></script>
<script>
$('#anoop').owlCarousel({
  loop:true,
  margin:10,
  nav:false,
  autoplay:true,
  responsive:{
      0:{
          items:1
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
})
</script>
</body>
</html>
