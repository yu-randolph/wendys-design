<html>

<head>
  <title>Home | Wendy's</title>

  <meta name="Keywords" content="Wendys, hamburger, frosty, salad">
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

  <script type="text/javascript" src="{{asset('vendors/bootstrap/js/html5shiv.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/bootstrap/js/respond.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('js/responsiveslides.js')}}"></script>
  <script src="{{asset('/js/responsiveslides.js')}}"></script>
</head>

<body>



  <div id="sideNavigation" class="hidden-lg hidden-md">
    <div class="shadow"></div>
    <div id="navigation" class="animate">

      <ul>
        <li><a href="{{route('home')}}" class="active">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">What's New</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="{{route('delivery')}}">Food Delivery</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>

    </div>
  </div>
  <div id="banner" style="width: 100%; height: 50%;">
    <script type="text/javascript">
      var fx = "simpleFade";
      var timePeriod = 800;
      var transPeriod = 800;
    </script>
    <div class="camera_wrap camera_azure_skin" id="mastHead" style="display: block; margin-bottom: 67px;">
          <div data-src="{{asset('images/banner/SALAD WELCOME.jpg')}}" data-link=""></div>
          <div data-src="{{asset('images/banner/salad bar.jpg')}}" data-link=""></div>
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
    <div id="header" style="height: 165px; display: block;" class="forAnimation">

      <div id="pattern" class="forAnimation" style="display: block;">

        <div class="container">

          <div class="row">

            <div class="col-md-3 col-xs-6">

              <div id="logo" class="forAnimation" style="display: block;">
                <a href="https://wendys.com.ph/home/">
                                <img src="{{asset('images/misc/logo.png')}}" alt="Wendy's Logo">
                            </a>
              </div>

            </div>

            <div class="col-md-9 col-xs-6">

              <div class="text-right marginTop">

                <div class="colorRed">Philippine local time</div>
                <div class="time">08:19pm | Nov 1, 2017</div>

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

                <div id="navigation" class="">

                  <ul>
                    <li><a href="{{route('home')}}" class="active">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">What's New</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="{{route('delivery')}}">Food Delivery</a></li>
                    <li><a href="#">Contact Us</a></li>
                  </ul>

                </div>

              </div>

            </div>

          </div>

        </div>

      </div>

    </div>


    <script>
      var j = $.noConflict();
      jQuery(window).load(function() {
        j(".rslides").responsiveSlides({
          speed: 1000,
          auto: true

        });
      });
    </script>
    <style>
      .OrderButton {
        position: absolute;
        bottom: 8px;
        background: none;
        border-color: orange;
        right: 6px;
        color: orange;
        font-weight: bold;
        width: 134px;
      }
    </style>
    <ul class="rslides rslides1">
      <li id="rslides1_s0" class="" style="display: list-item; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 1000ms ease-in-out;"><img src="https://wendys.com.ph/images/banner/1600 SALAD WELCOME.jpg" alt="">
        <a href="https://wendys.com.ph/delivery/categories/">
				<img src="../images/btnOrderNow.png" style="position:absolute;bottom: 7px;width:250px;opacity: 0.8;right:0px;">
			</a>
      </li>
      <li id="rslides1_s1" class="" style="display: list-item; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 1000ms ease-in-out;"><img src="https://wendys.com.ph/images/banner/web banner XMAS_BMM_.jpg" alt="">
        <a href="https://wendys.com.ph/delivery/categories/deluxe-value-sandwiches/christmas-bacon-ham-mushroom-melt/ ">
				<img src="../images/btnOrderNow.png" style="position:absolute;bottom: 7px;width:250px;opacity: 0.8;right:0px;">
			</a>
      </li>
      <li id="rslides1_s2" class="rslides1_on" style="display: list-item; float: left; position: relative; opacity: 1; z-index: 2; transition: opacity 1000ms ease-in-out;"><img src="https://wendys.com.ph/images/banner/5 for P125 meal web.jpg" alt="">
        <a href="https://wendys.com.ph/delivery/categories/fried-chicken/5-for-p125/">
				<img src="../images/btnOrderNow.png" style="position:absolute;bottom: 7px;width:250px;opacity: 0.8;right:0px;">
			</a>
      </li>
      <li id="rslides1_s3" class="" style="display: list-item; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 1000ms ease-in-out;"><img src="https://wendys.com.ph/images/banner/web profile photo.jpg" alt="">
        <a href="https://wendys.com.ph/delivery/categories/signature-sides/criss-cut-fries/">
				<img src="../images/btnOrderNow.png" style="position:absolute;bottom: 7px;width:250px;opacity: 0.8;right:0px;">
			</a>
      </li>
      <li id="rslides1_s4" class="" style="display: list-item; float: none; position: absolute; opacity: 0; z-index: 1; transition: opacity 1000ms ease-in-out;"><img src="https://wendys.com.ph/images/banner/salad bar (1).jpg" alt="">
        <a href="https://wendys.com.ph/delivery/categories/fresh-crisp-salads/">
				<img src="../images/btnOrderNow.png" style="position:absolute;bottom: 7px;width:250px;opacity: 0.8;right:0px;">
			</a>
      </li>
    </ul>

    <div class="midButtonContainer-respnsv">
      <table cellpadding="0">
        <tbody>
          <tr>
            <td width="30%"><a href="https://wendys.com.ph/whats-new/">
			  		<img src="{{asset('images/newBtn.png')}}">
			  		<p style="color:#ffcc00;">What's New</p>
			  		</a>
            </td>
            <td width="30%"><a href="https://wendys.com.ph/delivery/">
			 		<img src="{{asset('images/deliveryBtn.png')}}">
			 		<p style="color:#ffcc00;">Food Delivery</p>
			 		</a>
            </td>
            <td width="30%"><a href="https://wendys.com.ph/stores/">
			  		<img src="{{asset('images/storeIcon.png')}}">
			  		<p style="color:#ffcc00;">Store</p>
			  		</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="homeImg" style="">
      <img src="{{asset('images/wendys_breakfast.jpg')}}">
    </div>
    <div id="footer">

      <div class="container positionRelative">

        <div id="quickLogin" class="hidden-sm hidden-xs">
          <a href="#" class="quickButton">
					Login                </a>
          <div class="dashboard row">
            <div class="register col-md-4">
              <h2 class="title">Create New Account</h2>
              <p><big>You are not a member?</big><br>Please join us now!&nbsp;</p>
              <button type="button" onclick="location.href='https://wendys.com.ph/my-account/register/'">
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
                  <a href="https://wendys.com.ph/my-account/forgot-password/">Forgot Password?</a> |
                  <a href="https://wendys.com.ph/my-account/re-activate-account/">Re-activate Account</a>
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
            <div id="left" style="margin-right: -60px;">Copyright -&nbsp;<a href="https://www.wendys.com.ph/about-us/">About Us</a>&nbsp;-&nbsp;<a href="https://www.wendys.com.ph/terms-and-conditions/">terms and condition</a>&nbsp;-&nbsp;<a href="https://www.wendys.com.ph/privacy-policy/">Privacy Policy</a>
            </div>
          </div>

          <div class="col-md-6">
            <div id="right">IT'S THE BEST TIME TO CONNECT.&nbsp;LIKE / FOLLOW US <a href="http://www.facebook.com/WendysPhilippines?ref=ts&amp;fref=ts" target="_blank"> <img src="{{asset('images/icons/social_fb.png')}}"> </a> <a href="https://twitter.com/WendysPhils"
                target="_blank"> <img src="{{asset('images/icons/social_twitter.png')}}"> </a></div>
          </div>
        </div>
      </div>
      <div class="midButtonContainer">
        <table cellpadding="0">
          <tbody>
            <tr>
              <td width="30%"><a href="https://wendys.com.ph/whats-new/">
                    <img src="{{asset('images/newBtn.png')}}">
                    <p style="color:#ffcc00;">What's New</p>
                    </a>
              </td>
              <td width="30%"><a href="https://wendys.com.ph/delivery/">
                    <img src="{{asset('images/deliveryBtn.png')}}">
                    <p style="color:#ffcc00;">Food Delivery</p>
                    </a>
              </td>
              <td width="30%"><a href="https://wendys.com.ph/stores/">
                    <img src="{{asset('images/storeIcon.png')}}">
                    <p style="color:#ffcc00;">Store</p>
                    </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>


    </div>



  </div>

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
  <script type="text/javascript" src="{{asset('js/script.js')}}"></script>

  <iframe id="avdfi_1509538756539" src="javascript:'<html><body style=&quot;background:transparent&quot;></body></html>'" height="0" width="0" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" style="width: 0px; height: 0px; border: 0px none; background: none;"></iframe>
</body>

</html>
