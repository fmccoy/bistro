<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeIngredient extends Model
{
  protected $guarded = [];
  
  public function recipe()
  {
    return $this->belongsTo('App\Recipe');
  }
}
