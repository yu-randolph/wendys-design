@extends('layouts.delivery-default')
@section('content')
          <div class="col-md-9 col-md-pull-3">

            <ul class="specialContainer">
              @foreach ($categories as $category)
                <li data-link="https://wendys.com.ph/delivery/categories/beverages/" class="col-sm-4 col-xs-6">
                  <div class="title" style=
                  @if ($category->name == "HOT N' JUICY CHEESEBURGER")
                    "height: 40px"
                  @elseif ($category->name == "HEARTY SANDWICHES")
                    "height: 40px"
                  @elseif ($category->name == "MEATY CHICKEN")
                    "height: 40px"
                  @else
                    "height: 20px"
                  @endif
                  >{{$category->name}}</div>
                  <div class="thumb">
                    <img src="{{asset('images/categories/'.$category->image)}}" data-src="{{asset('images/categories/'.$category->image)}}" class="lazy">
                  </div>
                  <div class="selected" style="height: 20px;">
                    @if ($category->name == "BREAKFAST *")
                    (<small>SELECTED STORES ONLY</small>)
                    @endif
                  </div>
                </li>
              @endforeach
            </ul>

            <div class="clearfix"></div>
          </div>



  @endsection
