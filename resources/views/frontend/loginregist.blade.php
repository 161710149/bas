<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js') }}" lang=""> <!<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

  <title>Shopaholic - e-Commerce HTML5 Template</title>
  <meta name="description" content="Shopaholic - e-Commerce HTML5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/themify-icons.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/et-line-icons.css') }}">  

  <link rel="stylesheet" href="{{ asset('assets/frontend/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/slick.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/magnific-popup.css') }}"> 
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/themes.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/frontend/css/pages/register.css') }}">

  <!--[if lte IE 7]><script src="lte-ie7.js') }}"></script><![endif]-->
  <!--[if lt IE 9]><script src="{{ asset('assets/frontend/js/vendor/html5-3.6-respond-1.4.2.min.js') }}"></script><![endif]-->


</head>


<body>


  <header id="masthead" class="masthead">
 
  @include('partials.headers')


  <section class="page-name-sec page-name-sec-01">
    <div class="section-padding">
      <div class="container">
        <h3 class="page-title">Register / Login</h3><!-- /.page-title -->

        <div class="row">
          <div class="col-sm-7">
            <p class="description">
              Duis sed odio sit amet nibh vulputate cursus a sit amet. 
            </p><!-- /.description -->
          </div>

          <div class="col-sm-5">
            <ol class="breadcrumb text-right">
              <li><a href="#">Home</a></li>
              <li><a href="#">Pages</a></li>
              <li class="active">Register</li>
            </ol><!-- /.breadcrumb -->
          </div>

        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.section-padding -->
  </section><!-- /.page-name-sec -->



  <section class="login-section">
    <div class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="sign-in bg-gray">
              <h2 class="title">Have an account? Log in</h2>
              <form class="sign-in-form" id="sign-in-form" action="#" method="post">
                <p class="form-input">
                 <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Username / Email" required autofocus>
                 @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </p>

                <p class="form-input">
                  <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                  @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </p>
                <p class="form-input">
                  <input type="submit" name="wp-submit" id="wp-submit" class="btn" value="Sign In"
                  {{ __('Login') }} />
                </p>
                <p class="checkbox pull-left">
                  <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                  Remember Me
                  <a href="#" class="pull-right" title="Recover Your Lost Password">Forgot password?</a>
                </p>
              </form>

              <div class="login-social">
                <button class="btn facebook">Sign in With Facebook</button>
                <button class="btn twitter">Sign in With Twitter</button> 
              </div><!-- /.login-social -->
            </div><!-- /.sign-in -->
          </div>

          <div class="col-md-7">
          <form method="POST" action="{{ route('register') }}">
          @csrf

            <div class="sign-up">
              <h2 class="title">Get Registered <span></span></h2><!-- /.title -->

              <form class="signup-form" action="#" method="post">
                <p class="form-input">
                  <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="First Name"name="name" value="{{ old('name') }}" required autofocus>
                  @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                
                </p>
                
                <p class="form-input">                                  
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}"  placeholder="Email" required> 
                  @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                </p>

                <!-- <p class="form-input">
                  <input type="text" class="form-control" placeholder="Phone" required>
                </p> -->

                <p class="form-input">
                  <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password"  placeholder="Password" required>
                  @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                </p>

                <p class="form-input">
                  <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" required>

                </p>


                <p class="checkbox pull-left">
                  <input name="rememberme" type="checkbox" class="rememberme" value="Remember Me"/> 
                  I agree the 
                  <a href="#"> terms and conditions</a>
                </p>
                <p class="submit-input pull-right">
                  <input type="submit" class="btn" name="signup-form-submit" value="Sign up">
                  {{ __('Register') }}
                </p>
              </form>
              <div class="login-social">
                <button class="btn facebook">Register With Facebook</button>
                <button class="btn twitter">Register With Twitter</button> 
              </div><!-- /.login-social -->
            </div><!-- /.sign-up -->

          </div>
        </div><!-- /.row -->
      </div><!--/.container-->
    </div><!-- /.section-padding -->
  </section><!--/.login-section-->




  <section class="subscribe-03 background-bg" data-image-src="images/home07/subscribe.jpg">
    <div class="container">
      <div class="subscribe-details">
        <div class="row">
          <div class="col-sm-5">
            <div class="section-top">
              <h3 class="section-title">Stay up to date <span></span></h3><!-- /.section-title -->
            </div>
          </div>
          <div class="col-sm-7">
            <form class="subscribe-form" action="#">
              <input class="form-control" type="email" placeholder="myemail@email.com">
              <input class="btn btn-subscribe" type="submit" value="Subscribe">
            </form>
          </div>
        </div><!-- /.row -->
      </div><!-- /.subscribe-details -->
    </div><!-- /.section-padding -->
  </section>



  z



  <div id="scroll-to-top" class="scroll-to-top">
    <i class="fa fa-angle-double-up"></i>    
  </div>



  <script src="{{ asset('assets/frontend/js/plugins.js') }}"></script>
  <script src="{{ asset('assets/frontend/js/main.js') }}"></script>


</body>
</html>