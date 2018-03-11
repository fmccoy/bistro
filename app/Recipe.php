<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RecipeIngredient;

class Recipe extends Model
{

  protected $guarded = [];

  protected $casts = [
    'yield' => 'array',
    'ingredients' => 'array',
    'meta' => 'array',
    'procedures' => 'array',
    'quality' => 'array',
  ];

  public function ingredients()
  {
    return $this->hasMany('App\RecipeIngredient');
  }

  public function updateIngredient($id, $ing, $recipe)
  {
    $i = [
      'id'=> data_get($ing, 'id', null),
      'description' => $ing['description'],
      'modifiers' => implode(array_wrap($ing['modifiers'])),
      'qty' => $ing['qty'],
      'uom' => $ing['uom']
    ];

    $ingredient = RecipeIngredient::firstOrNew(['id'=>$id]);
    $ingredient->recipe_id = $recipe;
    $ingredient->description = $i['description'];
    $ingredient->modifiers = $i['modifiers'];
    $ingredient->qty = $i['qty'];
    $ingredient->uom = $i['uom'];
    $ingredient->save();
  }
}
