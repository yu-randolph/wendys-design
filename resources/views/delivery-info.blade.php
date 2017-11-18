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
      <!-- <div class="info alert alert-info">Note: Wendy's delivery only accept orders from 8am to 12mn (based on the current local date and time in the Philippines).</div> -->
      <form method="post" id="stepTwoSubmitForm" role="form" class="formPreloader form-horizontal">

        <div class="form-group">
          <label class="col-sm-4 control-label">Delivery Date / Time</label>
          <div class="col-sm-8">
            <p class="form-control-static">Today ({{date("D, F j, Y")}} Philippine local date &amp; time) delivery time will depend on your location and will start upon receipt of a confirmation call from the Wendy's branch.</p>
          </div>
        </div>


        <p>&nbsp;</p>

        <div class="info alert alert-info">Note: * is a required field</div>
        <div class="form-group">
          <label class="col-sm-4 control-label">* Order Type</label>
          <div class="col-sm-8">
            <p class="form-control-static">
              <label class="marginRight radio">
                <input type="radio" class="receivingType" name="receivingType" id="deliverService" value="Delivery" checked="">
                Delivery
              </label>
              <label class="radio"><input type="radio" name="receivingType" id="dineInForPickUp" value="Dine-in / For Pick-up">
                Dine-in / For Pick-up
              </label>
            </p>
          </div>
        </div>
        <div class="form-group store displayNone" style="display: none;">
          <label class="col-sm-4 control-label">* Find a Store</label>
          <div class="col-sm-8">
            <select name="store" id="storeDineinForPickup" class="form-control">
                      <option value="">-- Select --</option>
                        <option value="68">6789 Ayala Tower</option><option value="49">Boni Ave.</option><option value="66">Bonifacio Stopover</option><option value="57">Buendia</option><option value="41">Dapitan</option><option value="22">Fairview Terraces</option><option value="43">Gateway</option><option value="50">Glorietta 3</option><option value="51">Glorietta 4</option><option value="30">Grandmall</option><option value="53">Greenbelt 1</option><option value="34">Greenhills</option><option value="29">Hanston (Ortigas)</option><option value="36">Kalaw</option><option value="67">Landmark Trinoma Complex</option><option value="52">Makati Ave</option><option value="62">Market Market</option><option value="23">NAIA 3 (Departure &amp; Arrival Area)</option><option value="38">PGH - Taft</option><option value="25">Portal</option><option value="59">Puregold Anabu</option><option value="39">Robinson's Place Ermita</option><option value="26">S&amp;R Shaw Boulevard</option><option value="48">Shangri-La</option><option value="74">Shell NLEX Mexico</option><option value="45">Shopwise Cubao</option><option value="42">SM Annex</option><option value="61">SM Bacoor</option><option value="47">SM Centerpoint</option><option value="70">SM City North Edsa</option><option value="24">SM Clark</option><option value="60">SM Dasmariñas</option><option value="44">SM Fairview</option><option value="28">SM Jazz</option><option value="65">SM Light Mall</option><option value="56">SM Mall Of Asia</option><option value="37">SM Manila</option><option value="63">SM Marikina</option><option value="33">SM Marilao</option><option value="32">SM Megamall</option><option value="40">SM San Lazaro</option><option value="58">Starmall Alabang</option><option value="46">Trinoma</option><option value="72">Wendy's Citywalk Eastwood</option><option value="73">Wendy's Clark Airmall</option>                    </select>
          </div>
        </div>
        <div class="form-group">
          <label class="col-sm-4 control-label">* Preferred Date and Time</label>
          <div class="col-sm-8">
            <p class="form-control-static" style="display: block;">
              <label class="checkbox" id="immediate-delivery-label">
                <input type="checkbox" id="immediateDeliver" value="immediate" name="immediate">
              Immediate Delivery</label>
            </p>
            <div class="clearfix"></div>

            <div class="row preferredDateAndTime" id="delivery-date-time" style="display: block;">
              <div class="col-sm-4">
                <input type="text" class="form-control datepicker hasDatepicker required red" name="date" id="date" placeholder="Date" value="" autocomplete="off">
              </div>
              <div class="clearfix marginBottom"></div>
              <div class="col-xs-4">
                <select name="hour" id="hourOrder" class="form-control required red">
                              <option value="">-- Hour --</option>
                                <option value="01">01</option><option value="02">02</option><option value="03">03</option><option value="04">04</option><option value="05">05</option><option value="06">06</option><option value="07">07</option><option value="08">08</option><option value="09">09</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>                            </select>
              </div>
              <div class="col-xs-4">
                <select name="minute" id="minuteOrder" class="form-control required red">
                              <option value="">-- Minute --</option>
                                <option value="15">15</option>
                                <option value="30">30</option>
                                <option value="45">45</option>
                                                            </select>
              </div>
              <div class="col-xs-4">
                <select name="meridiem" id="meridiemOrder" class="form-control red">
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
              </div>
            </div>

          </div>
        </div>
        <div class="delivery" style="display: none;">
          <div class="form-group">
            <label class="col-sm-4 control-label">* First Name</label>
            <div class="col-sm-8">
              <input type="text" id="newOrderFirstName" class="form-control required" value="Jim" name="firstName" disabled="" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Middle Name</label>
            <div class="col-sm-8">
              <input type="text" id="newOrderMiddleName" class="form-control required" value="M" name="middleName" disabled="" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">* Last Name</label>
            <div class="col-sm-8">
              <input type="text" id="newOrderLastName" class="form-control required" value="Hopper" name="lastName" disabled="" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">* Floor / Dept. / Building</label>
            <div class="col-sm-8">
              <input type="text" id="newOrderAddress1" class="form-control required" value="1" name="address1" disabled="" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">* Street</label>
            <div class="col-sm-8">
              <input type="text" id="newOrderStreetAddress" class="form-control required" value="S St." name="address2" disabled="" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">* Area / Subdivision / Barangay / District</label>
            <div class="col-sm-8">
              <input type="text" id="newOrderAddress3" class="form-control required" value="AAV" name="address3" disabled="" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">* Country</label>
            <div class="col-sm-8">
              <select class="form-control required" id="newOrderCountry" name="country" disabled="">
                            <option value="czozOiIxNjMiOw==" selected="">Philippines</option>                        </select>
            </div>
          </div>
          <div class="form-group philippines">
            <label class="control-label col-sm-4">* Province</label>
            <div class="col-sm-8">
              <select id="newOrderProvince" class="form-control required" name="province" disabled="">
                            <option value="czoxOiIxIjs=" selected="">Metro Manila</option>                        </select>
            </div>
          </div>

          <div class="form-group philippines">
            <label class="control-label col-sm-4">* City</label>
            <div class="col-sm-8">
              <select id="city" class="form-control required" name="city" disabled="">
                            <option value="">-- Select --</option>
                            <option data-city-id="1" value="czoxOiIxIjs=">Caloocan</option><option data-city-id="2" value="czoxOiIyIjs=">Las Piñas</option><option data-city-id="3" value="czoxOiIzIjs=">Makati</option><option data-city-id="4" value="czoxOiI0Ijs=">Malabon</option><option data-city-id="5" value="czoxOiI1Ijs=">Mandaluyong</option><option data-city-id="1607" value="czo0OiIxNjA3Ijs=">Manila</option><option data-city-id="6" value="czoxOiI2Ijs=">Marikina</option><option data-city-id="7" value="czoxOiI3Ijs=" selected="">Muntinlupa</option><option data-city-id="8" value="czoxOiI4Ijs=">Navotas</option><option data-city-id="9" value="czoxOiI5Ijs=">Parañaque</option><option data-city-id="10" value="czoyOiIxMCI7">Pasay</option><option data-city-id="11" value="czoyOiIxMSI7">Pasig</option><option data-city-id="12" value="czoyOiIxMiI7">Pateros</option><option data-city-id="13" value="czoyOiIxMyI7">Quezon City</option><option data-city-id="14" value="czoyOiIxNCI7">San Juan</option><option data-city-id="15" value="czoyOiIxNSI7">Taguig</option><option data-city-id="16" value="czoyOiIxNiI7">Valenzuela</option>                        </select>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">* Contact No.</label>
            <div class="col-sm-8">
              <input type="text" id="newOrderContactNumber" class="form-control digits required" value="09123456789" name="contactNumber" disabled="" autocomplete="off">
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-4 control-label">Special Instructions / Landmarks</label>
            <div class="col-sm-8">
              <textarea class="form-control" name="specialInstructions" disabled=""></textarea>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12 text-right">
            <a href="{{route('categories',['siteNo' => $siteNo])}}"><button type="button" class="btn btn-warning">
                      Previous
                    </button></a>
            <a href="{{route('checkout',['stepNo' => 3,'siteNo' => $siteNo])}}"><button type="button" class="btn btn-warning" id="btnValidateNewInformation" <!--="" data-toggle="modal" data-target="#myModal" --="">&gt;
                      Continue
                    </button></a>
            <a href="{{route('categories',['siteNo' => $siteNo])}}"><button type="button" class="btn btn-warning" onclick="">
                      Cancel Order
                    </button></a>
          </div>
        </div>

      </form>

    </div>

  </div>
@endsection
