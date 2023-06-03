@include('includes.header')
<!--==========================
    Intro Section
============================-->
<div class="title-area" style="width:100%; height:300px; color:#ffffff; background:linear-gradient(0deg, rgba(50, 50, 50, 0.5), rgba(50, 50, 50, 0.3)), url({{ asset('public/img/intro-carousel/3.jpg') }}); background-position:center; text-decoration: none; display:flex; justify-content:center; align-items:center; padding-top:50px;">
    <h1>
        Packages
    </h1>
</div>
<main id="main">

<!--==========================
    Contact Section
============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="row contact-info">
                <div class="col-lg-12 mt-5 mb-4">
                    @foreach($package as $key => $data)
                        <div class="col-md-4 col-sm-6">
                            <div class="product-grid4">
                                <div class="product-image4" style="height:200px; overflow:hidden;">
                                    <a href="#" id="img_zoom">
                                        <img class="pic-11" src="{{ asset('public') }}/package/{{ $data->package_image }}">
                                    </a>
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
        </div>
    </section><!-- #contact -->

</main>
@include('includes.footer')
