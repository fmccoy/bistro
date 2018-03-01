<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RecipeIngredient;

class Recipe extends Model
{

  protected $guarded = [];

  protected $casts = [
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
      'id'=> $ing['id'],
      'description' => $ing['item'],
      'modifier' => implode(array_wrap($ing['mods'])),
      'qty' => $ing['qty'],
      'uom' => $ing['uom']
    ];

    $ingredient = RecipeIngredient::firstOrNew(['id'=>$id]);
    $ingredient->recipe_id = $recipe;
    $ingredient->description = $i['description'];
    $ingredient->modifier = $i['modifier'];
    $ingredient->qty = $i['qty'];
    $ingredient->uom = $i['uom'];
    $ingredient->save();
  }
}
