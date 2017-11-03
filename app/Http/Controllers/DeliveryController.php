<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

use App\Category;

class DeliveryController extends BaseController
{
  use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function displayCategories(){
      $categories = Category::all();
      return view('categories',compact('categories'));
    }
}
