<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

use App\Category;
use App\Item;
use App\Meal;
class DeliveryController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function displayCategories()
    {
      $categories = Category::all();
      return view('categories',compact('categories'));
    }
    public function displayItems(Request $request,$categoryId)
    {
      $categories = Category::all();
      $currentCategory = Category::find($categoryId);
      $items = Item::where('category_id',$categoryId)->get();
      return view('items',compact('categories','currentCategory','items'));
    }
    public function displayItem(Request $request,$categoryId,$itemId)
    {
      $categories = Category::all();
      $item = Item::find($itemId);
      return view('item',compact('categories','item'));
    }
    public function displayCheckout(Request $request, $stepNo)
    {
      if($stepNo == 2){
        return view('delivery-info',compact('stepNo'));
      }else if($stepNo == 3){
        return view('payment',compact('stepNo'));
      }else{
        return view('review-order',compact('stepNo'));
      }
    }
}
