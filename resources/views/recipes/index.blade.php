
@foreach($data as $recipe)
  <div class="col-sm-4">


    <div class="card text-center" style="margin:10px;">
      <div class="card-header">
        <h5 class="card-title">{{ $recipe->name }}</h5>
      </div>
      <div class="card-body">

        <h6 class="card-subtitle mb-2 text-muted">{{ $recipe->meta['category'] }}</h6>
        <a class="btn btn-primary" href="{{ route('recipes.show', ['id' => $recipe['id']]) }}"><span class="oi oi-eye"></span></a>
        <a class="btn btn-primary" href="{{ route('recipes.edit', ['id' => $recipe['id']]) }}"><span class="oi oi-pencil"></span></a>
      </div>
    </div>
    </div>
@endforeach
