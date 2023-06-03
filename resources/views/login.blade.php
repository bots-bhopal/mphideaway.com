@include('includes.header')

<style>
    .cstm-bdr{
        border:1px solid #4D1409;
    }

    .cstm-lbl{
        color:#4D1409;
    }
</style>

  <!--==========================
    Intro Section
  ============================-->
  <div class="title-area" style="width:100%; height:300px; color:#ffffff; background:linear-gradient(0deg, rgba(50, 50, 50, 0.5), rgba(50, 50, 50, 0.3)), url('public/img/intro-carousel/3.jpg'); background-position:center; text-decoration: none; display:flex; justify-content:center; align-items:center; padding-top:50px;">
  <h2>
  Login
  </h1>
  </div>

  <main id="main">


<div class="container">
<div class="row m-5 pb-5" >
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="login" method="post">
        @csrf
          <div class="form-group">
            <label for="username" class="cstm-lbl">Email address</label>
            <input type="text" name="username" class="form-control form-control-lg cstm-bdr" id="username" aria-describedby="emailHelp" required>
            {{-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> --}}
          </div>
          <div class="form-group">
            <label for="password" class="cstm-lbl">Password</label>
            <input type="password" name="password" class="form-control form-control-lg cstm-bdr" id="password" required>
          </div>
          {{-- <div class="form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> --}}
          <button type="submit" class="btn btn-lg btn-block pull-right" style="background:#4D1409; color: #ffffff;">Submit</button>
        </form>
</div>
</div>
</div>



  </main>
@include('includes.footer')
