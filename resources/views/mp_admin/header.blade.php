<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>MP Hideaway</title>

    <!-- Favicons -->
  <link href="{{ asset('public') }}/img/favicon.png" rel="icon">
  <link href="{{ asset('public') }}/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="public/css/style4.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <script src="public/ckeditor/ckeditor.js"></script>
    <script src="public/ckeditor/samples/js/sample.js"></script>
    <style>
        .mycheck {
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            padding-left: 40px;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #ced4da;
            border-radius: .25rem;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }
    </style>
</head>

<body>

    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>MP HIDEAWAY</h3>
                <strong>MP</strong>
            </div>

            <ul class="list-unstyled components">
                <li class="active">
                    <a href="admin">
                        <i class="fas fa-home"></i> Dashboard
                    </a>
                </li>
                <li>
                    <a href="header_master">
                        <i class="fas fa-briefcase"></i> Header Master
                    </a>
                </li>
                <li>
                    <a href="category_master">
                        <i class="fas fa-briefcase"></i> Category Master
                    </a>
                </li>
                <li>
                    <a href="package_master">
                        <i class="fas fa-briefcase"></i> Package Master
                    </a>
                </li>
                <li>
                    <a href="gallery_master">
                        <i class="fas fa-briefcase"></i> Gallery Master
                    </a>
                </li>
            </ul>

        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-dark bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="#">User</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" href="logout" style="color:#333;">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
