<html>

<head>
  <title>Delivery | Wendy's</title>


  <meta name="author" content="Wendy's">
  <meta name="robots" content="index, follow">
  <meta name="revisit-after" content="1 days">
  <meta name="rating" content="general">
  <meta http-equiv="distribution" content="global">
  <meta http-equiv="content-language" content="en">
  <meta http-equiv="Content-Style-Type" content="text/css">
  <meta http-equiv="Content-Script-Type" content="text/javascript">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/icons/favicon.ico')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/prettyPhoto/prettyPhoto.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/camera/camera.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/ui/ui-lightness/jquery-ui-1.10.4.custom.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('vendors/library/library.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

  <link rel="stylesheet" type="text/css" href="{{asset('vendors/ui/jquery-ui.css')}}">

</head>

<body>
  <input type="hidden" id="siteNo" value="{{$siteNo}}">
  <div id="sideNavigation" class="hidden-lg hidden-md">
    <div class="shadow"></div>
    <div id="navigation">

      <ul>
        <li><a href="{{route('home',['siteNo'=>$siteNo])}}">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">What's New</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="{{route('delivery',['siteNo'=>$siteNo])}}" class="active">Food Delivery</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>

    </div>
  </div>
  <div id="banner" style="width: 100%; height: 50%;">

    <div id="subBanner" data-image="{{asset('images/subbanner/wendys.jpg')}}" style="background: url(&quot;{{asset('images/subbanner/wendys.jpg')}}&quot;) center center / cover;"></div>
  </div>


  <div class="clear"></div>
  <div id="wrapper">
    <!-- gcodeStart 1.18.16 -->
    <div id="app-g">
      <p style="color:#ffffff;">Wendy's app Available on</p>
      <a href="https://play.google.com/store/apps/details?id=com.ivant.wendys&amp;hl=en">
        <img class="badge-g" src="{{asset('images/play_app_badge.png')}}">
    </a>
      <a href="https://itunes.apple.com/us/app/wendys-ph/id1011641436?ls=1&amp;mt=8">
        <img class="badge-g" src="{{asset('images/ios_app_badge.png')}}">
    </a>
    </div>
    <!-- gcodeEnd -->
    <div id="header" style="height:124px;">

      <div id="pattern">

        <div class="container">

          <div class="row">

            <div class="col-md-3 col-xs-6">

              <div id="logo">
                <a href="https://wendys.com.ph/home/">
                                <img src="{{asset('images/misc/logo.png')}}" alt="Wendy's Logo">
                            </a>
              </div>

            </div>

            <div class="col-md-9 col-xs-6">

              <div class="text-right marginTop">

                <div class="colorRed">Philippine local time</div>
                <div class="time">{{date("h:ia")}} | {{date("M n, Y")}}</div>

              </div>

              <div id="navToggle" class="navbar-header">
                <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
              </div>

              <div class="hidden-sm hidden-xs">

                <div id="navigation">

                  <ul>
                    <li><a href="{{route('home',['siteNo'=>$siteNo])}}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">What's New</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="{{route('delivery',['siteNo'=>$siteNo])}}" class="active">Food Delivery</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>
    <div id="content">

      @yield('categories')
      <div class="container">

        <div class="row">

          <div class="col-md-3 col-md-push-9">

            <form action="#">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="search food delivery here" name="q" autocomplete="off">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search" style="padding: 3px; padding-left: 1px; padding-right: 1px;"></span>
                </button>
                </span>
              </div>
              <p>&nbsp;</p>
            </form>

            <div id="cart">

              <div class="cart">

                <h2 class="title">Your Cart</h2>
                <div id="miniCart">
                  <form id="miniCartForm" class="formPreloader" data-source="miniCart">
                    <div class="cartContainer">
                      <div class="col-md-12" id="emptyCart">Currently, you have no order</div>
                    </div>
                  </form>
                </div>

              </div>

            </div>
            <p>&nbsp;</p>

            <div class="panel panel-default">
              <div class="panel-heading">&nbsp;</div>
              <div class="panel-body">
                <div class="sidenav">
                  <ul>
                    <li><a href="https://wendys.com.ph/my-account/login/">Login</a></li>
                    <li><a href="https://wendys.com.ph/my-account/register/">Register</a></li>
                    <li><a href="https://wendys.com.ph/my-account/forgot-password/">Forgot Password</a></li>
                    <li><a href="https://wendys.com.ph/my-account/re-activate-account/">Re-activate Account</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <p style="text-align: center;"><img alt="" height="" src="https://wendys.com.ph/file-manager/images/WENDYS%20PULLEDPORK%20POSTER%20FA%20FEBRUARY20.jpg" width=""></p>

            <p style="text-align: center;">&nbsp;</p>

            <p style="text-align: center;">&nbsp;</p>

            <p style="text-align: center;">&nbsp;</p>

            <p style="text-align: center;">&nbsp;</p>

          </div>

          @yield('content')

	<div id="footer">

        <div class="container positionRelative">

        	<div id="quickLogin" class="hidden-sm hidden-xs">
            	<a href="#" class="quickButton">
					Login                </a>
                <div class="dashboard row">
                	                            <div class="register col-md-4">
                                <h2 class="title">Create New Account</h2>
                                <p><big>You are not a member?</big><br>Please join us now!&nbsp;</p>
                                <button type="button" onclick="#'">
                                    <div>Register</div> <span></span>
                                </button>
                                <div class="divider"></div>
                            </div>
                            <div class="login col-md-8">
                                <p class="noti">Please enter your e-mail address and password.</p>
                                <form id="login" data-source="login" class="form-inline row" role="form">
                                    <div class="form-group col-md-6">
                                        <div class="input-group marginBottom">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                            <input type="text" class="form-control" name="emailAddress" placeholder="E-mail Address" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <div class="input-group marginBottom">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                            <input type="password" class="form-control" name="password" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <a href="#">Forgot Password?</a> |
                                        <a href="#">Re-activate Account</a>
                                    </div>
                                    <div class="form-group col-md-4 text-right">
                                        <button type="submit">
                                            <div>Sign In</div> <span></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                                    </div>
            </div>

        	<div class="row">
<div class="col-md-4">
<div id="left" style="margin-right: -60px;">Copyright -&nbsp;<a href="#">About Us</a>&nbsp;-&nbsp;<a href="#">terms and condition</a>&nbsp;-&nbsp;<a href="https://www.wendys.com.ph/privacy-policy/">Privacy Policy</a>
</div>
</div>

<div class="col-md-6">
<div id="right">IT'S THE BEST TIME TO CONNECT.&nbsp;LIKE / FOLLOW US <a href="http://www.facebook.com/WendysPhilippines?ref=ts&amp;fref=ts" target="_blank"> <img src="{{asset('images/icons/social_fb.png')}}"> </a> <a href="https://twitter.com/WendysPhils" target="_blank"> <img src="{{asset('images/icons/social_twitter.png')}}"> </a></div>
</div>
</div>
        </div>



    </div>



</strong></strong>
  </div><strong><strong>

  <script type="text/javascript" src="{{asset('js/jquery-1.9.1.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/bootstrap/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/lazyLoad/jquery.lazyload.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/prettyPhoto/jquery.prettyPhoto.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/print-area/jquery.PrintArea.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/ui/jquery-ui-1.10.4.custom.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/ui/jquery.easing.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/camera/jquery.mobile.customized.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/camera/jquery.easing.1.3.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/camera/camera.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/library/library.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/bootstrap/js/html5shiv.js')}}"></script>
  @if($siteNo == 1 || $siteNo == 4 || $siteNo == 6 || $siteNo == 8)
  <script type="text/javascript" src="{{asset('js/dropdown-cart.js')}}"></script>
  @else
  <script type="text/javascript" src="{{asset('js/cart.js')}}"></script>
  @endif
  @if($siteNo != 0)
    <script type="text/javascript" src="{{asset('js/item-combo-toggle.js')}}"></script>
  @endif


</strong></strong><iframe id="avdfi_1509541953903" src="javascript:'<html><body style=&quot;background:transparent&quot;></body></html>'" height="0" width="0" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" style="width: 0px; height: 0px; border: 0px none; background: none;"></iframe>
</body>

</html>
