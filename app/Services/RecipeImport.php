<?php
namespace App\Services;

use App\Recipe as Eloquent;
use App\Bistro\Entities\Recipe;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Yaml\Yaml;

class RecipeImport
{
  public function import($input = [])
  {
    $import = new Recipe($input);
    $data = [
      'name' => $import->name,
      'slug' => $import->slug,
      'type' => $import->type,
      'category' => $import->category,
      'yield' => $import->yield,
      'file' => $import->file,
    ];

    $model = Eloquent::firstOrCreate($data);
    foreach($import->ingredients as $ing) {
      $model->updateIngredient(0, $ing->toArray(), $model->id);
    }
    $model->save();
  }

  public function importMany($collection = [])
  {
    foreach($collection as $item) {
      $this->import($item);
    }
  }

  public function importFromFile($input = [])
  {
    $data = [
      'name' => $input['name'],
      'slug' => str_slug($input['name']),
      'category' => array_wrap(data_get($input, 'category', 'Undefined')),
      'yield' => data_get($input, 'yield'),

    ];

    $recipe = Recipe::firstOrCreate(['']);
    $recipe->name = $request->name;
    $recipe->category = implode(array_wrap($request->category));
    $recipe->yield = implode($request->yield);
    $recipe->type = $request->type;
    $recipe->file = $request->file;

    foreach($request->ingredients as $ing) {
      $recipe->updateIngredient($ing['id'], $ing, $recipe->id);
    }
    $recipe->save();
  }

  public function getFilesFromDirectory()
  {
    $finder = new Finder();
    $query = $finder->files()->in(base_path('node_modules/martin-recipes/recipes'));

    $list = [];
    foreach($query as $file) {
      $yaml = Yaml::parse(file_get_contents($file));
      if(!is_null($yaml)) {
        $list[] = $yaml;
      }

    }
    $this->importMany( $list);
  }
}
