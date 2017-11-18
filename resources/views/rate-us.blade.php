@extends('layouts.checkout-default')
@section('content')
  <style media="screen">
    .rating-container > .clear-rating{
      display: none;
    }
    .rating-container > .caption{
      margin-top: 10px;
    }
    .rating-stars > .filled-stars{
      color: #DC2033;
    }
  </style>
  <input type="hidden" name="base-path" id="base-path" value="{{asset('/')}}">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
          <center><h1 style="color: black;">How would your rate your overall online ordering experience?</h1></center>
      </div>
      <div class="col-md-4 col-md-offset-4">
        <input id="input-id" type="text" class="rating" data-size="lg" >
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">Any comments?</div>
      <div class="col-md-5">
        <textarea rows="4" cols="50">

        </textarea>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-12 text-right">
      <button type="button" class="btn btn-warning">
          Previous
        </button>
      <a href="{{route('checkout',['stepNo' => 4,'siteNo' => $siteNo])}}"><button type="submit" name="step-4" class="displayNone"></button></a>
      <a href="{{route('home',['siteNo' => $siteNo])}}"><button type="button" class="btn btn-warning" name="placeOrder" id="btn-order">
          Submit Review
        </button></a>
    </div>
  </div>
  <script>
  // initialize with defaults
  $("#input-id").rating();

  // with plugin options (do not attach the CSS class "rating" to your input if using this approach)
  $("#input-id").rating({'size':'lg'});
  </script>
@endsection
