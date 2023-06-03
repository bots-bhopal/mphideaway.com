@include('includes.header')
 <!--==========================
    Intro Section
  ============================-->

  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">
        @foreach($slider as $key => $data)
          <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
            <div class="carousel-background"><img src='public/slider/{{ $data->header_img }}' alt=""></div>
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">{{ $data->title_first }}</h2>
                <p class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">{{ $data->title_second }}</p>
              </div>
            </div>
          </div>
          @endforeach

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- #intro -->
<main id="main">
    <!--==========================
      About Us Section
    ============================-->
    <section id="about" style="background:green;">
      <div class="container">
            <header class="section-header">
          <h3>MP HIDEAWAY</h3>
          <p>Explore the Different</p>
        </header>

        <div class="row about-cols">
          <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
            <div class="about-col">
              <div class="img" style="padding:18px 40px;">
                <img src="public/img/animated_logo.gif" alt="" class="img-fluid">
              </div>
            </div>
          </div>
          <div class="col-md-8 wow fadeInUp" data-wow-delay="0.2s">
            <div class="about-col">
              <br>
              <p class="description" style="text-align:center;">“MP Hideaway offers to feel the raw “HEART OF INDIA” and it’s natural alluring beauty, the state which is a perfect blend of heritage, culture and nature.
                <br> Madhya Pradesh offers a wide range of tourism products to experience like, wild-life, nature, heritage, adventure, pilgrimage, culture. <br> It’s a perfect opportunity for a visitor to explore all colours of Madhya Pradesh. <br> Madhya Pradesh is also commonly referred as “TIGER STATE”.</p>
                <p class="description" style="text-align:center; margin-bottom:60px;">MP Hideaway justifies that it is rightly said that <br> <strong style="color:#4D1409;">“MP Me Aa Ke Har Koi Malang Hai”</strong></p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- #about -->

    <!--==========================
      Popular Tours Section
    ============================-->

    <div class="container">
    <header class="section-header wow fadeInUp">
    <br>
    <br>
          <h3>POPULAR TOURS</h3>
         <h4 class="text-center">We have a unique way of meeting your adventurous expectations!</h4>
        </header>
    <div class="row">
    @foreach($package as $key => $data)
        <div class="col-md-4 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4" style="height:200px; overflow:hidden;">
                    <a href="#" id="img_zoom">
                        <img class="pic-11" src="public/package/{{ $data->package_image }}">
                    </a>
                    <ul class="social" style="text-align:center; color:#fff; font-weight:bold; text-shadow: 4px 3px 1px black;">
                        <li style="position: absolute; top: 60px; left: -60px;">EXPLORE</li>
                    </ul>
                </div>
                <div class="product-content" style="min-height:210px; overflow:hidden; position:relative;">
                    <div class="price">
                        {{ $data->package_title }}
                    </div>
                    <p style="margin-bottom:50px;">
                        <?php echo nl2br($data->package_highlight); ?>
                    </p>
                    <h3 class="title text-justify"></h3>
                    <form action="{{ url('packages_detail') }}" method="post" style="position:absolute; bottom:10px; left:50%; transform:translateX(-50%)">
                        @csrf
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input name="submit" class="btn" style="background:#4D1409; color: #ffffff;" type="submit" value="View Details" />
                    </form>
                    <!-- <a href="{{url('packages')}}/{{ $data->id }}" class="btn btn-danger"> View Details </a> -->
                    <!-- <a class="add-to-cart" href="" style="position:absolute; bottom:10px; left:50%; transform:translateX(-50%)">View Detail</a> -->
                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
<hr>


    <!--==========================
      Services Section
    ============================-->
    <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Services</h3>
         <h4 class="text-center">“Your Travel is our Promise.”</h4>
        </header>

        <div class="row">

          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-analytics-outline"></i></div>
            <h4 class="title"><a href="">Group Tour</a></h4>
            <p class="description">Unique Designed Tour Itineraries covering major destinations for groups</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-bookmarks-outline"></i></div>
            <h4 class="title"><a href="">Family Tour</a></h4>
            <p class="description">Special Designed Personalized Tour Itineraries focusing on exact requirement of the guest</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-paper-outline"></i></div>
            <h4 class="title"><a href="">Student Tours</a></h4>
            <p class="description">Tour Itineraries Designed for Students with educational perceptive</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-speedometer-outline"></i></div>
            <h4 class="title"><a href="">Hotels</a></h4>
            <p class="description">All category of Hotels providing excellent service from Standard to Luxury</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-barcode-outline"></i></div>
            <h4 class="title"><a href="">Tour Vehicle </a></h4>
            <p class="description">Vehicle as Sedans, Suv, Traveler, AC Bus , AC Luxury Bus for tour</p>
          </div>
          <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
            <div class="icon"><i class="ion-ios-people-outline"></i></div>
            <h4 class="title"><a href="">24x7 Assistance</a></h4>
            <p class="description">Always available for any kind of help or assist on tour</p>
          </div>

        </div>

      </div>
    </section><!-- #services -->

    <!--==========================
      Call To Action Section
    ============================-->
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Call +91 7987050021</h3>
        <h4 class="text-center text-white">Get special offers on selected tours.</h4>
        <a class="cta-btn" href="#">Call To Action</a>
      </div>
    </section><!-- #call-to-action -->

    <!--==========================
      Team Section
    ============================-->
    <section id="team">
      <div class="container">
        <div class="section-header wow fadeInUp">
          <h3>OTHER TOURS</h3>
        </div>

        <div class="row">
          <div class="owl-carousel owl-theme" id="anoop">
          @foreach($package_slide as $key => $data_slide)
            <div class="item">
              <div class="wow fadeInUp">
                <div class="member">
                  <img src="public/package/{{ $data_slide->package_image }}" class="img-fluid" alt="">
                  <div class="member-info">
                    <div class="member-info-content">
                      <h4>{{ $data_slide->package_title }}</h4>
                      <span><?php echo nl2br($data_slide->package_highlight); ?></span>
                      <!-- <div class="social">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-google-plus"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                      </div> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach


            </div>
          </div>
        </div>
      </div>
    </section><!-- #team -->
    <!--==========================
      Facts Section
    ============================-->
    {{-- <section id="facts"  class="wow fadeIn">
      <div class="container">

        <header class="section-header">
          <h3>Facts</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </header>

        <div class="row counters">

  				<div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">274</span>
            <p>Clients</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">421</span>
            <p>Projects</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,364</span>
            <p>Hours Of Support</p>
  				</div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">18</span>
            <p>Hard Workers</p>
  				</div>

  			</div>

      </div>
    </section> --}}
    <!-- #facts -->

    <!--==========================
      Portfolio Section
    ============================-->
    <section id="portfolio"  class="section-bg" >
      <div class="container">

        <header class="section-header">
            <h3 class="section-title">Top Tours Gallery</h3>
        </header>

        <div class="row portfolio-container" style="position: relative; height: 1080px;">
            @foreach($gallery_data as $gallery_data)
                <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="public/gallery/{{ $gallery_data->gallery_img }}" class="img-fluid" alt="" style="height:100%; width:100%;">
                            <a href="public/gallery/{{ $gallery_data->gallery_img }}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                        </figure>

                        <div class="portfolio-info">
                            <h4><a style="text-transform:uppercase;">{{ $gallery_data->title_first }}</a></h4>
                            <p class="text-dark" style="text-transform:capitalize;">{{ $gallery_data->title_second }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>


        {{-- <div class="row portfolio-container">
        @foreach($gallery_data as $gallery_data)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInUp">
            <div class="portfolio-wrap">
              <figure>
                <img src="public/gallery/{{ $gallery_data->gallery_img }}" class="img-fluid" alt="">
                <a href="public/gallery/{{ $gallery_data->gallery_img }}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
              </figure>

              <div class="portfolio-info">
                <h4><a href="#">{{ $gallery_data->title_first }}</a></h4>
                <p class="text-dark">{{ $gallery_data->title_second }}</p>
              </div>
            </div>
          </div>
        @endforeach
        </div> --}}

      </div>
    </section><!-- #portfolio -->
<!--==========================
      Clients Section
    ============================-->
    {{-- <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="public/img/testimonial-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="public/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="public/img/testimonial-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="public/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="public/img/testimonial-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <img src="public/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="public/img/testimonial-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <img src="public/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="public/img/testimonial-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <img src="public/img/quote-sign-left.png" class="quote-sign-left" alt="">
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <img src="public/img/quote-sign-right.png" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials --> --}}
    <!--==========================
      Clients Section
    ============================-->
   {{-- <section id="clients" class="wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>PARTNER</h3>
          <h4 class="text-center">People who always support and endorse our good work</h4>
        </header>

        <div class="owl-carousel clients-carousel">
          <img src="img/clients/client-1.png" alt="">
          <img src="img/clients/client-2.png" alt="">
          <img src="img/clients/client-3.png" alt="">
          <img src="img/clients/client-4.png" alt="">
          <img src="img/clients/client-5.png" alt="">
          <img src="img/clients/client-6.png" alt="">
          <img src="img/clients/client-7.png" alt="">
          <img src="img/clients/client-8.png" alt="">
        </div>

      </div>
    </section> --}}
    </main>
    @include('includes.footer')
