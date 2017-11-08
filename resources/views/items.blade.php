@extends('layouts.delivery-default')

  @section('categories')
    <div id="categories">
      <h2>Food Delivery</h2>
      <ul>
        @foreach ($categories as $category)
          <li>
            <a href="{{$category->name == "BREAKFAST *" ? '#' :route('items',['categoryId' => $category->id])}}">
                            {{$category->name}}
            </a>
          </li>
        @endforeach
      </ul>
    </div>
  @endsection
  @section('content')
    <div class="col-md-9 col-md-pull-3">
      <h1 class="title text-center">{{$currentCategory->name}}</h1>
      <ul class="specialContainer">
        @foreach ($items as $item)
          <a href="{{route('item',['categoryId'=>$item->category->id , 'itemId' => $item->id])}}">
          <li data-link="" class="col-sm-4 col-xs-6">
            <div class="thumb">
              <img src="{{asset('images/items/' . $item->image)}}" data-src="{{asset('images/items/' . $item->image)}}" class="lazy">
            </div>
            <div class="title productName" style="height: 20px;">{{$item->name}}</div>
          </li>
          </a>
        @endforeach
      </ul>
    </div>
  @endsection
