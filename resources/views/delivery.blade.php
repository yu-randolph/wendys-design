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

  <script type="text/javascript" src="{{asset('vendors/bootstrap/js/html5shiv.js')}}"></script>
  <script type="text/javascript" src="{{asset('vendors/bootstrap/js/respond.min.js')}}"></script>

  <script type="text/javascript" src="{{asset('js/responsiveslides.js')}}"></script>
  <script src="{{asset('js/responsiveslides.js')}}"></script>

  <!-- JAVASCRIPT FOR DELIVERY PREFERRED BRANCH-->

  <script type="text/javascript">
    jQuery(document).ready(function() {
      /*  John Paul Cas */
      var indicator = false;
      var isValid = false;

      function showMessage() {
        // this is a test
        alert("Opps something great will happen");
      }

      function same() {

        var ul = document.getElementById("branches");
        var items = ul.getElementsByTagName("li");

        var prevcity = document.getElementById("previousCity").getAttribute("data-previous-city");

        for (var i = 0; i < items.length; i++) {
          items[i].style.display = "block";
          if (items[i].getAttribute("data-city-id") != prevcity) {
            items[i].style.display = "none";
          }
        }

      }

      function newCity() { // new is a reserve word
        var ul = document.getElementById("branches");
        var items = ul.getElementsByTagName("li");

        var sel = document.getElementById("city");
        var cityId = sel.options[sel.selectedIndex].getAttribute("data-city-id");
        var count = 0;

        for (var i = 0; i < items.length; i++) {
          items[i].style.display = "block";
          if (items[i].getAttribute("data-city-id") != cityId) {
            items[i].style.display = "none";
            count++;
          }
        }

        if (count == items.length)
          emptyDataModalDisplaySetting();
        else
          document.getElementById("head").innerHTML = "Please select preferred store <br>to continue.";
      }

      $('#sameAddress').click(function() {
        dataModalDisplaySetting();
      });

      /*$('#checkbox_div input[type="radio"]').click(function() {
  alert("clicked") ;
 });*/

      /* $("#city").click(newCity); v1 */
      $("#city").change(newCity);

      $("#submitBrachForm").click(function() {

        var orderHour = $("#hourOrder");
        var orderMinute = $("#minuteOrder");
        var meridiemOrder = $("#meridiemOrder");

        var checkItem = $("input[name='preferredStore']:checked");
        var branchOpening = parseInt(checkItem.attr("data-branch-opening"));
        var branchOpeningMinute = parseInt(checkItem.attr("data-branch-opening-minute"));
        var branchClosing = parseInt(checkItem.attr("data-branch-closing"));
        var branchClosingMinute = parseInt(checkItem.attr("data-branch-closing-minute"));
        var branchOpeningMeridiem = checkItem.attr("data-branch-opening-meridiem");
        var branchClosingMeridiem = checkItem.attr("data-branch-closing-meridiem");
        var branchName = checkItem.val();

        if (isEmptyField(checkItem)) {
          alert("You need to select store");
          return false;
        } else {
          if (!isImmediateDeliver()) {
            // this algorithm is design only if the opening meridiem is AM and closing meridiam is PM
            if (meridiemOrder.val() == 'AM') {
              if (branchOpening == 12) {
                // check if the branch opening is 12pm
                if ((parseInt(orderHour.val()) == branchOpening || (parseInt(orderHour.val()) > (branchOpening / 12) && parseInt(orderHour.val()) < 12))) {
                  // send the form
                  $("#stepTwoSubmitForm").submit();
                  $("#cityBranchListModal").modal().hide();
                } else {
                  // show error notification here
                  alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm in " + branchName + " Branch.");
                }

              } else {

                if ((parseInt(orderHour.val())) >= branchOpening) {
                  $("#stepTwoSubmitForm").submit();
                  $("#cityBranchListModal").modal().hide();

                } else {
                  // show some error notification here
                  alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm in " + branchName + " Branch.");
                }
              }
            } else {
              if (branchClosing == 12) {
                if ((parseInt(orderHour.val())) == branchClosing) {
                  if (parseInt(orderMinute.val()) <= (branchClosingMinute - 30)) {
                    $("#stepTwoSubmitForm").submit();
                    $("#cityBranchListModal").modal().hide();

                  } else {
                    alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm and 30 minutes before " +
                      branchName + " Branch closing time.");
                  }

                } else {
                  alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm in " + branchName + " Branch.");
                }
              } else {
                var orderHours = parseInt(orderHour.val());
                var orderMenutes = parseInt(orderMinute.val());
                var branchClosingHour = branchClosing;
                var branchClosingMinuteTemp = branchClosingMinute;

                if (orderMinute.val() > (branchClosingMinute - 30)) {
                  branchClosingHour = branchClosingHour - 1;
                  branchClosingMinuteTemp = (branchClosingMinuteTemp + 60);
                }

                if (orderHours == branchClosingHour && orderMinute.val() <= (branchClosingMinuteTemp - 30)) {
                  $("#stepTwoSubmitForm").submit();
                  $("#cityBranchListModal").modal().hide();

                } else if (orderHours < branchClosingHour) {
                  $("#stepTwoSubmitForm").submit();
                  $("#cityBranchListModal").modal().hide();

                } else {
                  alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm and 30 minutes before " +
                    branchName + " Branch closing time.");
                }
              }
            }
          } else {

            var date = new Date();

            var orderHours = date.getHours();
            var orderMinutes = date.getMinutes();
            var meridiem = date.getHours() > 11 ? 'PM' : 'AM';



            if (meridiem == 'AM') {
              if (branchOpening == 12) {
                // check if the branch opening is 12pm
                if ((orderHours == branchOpening || (orderHours > (branchOpening / 12) && orderHours < 12))) {
                  // send the form
                  $("#stepTwoSubmitForm").submit();
                  $("#cityBranchListModal").modal().hide();
                } else {
                  // show error notification here
                  alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm in " + branchName + " Branch.");
                }

              } else {
                if (orderHours >= branchOpening) {
                  $("#stepTwoSubmitForm").submit();
                  $("#cityBranchListModal").modal().hide();

                } else {
                  // show some error notification here
                  alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm in " + branchName + " Branch.");
                }
              }
            } else {
              // PM code here
              if (branchClosing == 12) {
                if (orderHours == branchClosing) {
                  if (orderMinutes <= (branchClosingMinute - 30)) {
                    $("#stepTwoSubmitForm").submit();
                    $("#cityBranchListModal").modal().hide();

                  } else {
                    alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm and 30 minutes before " +
                      branchName + " Branch closing time.");
                  }

                } else {
                  alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm in " + branchName + " Branch.");
                }
              } else {

                var branchClosingHour = branchClosing;
                var branchClosingMinuteTemp = branchClosingMinute;
                var orderHourz = (orderHours - 12);

                if (orderMinutes > (branchClosingMinute - 30)) {
                  branchClosingHour = branchClosingHour - 1;
                  branchClosingMinuteTemp = (branchClosingMinuteTemp + 60);
                }

                if (orderHourz == branchClosingHour && orderMinutes <= (branchClosingMinuteTemp - 30)) {
                  $("#stepTwoSubmitForm").submit();
                  $("#cityBranchListModal").modal().hide();

                } else if (orderHourz < branchClosingHour) {
                  $("#stepTwoSubmitForm").submit();
                  $("#cityBranchListModal").modal().hide();

                } else {
                  alert("Sorry, you can only order between " + branchOpening + ":" + formatStringNumber(branchOpeningMinute) + " am to " + branchClosing + ":" + formatStringNumber(branchClosingMinute) + " pm and 30 minutes before " +
                    branchName + " Branch closing time.");
                }
              }

            }
            /*

                            $("#stepTwoSubmitForm").submit();
                            $("#cityBranchListModal").modal().hide();*/
          }
        }
      });

      // validate new order information
      $("#btnValidateNewInformation").click(function() {


        var city = $("#city");
        var newOrderFirstName = $("#newOrderFirstName");
        var newOrderLastName = $("#newOrderLastName");
        var newOrderAddress1 = $("#newOrderAddress1");
        var newOrderStreetAddress = $("#newOrderStreetAddress");
        var newOrderAddress3 = $("#newOrderAddress3");
        var newOrderCountry = $("#newOrderCountry");
        var newOrderProvince = $("#newOrderProvince");
        var newOrderContactNumber = $("#newOrderContactNumber");
        var storeDineinForPickup = $("#storeDineinForPickup");

        var orderDate = $("#date");
        var orderHour = $("#hourOrder");
        var orderMinute = $("#minuteOrder");
        var meridiemOrder = $("#meridiemOrder");

        var errorMessage = "Please fill up the following field below";

        /*else if (isFieldEmptyAndEnabled(newOrderFirstName)
                || isFieldEmptyAndEnabled(newOrderLastName) || isFieldEmptyAndEnabled(newOrderAddress1)
                || isFieldEmptyAndEnabled(newOrderStreetAddress || isFieldEmptyAndEnabled(newOrderAddress3)
                || isFieldEmptyAndEnabled(newOrderCountry) || isFieldEmptyAndEnabled(newOrderProvince)
                || isFieldEmptyAndEnabled(city) || isFieldEmptyAndEnabled(newOrderContactNumber))) */
        if (!isDineinOrForPickup()) {

          if (!isSameAsBillingCheck()) {
            newCity();
          } else {
            same();
          }

          if (!isSameAsBillingCheck()) {

            /* remove all error field */
            removeFieldError(newOrderFirstName, newOrderLastName, newOrderAddress1,
              newOrderStreetAddress, newOrderAddress3, newOrderProvince, newOrderCountry,
              city, newOrderContactNumber);

            setIndicator(false);

            if (isEmptyField(newOrderFirstName)) {
              errorMessage += "\n First Name";
              showErrorField(newOrderFirstName);
            }

            if (isEmptyField(newOrderLastName)) {
              errorMessage += "\n Last Name";
              showErrorField(newOrderLastName);
            }

            if (isEmptyField(newOrderAddress1)) {
              errorMessage += "\n Floor/ Dept. / Building";
              showErrorField(newOrderAddress1);
            }

            if (isEmptyField(newOrderStreetAddress)) {
              errorMessage += "\n Street";
              showErrorField(newOrderStreetAddress);
            }

            if (isEmptyField(newOrderAddress3)) {
              errorMessage += "\n Area / Subdivision / Barangay / District";
              showErrorField(newOrderAddress3);
            }

            if (isEmptyField(newOrderCountry)) {
              errorMessage += "\n Country";
              showErrorField(newOrderCountry);
            }

            if (isEmptyField(newOrderProvince)) {
              errorMessage += "\n Province";
              showErrorField(newOrderProvince);
            }

            if (isEmptyField(city)) {
              errorMessage += "\n City";
              showErrorField(city);
            }

            if (isEmptyField(newOrderContactNumber)) {
              errorMessage += "\n Contact Number";
              showErrorField(newOrderContactNumber);
            }

            if (!isImmediateDeliver()) {
              if (isEmptyField(orderDate) || isEmptyField(orderHour) || isEmptyField(orderMinute)) {
                showErrorField(orderDate);
              } else {
                removeErrorField(orderDate);
                if (!getIndicator())
                  $("#cityBranchListModal").modal();
              }
            } else {
              if (!getIndicator()) {
                $("#cityBranchListModal").modal();
              } else {
                alert(errorMessage);
              }
            }
            /*if (!getIndicator()) {
                    $("#cityBranchListModal").modal();
            } */

          } else {
            if (!isImmediateDeliver()) {

              if (isEmptyField(orderDate) || isEmptyField(orderHour) || isEmptyField(orderMinute)) {
                showErrorField(orderDate);
              } else {
                $("#cityBranchListModal").modal();
              }

            } else {
              $("#cityBranchListModal").modal();
            }

          }
        } else {

          removeErrorField(orderDate);
          removeErrorField(storeDineinForPickup);

          isValid = true;
          // validator if Dine-in/For Pick up is checked
          if (isEmptyField(orderDate) || isEmptyField(orderHour) || isEmptyField(orderMinute)) {
            showErrorField(orderDate);
            isValid = false;
          }

          if (isEmptyField(storeDineinForPickup)) {
            showErrorField(storeDineinForPickup);
            isValid = false;
          }

          if (isValid == true) {
            $("#stepTwoSubmitForm").submit();
          } else {
            alert("field is required");
          }
        }

        /*else {

            alert("item is immediateDeliver");
            // $("#cityBranchListModal").modal(); // show modal
        }*/

      });

      $("#btnCloseDialog").click(function() {
        // get back the settin when button was click
        dataModalDisplaySetting();
      });

      function dataModalDisplaySetting() {
        document.getElementById("modal-content-body").style.visibility = "visible";
        document.getElementById("submitBrachForm").style.visibility = "visible";
        document.getElementById("modal-content-body").style.height = "300px";
        document.getElementById("btnCloseDialog").value = "Close";
      }

      function emptyDataModalDisplaySetting() {
        document.getElementById("modal-content-body").style.visibility = "hidden";
        document.getElementById("submitBrachForm").style.visibility = "hidden";
        document.getElementById("modal-content-body").style.height = "35px";
        document.getElementById("btnCloseDialog").value = "Ok";
        document.getElementById("head").innerHTML = "Sorry, there's no available Wendy's <br> delivery store near you.";
      }

      function removeFieldError(newOrderFirstName, newOrderLastName, newOrderAddress1, newOrderStreetAddress, newOrderAddress3, newOrderProvince, newOrderCountry, city, newOrderContactNumber) {
        // remove all error field before checking
        removeErrorField(newOrderFirstName);
        removeErrorField(newOrderLastName);
        removeErrorField(newOrderAddress1);
        removeErrorField(newOrderAddress3);
        removeErrorField(newOrderStreetAddress);
        removeErrorField(newOrderProvince);
        removeErrorField(newOrderCountry);
        removeErrorField(city);
        removeErrorField(newOrderContactNumber);
      }


      function isFieldEmptyAndEnabled(elementVar) {
        if (!isDisabledField(elementVar) || isEmptyField(elementVar)) {
          return true;
        }

        return false;
      }

      function isImmediateDeliver() {
        /*check if immediate delivery is checked, if checked return true otherwise false*/
        if ($('#immediateDeliver').is(':checked')) {
          $('#immediateDeliver').closest('.form-group').removeClass('has-error');
          return true;
        }

        return false;
      }

      function isDineinOrForPickup() {
        if ($('#dineInForPickUp').is(':checked')) {
          return true;
        }

        return false;
      }

      function isSameAsBillingCheck() {
        if ($("#sameAddress").is(":checked")) {
          return true;
        }

        return false;
      }

      function isDisabledField(elementVar) {
        /*checked if the element pass is disabled or not, if field is disabled return true otherwise false*/
        if (elementVar.is(":disabled")) {
          return true;
        }

        return false;
      }

      function formatStringNumber(number) {
        // format the string to make it look like two decimal number
        if (number.toString().length > 1)
          return number;

        return '0' + number;
      }

      function showErrorField(elementVar) {
        /* mark field as error field */
        setIndicator(true);
        elementVar.closest('.form-group').removeClass('has-success').addClass('has-error');
      }

      function removeErrorField(elementVar) {
        /*remove error field*/
        elementVar.closest('.form-group').removeClass('has-error');
      }

      function isEmptyField(elementVar) {
        /* check if the element field is empty or not, if field is empty return true else return false*/
        if ($.trim(elementVar.val()).length <= 0 || elementVar.val() === 'undefined' || elementVar.val() == '' || elementVar.val == null) {
          setIndicator(true);
          return true;
        }

        return false;
      }

      function setIndicator(indicator) {
        this.indicator = indicator;
      }

      function getIndicator() {
        return this.indicator;
      }

    });
  </script>

</head>

<body>



  <div id="sideNavigation" class="hidden-lg hidden-md">
    <div class="shadow"></div>
    <div id="navigation">

      <ul>
        <li><a href="{{route('home')}}">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">What's New</a></li>
        <li><a href="#">Stores</a></li>
        <li><a href="#">Careers</a></li>
        <li><a href="{{route('delivery')}}" class="active">Food Delivery</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>

    </div>
  </div>
  <div id="banner" style="width: 100%; height: 50%;">

    <div id="subBanner" data-image="https://wendys.com.ph/images/subbanner/wendys.jpg" style="background: url(&quot;https://wendys.com.ph/images/subbanner/wendys.jpg&quot;) center center / cover;"></div>
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
                <div class="time">09:12pm | Nov 1, 2017</div>

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
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">What's New</a></li>
                    <li><a href="#">Stores</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="{{route('delivery')}}" class="active">Food Delivery</a></li>
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


      <div class="container">

        <div class="row">

          <div class="col-md-3 col-md-push-9">

            <form action="https://wendys.com.ph/search/">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="search food delivery here" name="q" autocomplete="off">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
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
                      <div class="col-md-12">Currently, you have no order</div>
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

          <div class="col-md-9 col-md-pull-3">


            <p><span style="color:#FF0000;"><strong><big>Welcome to Wendy's ONLINE ORDERING SYSTEM</big></strong></span></p>

            <p><br>
              <strong>1. We accept orders from 8am to 12mn and on a 24/7 basis on selected areas. (Philippine Time)</strong></p><strong>

							<p><strong>2. We deliver for a minimum order of P250.00 and within 2km of our restaurants.  Delivery schedule and prices are subject to change without prior notice.</strong></p><strong>

							<p><strong>3. Delivery time varies per area and applies only up to village gates and building lobbies and on good weather conditions.</strong></p><strong>

							<p><strong>4. Please&nbsp;email us at&nbsp;<font color="#ff0000"><a href="mailto:delivery@wendys.com.ph">delivery@wendys.com.ph</a>&nbsp;</font>for any concerns on delivery or you may call us at 533-33-33.</strong></p>
            <p><strong>5. Wendy's will assume that you have read, fully understood and accepted our Privacy Policy at the bottom of the page before placing your food order. </strong></p>

            <!--	<p>Wenphil DPO Contact; dpo@wendys.com.ph  and tel # +63 02 6252778 local 133</p> -->

            <p><strong>Thank you for choosing Wendy's online &nbsp;delivery</strong></p>


            <p>&nbsp;</p>

            <p>
              <!--Sorry, online order not available at this time. Please come back shortly!--><a class="btn btn-warning" href="https://wendys.com.ph/delivery/categories/">Order Now!</a></p>


            <br>
            <p><img src="https://wendys.com.ph/images/misc/googleplay2.png" alt="DOWNLOAD NOW!" width="644" height="339" usemap="#wendys"><map name="wendys">
<area alt="Google Play" title="Google Play" href="https://play.google.com/store/apps/details?id=com.ivant.wendys&amp;hl=en" shape="rect" coords="119,179,308,224" style="outline:none;" target="_blank">
<area alt="App Store" title="App Store" href="https://itunes.apple.com/us/app/wendys-ph/id1011641436?ls=1&amp;mt=8 " shape="rect" coords="115,231,288,288" style="outline:none;" target="_blank">
</map></p>

            </strong>
            </strong>
            </strong>
          </div><strong><strong>

        </strong></strong>
        </div><strong><strong>

    </strong></strong>
      </div><strong><strong>

</strong></strong>
    </div><strong><strong>
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
<div id="right">IT'S THE BEST TIME TO CONNECT.&nbsp;LIKE / FOLLOW US <a href="http://www.facebook.com/WendysPhilippines?ref=ts&amp;fref=ts" target="_blank"> <img src="https://wendys.com.ph/file-manager/images/Icons/social_fb.png"> </a> <a href="https://twitter.com/WendysPhils" target="_blank"> <img src="https://wendys.com.ph/file-manager/images/Icons/social_twitter.png"> </a></div>
</div>
</div>
        </div>



    </div>



</strong></strong>
  </div><strong><strong>

  <script type="text/javascript" src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
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

</strong></strong><iframe id="avdfi_1509541953903" src="javascript:'<html><body style=&quot;background:transparent&quot;></body></html>'" height="0" width="0" marginheight="0" marginwidth="0" frameborder="0" scrolling="no" style="width: 0px; height: 0px; border: 0px none; background: none;"></iframe>
</body>

</html>
