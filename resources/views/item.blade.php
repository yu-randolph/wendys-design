@extends('layouts.delivery-default')

  @section('categories')
    <div id="categories">
      <h2>Food Delivery</h2>
      <ul>
        @foreach ($categories as $category)
          <li>
            <a  @if($category->id == $item->category_id)
                class="active"
                @endif
                href="{{$category->name == "Breakfast*" ? '#' :route('items',['categoryId' => $category->id,'siteNo' => $siteNo])}}">
                            {{$category->name}}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  @endsection

  @section('content')
    <div class="col-md-9 col-md-pull-3">

          <h1 class="title text-center marginBottom">{{$item->category->name}}</h1>
                    <div id="product">

                      <div class="row">

                        <div class="col-sm-5">

                          <div class="paddingLeft">
                            <p class="primary"><img src="{{asset('images/items/' . $item->image)}}" data-src="{{asset('images/items/' . $item->image)}}" class="lazy" style="width: 270px; height: 267px;"></p>
                            <h1 class="title text-center" id="itemName">{{$item->name}}</h1>
                            <div class="description">
                              <p>{{$item->description}}</p>

                              <p>&nbsp;</p>
                              <p class="colorRed"><strong><small>* Product is available from 7am to 10pm only.</small></strong></p>
                            </div>

                            <div id="socialMedia">
                              <iframe src="https://www.facebook.com/plugins/like.php?href=https://wendys.com.ph/delivery/categories/signature-iced-tea/fresh-iced-tea/&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:80px; height:21px;" allowtransparency="true"></iframe>

                              <div id="___plus_0" style="text-indent: 0px; margin: 0px; padding: 0px; background: transparent; border-style: none; float: none; line-height: normal; font-size: 1px; vertical-align: baseline; display: inline-block; width: 59px; height: 20px;"><iframe ng-non-bindable="" frameborder="0" hspace="0" marginheight="0" marginwidth="0" scrolling="no" style="position: static; top: 0px; width: 59px; margin: 0px; border-style: none; left: 0px; visibility: visible; height: 20px;" tabindex="0" vspace="0" width="100%" id="I0_1509777576228" name="I0_1509777576228" src="https://apis.google.com/u/0/se/0/_/+1/sharebutton?plusShare=true&amp;usegapi=1&amp;action=share&amp;annotation=bubble&amp;origin=https%3A%2F%2Fwendys.com.ph&amp;url=https%3A%2F%2Fwendys.com.ph%2Fdelivery%2Fcategories%2Fsignature-iced-tea%2Ffresh-iced-tea%2Furlkoto&amp;gsrc=3p&amp;ic=1&amp;jsh=m%3B%2F_%2Fscs%2Fapps-static%2F_%2Fjs%2Fk%3Doz.gapi.en.8ggGBlnRYmw.O%2Fm%3D__features__%2Fam%3DAQ%2Frt%3Dj%2Fd%3D1%2Frs%3DAGLTcCORPt1ErXTGopWn2el2oYFxRcgjyw#_methods=onPlusOne%2C_ready%2C_close%2C_open%2C_resizeMe%2C_renderstart%2Concircled%2Cdrefresh%2Cerefresh%2Conload&amp;id=I0_1509777576228&amp;_gfid=I0_1509777576228&amp;parent=https%3A%2F%2Fwendys.com.ph&amp;pfname=&amp;rpctoken=23753489" data-gapiattached="true" title="G+"></iframe></div>
                              <script type="text/javascript">
                                (function() {
                                var po = document.createElement("script"); po.type = "text/javascript"; po.async = true;
                                po.src = "https://apis.google.com/js/plusone.js";
                                var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(po, s);
                                })();
                              </script>

                              <iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-share-button twitter-share-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.c7112f7adf6a24ddcb78d834866e1439.en.html#dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fwendys.com.ph%2Fdelivery%2Fcategories%2Fsignature-iced-tea%2Ffresh-iced-tea%2F&amp;size=m&amp;text=Fresh%20Iced%20Tea%20%7C%20Wendy%27s&amp;time=1509777576307&amp;type=share&amp;url=https%3A%2F%2Fwendys.com.ph%2Fdelivery%2Fcategories%2Fsignature-iced-tea%2Ffresh-iced-tea%2F" style="position: static; visibility: visible; width: 61px; height: 20px;"></iframe>
                              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                            </div>
                            <p>&nbsp;</p>
                          </div>

                        </div>

                        <div class="col-sm-7">

                                  <div class="error displayNone alert alert-danger"></div>
                          <form id="addToCart" data-source="addToCart" class="formPreloader quickAddToCart" onsubmit="return addToCart();">

                            <input type="hidden" value="czoyOiIzNyI7" name="product">
                            <input type="hidden" name="basePrice" value="0">
                            <input type="hidden" name="addtitionalCharge" value="0">
                            <input type="hidden" id="itemImage" value="{{$item->image}}">
                            <input type="hidden" id="itemId" value="{{$item->id}}">
                            <div class="alert alert-danger" id="add-error" style="white-space: pre-line; display:none"></div>
                            <div class="row">

                              <div class="col-sm-6">

                                <div class="input-group input-group-lg quantity">
                                  <span class="input-group-addon">Quantity</span>
                                  <input type="text" class="form-control text-center digits" value="1" name="quantity" id="quantity" autocomplete="off">
                                </div>

                              </div>

                              <div class="col-sm-6">

                                <button type="button" class="addToCart btn btn-warning btn-lg btn-add">
                                  <span class="glyphicon glyphicon-shopping-cart"></span> Add To Cart
                                </button>

                              </div>

                            </div>
                            <p>&nbsp;</p>

                          </form>
                          @if($item->meals->count() == 1)
                          <div class="quickTotal">Total: PHP <span id="priceNumber">{{$item->meals->first()->price}}.00</span></div>
                          @else
                          <div class="quickTotal">Total: PHP <span id="priceNumber">0.00</span></div>
                          @endif
                          <p>&nbsp;</p>

                          <form name="additionalFieldsForm">
                            @if($siteNo == 1 || $siteNo == 4 || $siteNo == 6 || $siteNo == 8)
                              @if($item->meals->count() > 1)
                              <div class="form-group">
                                <label for="exampleFormControlSelect1">
                                  @if($item->category->id == 1 || ($item->category->id <= 8 && $item->category->id >= 10)|| $item->category->id == 12)
                                    Size
                                  @else
                                    Meal
                                  @endif
                                </label>
                                <select class="form-control" id="choose-meal">
                                    <option value="0">--Select a Meal--</option>
                                  @foreach ($item->meals as $meal)
                                    <option data-price="{{$meal->price}}" data-id="{{$meal->id}}" data-label="{{$meal->label}}">{{$meal->label . " PHP " . $meal->price}}</option>
                                  @endforeach
                                </select>
                              </div>
                              @if($item->category->id>1 && $item->category->id<8 && !($item->category_id == 2 && $siteNo == 0))
                                <div class="form-group" id="choose-size"><label>Choose a Combo Size</label>
                                  <select class="form-control" id="size-dropdown">
                                    <option value="0">--Select a Size--</option>
                                    <option value="regular">Regular</option>
                                    <option value="large">Large</option>
                                    <option value="biggie">Biggie</option>
                                  </select>
                                </div>
                              @endif
                              @if(($item->category->id == 12 && $item->id == 40) || ($item->category->id > 1 && $item->category->id < 8))
                              <div class="form-group" id="choose-drink"><label>Choose a Drink</label>
                                <select class="form-control" id="drink-dropdown">
                                  <option value="0">--Select a Drink--</option>
                                  <option value="coke">Coke</option>
                                  <option value="coke-zero">Coke Zero</option>
                                  <option value="minute-maid">Minute Maid</option><option value="regular">Regular</option>
                                  <option value="royal">Royal</option>
                                  <option value="sprite">Sprite</option>
                                </select>
                              </div>
                              @endif
                            @endif

                            @else
                              <fieldset class="additionalField " data-attribute="Option">
                                <legend>
                                  @if($item->category->id == 1 || ($item->category->id <= 8 && $item->category->id >= 10)|| $item->category->id == 12)
                                    Size
                                  @else
                                    Meal
                                  @endif
                                </legend>
                                @foreach ($item->meals as $meal)
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option1" value="{{$meal->price}}" data-price="{{$meal->price}}" data-id="{{$meal->id}}" data-label="{{$meal->label}}">
                                      {{$meal->label . " PHP " . $meal->price}}
                                    </label>
                                  </div>
                                @endforeach

                                <input type="hidden" name="totalAdditionalFields" value="{{$item->meals->count()}}">
                              </fieldset>
                              @if($item->category->id>1 && $item->category->id<8 && !($item->category_id == 2 && $siteNo == 0) && $siteNo != 0)
                              <fieldset class="additionalField " id="choose-size" data-attribute="Option" style="margin-top:10px;">
                                <legend>
                                  Combo Size
                                </legend>
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option2" value="regular">
                                      Regular
                                    </label>
                                  </div>
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option2" value="large">
                                      Large
                                    </label>
                                  </div>
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option2" value="biggie">
                                      Biggie
                                    </label>
                                  </div>
                              </fieldset>
                            @endif
                            @if( ($item->category->id == 12 && $item->id == 40) || ($item->category->id > 1 && $item->category->id < 8) && $siteNo != 0)
                              <fieldset class="additionalField " id="choose-drink" data-attribute="Option" style="margin-top:10px;">
                                <legend>
                                  Drink
                                </legend>
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option3" value="coke">
                                      Coke
                                    </label>
                                  </div>
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option3" value="coke-zero">
                                      Coke Zero
                                    </label>
                                  </div>
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option3" value="minute-maid">
                                      Minute Maid
                                    </label>
                                  </div>
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option3" value="royal">
                                      Royal
                                    </label>
                                  </div>
                                  <div>
                                    <label class="radio">
                                      <input type="radio" name="option3" value="Sprite">
                                      Sprite
                                    </label>
                                  </div>
                              </fieldset>
                              @endif
                            @endif
                          </form>

                        </div>

                      </div>

                    </div>

              </div>
  @endsection
