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

    public function displayCategories($siteNo)
    {
      $this->sortItems($siteNo);
      $categories = Category::all();
      return view('categories',compact('categories','siteNo'));
    }
    public function displayItems(Request $request, $siteNo, $categoryId)
    {
      $this->sortItems($siteNo);
      $categories = Category::all();
      $currentCategory = Category::find($categoryId);
      $items = Item::where('category_id',$categoryId)->get();
      return view('items',compact('categories','currentCategory','items','siteNo'));
    }
    public function displayItem(Request $request, $siteNo,$categoryId,$itemId)
    {
      $this->sortItems($siteNo);
      $categories = Category::all();
      $item = Item::find($itemId);
      return view('item',compact('categories','item','siteNo'));
    }
    public function displayCheckout(Request $request, $siteNo, $stepNo)
    {
      $this->sortItems($siteNo);
      if($stepNo == 2){
        return view('delivery-info',compact('stepNo','siteNo'));
      }else if($stepNo == 3){
        return view('payment',compact('stepNo','siteNo'));
      }else if($stepNo == 4){
        return view('review-order',compact('stepNo','siteNo'));
      }else{
        return view('rate-us',compact('stepNo','siteNo'));
      }
    }
    public function sortItems($siteNo)
    {
      if($siteNo == 0){
        $category = Category::find(4);
        $category->name = "Hot N' Juicy Cheeseburger";
        $category->save();
      }else if(($siteNo >=6 && $siteNo <=8) || $siteNo == 3){
        $category = Category::find(4);
        $category->name = "Meaty Burgers";
        $category->save();
      }else{
        $category = Category::find(4);
        $category->name = "Beef Burgers";
        $category->save();
      }
      //Default
      if($siteNo == 0){
        $item = Item::find(6); //baconator mushroom melt
        $item->category_id = 3;
        $item->save();

        $item = Item::find(22); //5 for 125
        $item->category_id = 6;
        $item->save();

        $item = Item::find(16); //spicy chicken fillet
        $item->category_id = 5;
        $item->save();

        $item = Item::find(17); //homestyle chicken fillet
        $item->category_id = 5;
        $item->save();

        $item = Item::find(27); //Sesame Garlic
        $item->category_id = 7;
        $item->save();

        $item = Item::find(28); // BBQ Burger
        $item->category_id = 7;
        $item->save();

      }else if( ($siteNo >=1 && $siteNo <=3) || $siteNo == 6){ //Food Classification
        $item = Item::find(6); //baconator mushroom melt
        $item->category_id = 5;
        $item->save();

        $item = Item::find(28); // BBQ Burger
        $item->category_id = 3;
        $item->save();

        $item = Item::find(22); //5 for 125
        $item->category_id = 7;
        $item->save();

        $item = Item::find(16); //spicy chicken fillet
        $item->category_id = 7;
        $item->save();

        $item = Item::find(17); //homestyle chicken fillet
        $item->category_id = 7;
        $item->save();

        $item = Item::find(27); //Sesame Garlic
        $item->category_id = 7;
        $item->save();
      }else{ //Keyword bias
        $item = Item::find(22); //5 for 125
        $item->category_id = 2;
        $item->save();

        $item = Item::find(28); // BBQ Burger
        $item->category_id = 4;
        $item->save();

        $item = Item::find(10); //Bacon mushroom melt
        $item->category_id = 3;
        $item->save();

        $item = Item::find(27); //Sesame Garlic
        $item->category_id = 6;
        $item->save();

        $item = Item::find(16); //spicy chicken fillet
        $item->category_id = 6;
        $item->save();

        $item = Item::find(17); //homestyle chicken fillet
        $item->category_id = 6;
        $item->save();
      }
    }
}
