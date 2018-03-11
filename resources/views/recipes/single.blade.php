<div class="col-sm-10 offset-sm-1">

  @if ($crud == "single")
    <div class="d-print-none">
      <a href="{{ route(Route::currentRouteName(), ['id'=> $data->id+1]) }}"></a>
    </div>
  @endif

<div class="recipe">

  <h1 class="display-2">{{ $data->name }}</h1>

  <dl>
    <dt>Category:</dt>
    <dd>{{ $data->category }}</dd>
    <dt>Yield:</dt>
    <dd>{{ $data->yield['qty'] }} {{ $data->yield['uom'] }}</dd>
  </dl>

  @isset($data->ingredients)
    @includeif('recipes.ingredients', $data->ingredients)
  @endisset

  @if (isset($data->procedures) && !empty($data->procedures))
    @includeif('recipes.procedures', ['procedures' => $data->procedures])
  @endif


  @isset($data->quality)
    @includeif('recipes.quality', $data->quality)
  @endisset

  <dl>
    <dt>Source File</dt>
      <dd>{{ $data->file }}</dd>
    <dt>Last Updated:</dt>
      <dd>{{ $data->updated_at }}</dd>
    <dt>Recipe Type:</dt>
      <dd>{{ $data->type }}</dd>
  </dl>
</div>
</div>
