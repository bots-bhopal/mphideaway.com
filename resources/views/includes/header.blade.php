<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>MP Hideaway</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('public') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('public') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('public') }}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('public') }}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('public') }}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{ asset('public') }}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{ asset('public') }}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{ asset('public') }}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('public') }}/css/style.css" rel="stylesheet">
  <style>
    .product-grid4
    {
        box-shadow: 0px 1px 4px 1px #b9b9b9;
        margin-bottom: 20px;
    }

    .product-grid4 .product-content
    {
        padding:10px;
    }

    .darkHeader
    {
        background:red;
    }

    #logo > a > img{
        height:60px;
        margin-top: -15px;
    }

    #intro{
        position: relative;
        top: 92px;
    }

    #img_zoom:hover
    {
        transform: scale(1.20);
    }

    #about > div > div > div.col-md-4.wow.fadeInUp > div > div {
        display:flex;
        justify-content:center;
    }

    #about > div > div > div.col-md-4.wow.fadeInUp > div > div img{
        width:100%;
    }

    @media  only screen and (max-width: 768px) {
        #header
        {
            background: #ffffff !important;
            opacity:1;
            height:70px;
        }

        #mobile-nav-toggle i {
            color: #4D1409;
            line-height: 30px;
        }

        #logo > a > img{
            height: 65px;
            margin-top: -1px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50% , -50%);
        }

        #intro{
            position: relative;
            top: 70px;
        }
    }
    </style>
</head>

<body>
    <button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>
  <!--==========================
    Header
  ============================-->
  <header id="header" style="background: #ffffffa3;">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href="#intro"><img src="public/img/logo.png" alt="" title="" class="img img-fluid"></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{url('about')}}">About Us</a></li>
          <li class="menu-has-children"><a href="#">Packages</a>
            <ul>
                @foreach($package_name as $package_name)
                    <li><a href="{{url('packages')}}/{{$package_name->id}}"> {{ $package_name->cat_name }}</a></li>
                @endforeach
           </ul>
          </li>
         <li class="menu-has-children"><a href="#">Wildlife & Nature</a>
            <ul>
            @foreach($package_name1 as $package_name1)
                <li><a href="{{url('packages')}}/{{$package_name1->id}}"> {{ $package_name1->cat_name }}</a></li>
            @endforeach
            </ul>
          </li>
          <li class="menu-has-children"><a href="#">Heritage & Pilgrimage</a>
            <ul>
            @foreach($package_name2 as $package_name2)
             <li><a href="{{url('packages')}}/{{$package_name2->id}}"> {{ $package_name2->cat_name }}</a></li>
           @endforeach
            </ul>
          </li>
          <li class="menu-has-children"><a href="#">Jal Mahotsav</a>
            <ul>
            @foreach($package_name3 as $package_name3)
             <li><a href="{{url('packages')}}/{{$package_name3->id}}"> {{ $package_name3->cat_name }}</a></li>
           @endforeach
            </ul>
          </li>
          <li><a href="{{url('contact')}}">Contact</a></li>
          <li><a href="{{url('admin_login')}}"><i class="fa fa-user"></i></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

<!-- Button trigger modal -->
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="login" method="post">
        @csrf
          <div class="form-group">
            <label for="username">Email address</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Username" required>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          </div>
          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div>
          <button type="submit" class="btn btn-primary pull-right">Submit</button>
        </form>
      </div>
      {{-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> --}}
    </div>
  </div>
</div>
