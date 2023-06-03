@include('includes.header')
<link href="{{ asset('public') }}/css/contact.css" rel="stylesheet">
  <!--==========================
    Intro Section
  ============================-->
<div class="title-area" style="width:100%; height:300px; color:#ffffff; background:linear-gradient(0deg, rgba(50, 50, 50, 0.5), rgba(50, 50, 50, 0.3)), url('public/img/intro-carousel/3.jpg'); background-position:center; text-decoration: none; display:flex; justify-content:center; align-items:center; padding-top:50px;">
    <h1>
        Contact Us
    </h1>
</div>
   <main id="main">


    <!--==========================
      About Us Section
    ============================-->
    <section id="team" style="padding:0px;">
      <div class="container-fluid">
<br><br>
        <header class="section-header">
            <h3>MP HIDEAWAY</h3>
            <p>Explore Experience Enjoy</p>
        </header>

        <div class="row about-cols">

        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3666.5044614545905!2d77.38556731428639!3d23.22472311457199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c5ce053c291ad%3A0xee07bcdec183bb46!2sDr.%20Rashmi%20Jha&#39;s%20Clinic!5e0!3m2!1sen!2sin!4v1580916651197!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>





        </div>

      </div>
    </section><!-- #about -->
<!--==========================
      Contact Section
    ============================-->
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
            <h3>Contact Us</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Address</h3>
              <address>25-A, IInd Floor, Maple High Street, Hoshangabad Road, Bhopal (M.P.) - 462026</address>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>Phone Number</h3>
              <p><a href="tel:+917987050021">+91 79870 50021</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:info@mphideaway.com">info@mphideaway.com</a></p>
            </div>
          </div>

        </div>

        <div class="form">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validation"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validation"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>
    </section><!-- #contact -->

  </main>
  @include('includes.footer')
