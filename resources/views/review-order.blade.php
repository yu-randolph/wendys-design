@extends('layouts.checkout-default')
@section('content')
  <input type="hidden" name="base-path" id="base-path" value="{{asset('/')}}">
  <div class="row">

    <div class="col-md-12">

      <div class="success displayNone alert alert-success"></div>
      <div class="error displayNone alert alert-danger"></div>
      <form id="placeOrder" role="form" class="formPreloader form-horizontal" data-source="coupons">

        <div class="row">

          <div class="col-sm-6">

            <div class="thumbnail" style="height:505.6px;">

              <h4 class="text-danger">Billing Details<hr></h4>
              <div class="form-group">
                <label class="col-sm-4 control-label">Name</label>
                <div class="col-sm-8">
                  <p class="form-control-static">Jim Hopper</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Floor / Dept. / Building</label>
                <div class="col-sm-8">
                  <p class="form-control-static">1</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Street</label>
                <div class="col-sm-8">
                  <p class="form-control-static">S St.</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Area / Subdivision / Barangay / District</label>
                <div class="col-sm-8">
                  <p class="form-control-static">AAV</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Country</label>
                <div class="col-sm-8">
                  <p class="form-control-static">Philippines</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Province</label>
                <div class="col-sm-8">
                  <p class="form-control-static">Metro Manila</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">City</label>
                <div class="col-sm-8">
                  <p class="form-control-static">Muntinlupa</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Contact No.</label>
                <div class="col-sm-8">
                  <p class="form-control-static">09123456789</p>
                </div>
              </div>

              <div class="form-group">
                <label class="col-sm-4 control-label"></label>
                <div class="col-sm-8">
                  <p class="form-control-static">&nbsp;</p>
                </div>
              </div>

            </div>

          </div>

          <div class="col-sm-6">

            <div class="thumbnail">

              <h4 class="text-danger">Store Details<hr></h4>
              <div class="form-group">
                <label class="col-sm-4 control-label">Branch Name</label>
                <div class="col-sm-8">
                  <p class="form-control-static">6789 Ayala Tower</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Contact Number</label>
                <div class="col-sm-8">
                  <p class="form-control-static"> </p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Location</label>
                <div class="col-sm-8">
                  <p class="form-control-static">Makati, Metro Manila</p>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-4 control-label">Preferred Date and Time</label>
                <div class="col-sm-8">
                  <p class="form-control-static">Saturday, November 4, 2017 04:30:00 AM</p>
                </div>
              </div>

            </div>

          </div>

        </div>

        <div id="shoppingCart" class="table-responsive">
          <table class="table table-hover table-striped table-bordered">
            <thead>
              <tr>
                <th>Item</th>
                <th>Price (PHP)</th>
                <th>Qty</th>
                <th>Total Price (PHP)</th>
              </tr>
            </thead>
            <tbody class="checkout-cart">


            </tbody>
          </table>
        </div>

        <div class="col-sm-6 col-sm-offset-6">

          <div class="form-group">
            <label class="col-sm-4 control-label">Subtotal</label>
            <div class="col-sm-8">
              <p class="form-control-static text-right">Php <span id="subTotal">285.00</span></p>
              <input type="hidden" name="subTotal" id="subTotal" value="285.00">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Discount</label>
            <div class="col-sm-8">
              <p class="form-control-static text-right">- Php <span id="discount">0.00</span></p>
              <input type="hidden" name="discount" value="0.00">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Delivery Charge</label>
            <div class="col-sm-8">
              <p class="form-control-static text-right">+ Php <span id="deliveryCharge">28.50</span></p>
              <input type="hidden" name="deliveryCharge" value="28.50">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-4 control-label">Grand Total</label>
            <div class="col-sm-8">
              <p class="form-control-static text-right"><big>Php <span id="grandTotal">313.50</span></big></p>
              <input type="hidden" name="grandTotal" id="grandTotal" value="313.50">
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-12 text-right">
              <label class="checkbox"><div class=""></div><div class=""></div><input type="checkbox" name="termsAndConditions" id="termsAndConditions" value="1"> I agree to the <strong><a href="#termsAndConditions" rel="prettyPhoto" title="Terms and Conditions">Terms and Conditions</a></strong> of this website.</label>
              <div id="termsAndConditions" class="displayNone">
                <div class="termsAndConditions">
                  <p><big><strong><span style="color:#FF0000;">Terms of Wendy's Online Services</span></strong></big></p>

                  <p>Wendy’s reserves the right, in its sole discretion, without limitations, conditions and/or qualifications, and without need of prior notification, to limit, change, modify or cancel any order, and/or to refuse any service to any
                    customer for any reason attributable to the unavailability of the items ordered, or other circumstances and conditions beyond the control of Wendy’s which would render impossible or delay the fulfillment of its obligations; Provided
                    that such events shall not be caused by any negligence on the part of Wendy’s. Notwithstanding the receipt of any order confirmation, whether via electronic mail, facsimile, phone call or otherwise, it is understood by you that
                    the delivery of your order by Wendy’s and receipt of the payment corresponding to the same, shall constitute the sole act of final acceptance by Wendy’s of such order. Verification of any information may be required prior to
                    the acceptance or delivery of any order.&nbsp;<br>
                    <br> You are asked at the end of the ordering process to choose between cash and credit card payment upon delivery. You agree to pay all fees and charges incurred in connection with your order, including any and all applicable
                    taxes, at the rate in effect when the charges were incurred.&nbsp;<br>
                    <br> If you wish to cancel your order prior to delivery, you may call (63) 533 3333 or email delivery@wendys.com.ph. Wendy’s, however, reserves the right to refuse cancellation in case order has already been dispatched for delivery
                    prior to receipt of your request. If you are not satisfied with your order, you may direct your concerns to the said contact details given above.&nbsp;<br>
                    <br>
                    <span style="color:#FF0000;"><big><strong>RESTRICTION OF LIABILITY&nbsp;</strong></big></span><br>
                    <br> Wendy’s will not be liable for damages of any kind or nature or injury whatsoever caused by, including but not limited to, any failure of performance, error, omission, interruption, defect, delay in operation of transmission,
                    computer virus, or line failure. Wendy’s will not be liable for any damages or injury, including but not limited to, special or consequential damages that result from the use of, or the inability to use, the materials in this
                    site, even if there is negligence or Wendy’s or an authorized Wendy’s representative has been advised of the possibility of such damages, or both. Wendy’s total liability to you for all losses, damages, and causes of action (in
                    contract, tort (including without limitation, negligence), or otherwise) will not be greater than the amount you paid to access this site, should any such liability be established.&nbsp;<br>
                    <br>
                    <span style="color:#FF0000;"><strong><big>SUBMISSIONS&nbsp;</big></strong></span><br>
                    <br> All remarks, suggestions, ideas, graphics, or other information communicated to Wendy’s through this site (together, the "Submission") will forever be the property of Wendy’s. Wendy’s will not be required to treat any Submission
                    as confidential, and will not be liable for any ideas for its business (including without limitation, product, or advertising ideas) and will not incur any liability as a result of any similarities that may appear in future Wendy’s
                    operations. Without limitation, Wendy’s will have exclusive ownership of all present and future existing rights to the Submission of every kind and nature everywhere. Except as noted below in this paragraph, Wendy’s will be entitled
                    to use the Submission for any commercial or other purpose whatsoever without compensation to you or any other person sending the Submission. Personally identifiable information that may be received at this site is provided voluntarily
                    by a visitor to this site. This information is for internal purposes only and is not sold or otherwise transferred to third parties of Wendy’s or to other entities who are not involved in the operation of this site. Information
                    submitted via a number of areas in this site, for instance, Customer Feedback, is not retained. Therefore, the above right to use Submissions is subject to this limited use of this information and excludes non-retained information.
                    You acknowledge that you are responsible for whatever material you submit, and you, not Wendy’s have full responsibility for the message, including its legality, reliability, appropriateness, originality, and copyright.&nbsp;<br>
                    <br>
                    <strong><span style="color:#FF0000;"><big>JURISDICTION&nbsp;</big></span></strong><br>
                    <br> Except as described otherwise, all materials in the Wendy’s site are made available only to provide information about Wendy’s. Wendy’s controls and operates this site from its head office in Makati Metro Manila, Philippines
                    and makes no representation that these materials are appropriate or available for use in other locations. If you use this site from other locations you are responsible for compliance with applicable local laws. &nbsp;<br>
                    <br>
                    <span style="color:#FF0000;"><big><strong>DISCLAIMER&nbsp;</strong></big></span><br>
                    <br> The material in this site could include technical inaccuracies or typographical errors. Wendy’s may make changes or improvements at any time. THE MATERIALS IN THIS SITE ARE PROVIDED "AS IS" AND WITHOUT WARRANTIES OF ANY
                    KIND EITHER EXPRESSED OR IMPLIED, TO THE FULLEST EXTENT PERMISSIBLE PURSUANT TO APPLICABLE LAW. Wendy’s DISCLAIMS ALL WARRANTIES OR MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE. Wendy’s DOES NOT WARRANT THAT THE FUNCTIONS
                    CONTAINED IN THE MATERIAL WILL BE UNINTERRUPTED OR ERROR-FREE, THAT DEFECTS WILL BE CORRECTED, OR THAT THIS SITE OR THE SERVER THAT MAKES IT AVAILABLE ARE FREE OF VIRUSES OR OTHER HARMFUL COMPONENTS. Wendy’s DOES NOT WARRANT
                    OR MAKE ANY REPRESENTATIONS REGARDING THE USE OF OR THE RESULT OF THE USE OF THE MATERIAL IN THIS SITE IN TERMS OF THEIR CORRECTNESS, ACCURACY, RELIABILITY, OR OTHERWISE. YOU (AND NOT Wendy’s) ASSUME THE ENTIRE COST OF ALL NECESSARY
                    SERVICING, REPAIR OR CORRECTION. THE ABOVE EXCLUSION MAY NOT APPLY TO YOU, TO THE EXTENT THAT APPLICABLE LAW MAY NOT ALLOW THE EXCLUSION OF IMPLIED WARRANTIES.&nbsp;<br>
                    <br> Wendy’s is an equal opportunity employer committed to a diverse workforce. Wendy’s franchisees each hire their own employees and establish their own terms and conditions of employment, which may differ from those described.&nbsp;<br>
                    <br>
                    <span style="color:#FF0000;"><big><strong>TERMINATION&nbsp;</strong></big></span><br>
                    <br> Wendy’s or you may terminate this agreement at any time. You may terminate this agreement by destroying: (a) all materials obtained from all Wendy’s sites, and (b) all related documentation and all copies and installations(together,
                    the "Materials"). Wendy’s may terminate this agreement immediately without notice if, in its sole judgment, you breach any term or condition of this agreement. Upon termination, you must destroy all materials.&nbsp;<br>
                    <br>
                    <span style="color:#FF0000;"><big><strong>MISCELLANEOUS&nbsp;</strong></big></span><br>
                    <br> This is the entire agreement between the parties relating to the use of this site. Wendy’s can revise these Terms and Conditions at any time by updating this posting. Wendy’s products and services are available in many parts
                    of the world. However, the Wendy’s site may describe products and services that are not available worldwide. This site may be linked to other sites that are not maintained by Wendy’s. Wendy’s is not responsible for the content
                    of those sites. The inclusion of any link to such sites does not imply endorsement by Wendy’s of the sites.&nbsp;<br>
                    <br>
                    <span style="color:#FF0000;"><big><strong>TRADEMARK INFORMATION&nbsp;</strong></big></span><br>
                    <br> All intellectual property, including but not limited to trademarks, service marks, trade names (collectively the “Marks”) are in this site are proprietary to Wendy’s, its licensors or to other respective owners. They may
                    not be used, in any form or manner, or for any purpose without the prior written consent of Wendy’s&nbsp;<br>
                    <br>
                    <span style="color:#FF0000;"><big><strong>IMPORTANT REMINDER:&nbsp;</strong></big></span><br>
                    <br> Without prejudice to criminal prosecution under Republic Act No. 8484, Wendy’s Online has the sole right to cancel and/or reject a confirmed online order if Wendy’s Online finds any valid reason to believe that a paid online
                    order has been purchased using fraudulent credit card.</p>
                  / </div>
              </div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>

        <div class="additional displayNone"></div>

        <div class="form-group">
          <div class="col-sm-12 text-right">
            <button type="button" class="btn btn-warning">
                Previous
              </button>
            <a href="{{route('checkout',['stepNo' => 3,'siteNo' => $siteNo])}}"><button type="submit" name="step-4" class="displayNone"></button></a>
            <a href="{{route('checkout',['stepNo' => 5,'siteNo' => $siteNo])}}"><button type="button" class="btn btn-warning" name="placeOrder" id="btn-order" disabled="">
                Submit Order
              </button></a>
            <button type="button" class="btn btn-warning" onclick="">
                Cancel Order
              </button>
          </div>
        </div>

      </form>


    </div>

  </div>
@endsection
