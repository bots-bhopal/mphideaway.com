 @include('includes.header')
  <!--==========================
    Intro Section
  ============================-->
  <div class="title-area" style="width:100%; height:300px; color:#ffffff; background:linear-gradient(0deg, rgba(50, 50, 50, 0.5), rgba(50, 50, 50, 0.3)), url('img/intro-carousel/3.jpg'); background-position:center; text-decoration: none; display:flex; justify-content:center; align-items:center; padding-top:50px;">
  <h2>
  Package
  </h1>
  </div>

  <main id="main">
<div class="container">

  <div class="row">
    <div class="col-md-12">
    @foreach($packagedetail as $key => $data)
    <!-- <h1>{{ $key+1 }}</h1> -->
  <!-- <h1>{{ $data->package_title }}</h1> -->
  <!-- {{ $data->id }} -->
  <br>
  <img class="pic-1 img-thumbnail" src="package/{{ $data->package_image }}">
<h2 class="my-3">{{ $data->package_title }}</h2>
<h2>{{ $data->package_title }}</h2>
<h2>{{ $data->sub_catagory }}</h2>

<div class="row">

<div class="col-md-3 text-center" style="">
<i class="fa fa-{{ $data->flights }} fa-3x mt-3"></i>
<h2>{{ $data->flights }}</h2>
</div>


<div class="col-md-3 text-center" style="">
<i class="fa fa-{{ $data->sight_seen }} fa-3x mt-3"></i>
<h2>{{ $data->sight_seen }}</h2>
</div>

<div class="col-md-3 text-center" style="">
<i class="fa fa-{{ $data->flights }} fa-3x mt-3"></i>
<h2>{{ $data->flights }}</h2>
</div>

</div>
<div class="example_textarea">
<?php echo nl2br($data->example_textarea); ?>
</div>

<br><br>
    @endforeach
    </div>
    <!-- <div class="col-md-4">

    </div> -->
  </div>

</div>








  </main>
@include('includes.footer')
