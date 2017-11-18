@extends('layouts.checkout-default')
@section('content')
  <div class="row">

	<div class="col-md-3 col-md-push-9">


<p style="text-align: center;"><img alt="" height="" src="https://wendys.com.ph/file-manager/images/WENDYS%20PULLEDPORK%20POSTER%20FA%20FEBRUARY20.jpg" width=""></p>

<p style="text-align: center;">&nbsp;</p>

<p style="text-align: center;">&nbsp;</p>

<p style="text-align: center;">&nbsp;</p>

<p style="text-align: center;">&nbsp;</p>

    </div>

	<div class="col-md-9 col-md-pull-3">

    	<p class="hidden-sm hidden-xs">&nbsp;</p>
    	<p class="hidden-sm hidden-xs">&nbsp;</p>
        <div class="info alert alert-info">Please select the preferred payment method to pay your bills.</div>
    	<form method="post" role="form" class="formPreloader form-horizontal">

	        <div class="form-group">
            	<div class="col-sm-12">
		            <p><label class="radio"><div class="checked"></div><input type="radio" name="paymentMethod" value="czoxMToiQ3JlZGl0IENhcmQiOw==" checked=""> Credit Card <img src="{{asset('images/misc/creditCard.jpg')}}"> Pay via iPay88 gateway.</label></p>
                    		            <p><label class="radio"><div></div><input type="radio" name="paymentMethod" value="czo2OiJDLk8uRC4iOw=="> C.O.D. <img src="{{asset('images/misc/cashOnDelivery.jpg')}}" class="specialMargin"> Cash on delivery <img src="{{asset('images/misc/e-plus.png')}}" class="marginLeft"></label></p>
                                    </div>
            </div>
                        <div class="form-group">
            	<div class="col-sm-12 text-right">
                	<a href="{{route('checkout',['stepNo' => 2, 'siteNo' => $siteNo])}}"><button type="button" class="btn btn-warning">
                    	Previous
                    </button></a>
              		<a href="{{route('checkout',['stepNo' => 4, 'siteNo' => $siteNo])}}"><button type="button" class="btn btn-warning" name="step-3">
                    	Continue
                    </button></a>
                    <a href="{{route('categories',['siteNo' => $siteNo])}}"><button type="button" class="btn btn-warning" onclick="location.href='https://wendys.com.ph/delivery/'">
                    	Cancel Order
                    </button></a>
            	</div>
          	</div>

        </form>


    </div>

</div>
@endsection
