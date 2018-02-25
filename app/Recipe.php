<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
  protected $casts = [
    'ingredients' => 'array',
    'meta' => 'array',
    'procedures' => 'array',
    'quality' => 'array',
  ];
}
