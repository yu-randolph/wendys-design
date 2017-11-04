<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function item()
    {
      return $this->belongsTo('App\Category');
    }
}
