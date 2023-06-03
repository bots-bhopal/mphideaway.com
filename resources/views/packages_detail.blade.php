@include('includes.header')
<!--==========================
    Intro Section
============================-->
<div class="title-area" style="width:100%; height:300px; color:#ffffff; background:linear-gradient(0deg, rgba(50, 50, 50, 0.5), rgba(50, 50, 50, 0.3)), url({{ asset('public/img/intro-carousel/3.jpg') }}); background-position:center; text-decoration: none; display:flex; justify-content:center; align-items:center; padding-top:50px;">
    <h1>
        Package Information
    </h1>
</div>
<main id="main">
<!--==========================
    Contact Section
============================-->
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">
            <div class="section-header pt-5">
                @foreach($package as $key => $data)
                    <h3>{{ $data->package_category }}</h3>
                @endforeach
            </div>

            <div class="row contact-info">
                @foreach($package as $key => $data)
                    <div class="col-lg-12">
                        <img src="{{ asset('public') }}/package/{{ $data->package_image }}" alt="" class="img img-thumbnail">
                        <div class="alert alert-success mt-3 text-center" role="alert">
                            <h3 class="m-0 font-weight-bold">{{ $data->package_title }}</h3>
                        </div>

                        <div class="alert alert-danger mt-3 text-center" role="alert">
                            <p class="font-weight-bold m-0">
                                {{ $data->package_highlight }}
                            </p>
                        </div>

                        <p class="text-justify">{!! $data->example_textarea !!}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container pb-5">
            <div class="row">
                @if( $data->flights )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-plane fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->flights }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->hotels )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-bed fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->hotels }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->sight_seen )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-eye fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->sight_seen }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->transfers )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-exchange fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->transfers }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->meals )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-cutlery fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->meals }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->bike_tour )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-motorcycle fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->bike_tour }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->cruise_tour )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-ship fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->cruise_tour }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->water_spots )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-tint fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->water_spots }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->adventure_sports )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-trophy fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->adventure_sports }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->camp_stays )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-home fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->camp_stays }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->trekking )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-globe fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->trekking }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->om )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-fort-awesome fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->om }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->gurudwara )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-university fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->gurudwara }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif

                @if( $data->church )
                    <div class="col-lg-3">
                        <div class="card text-center my-2">
                            <div class="card-body p-1">
                                <i class="fa fa-building fa-3x"></i>
                                <hr class="m-2">
                                <h5>{{ $data->church }}  </h5>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section><!-- #contact -->

</main>
@include('includes.footer')
