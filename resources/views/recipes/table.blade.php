<div class="col-sm-10 offset-sm-1">
  <div class="card">

    <div class="card-header bg-secondary text-light">
      <h2>Recipes</h2>
    </div>

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th colspan="2">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($data as $recipe)
          <tr>
            <td>{{ $recipe['id'] }}</td>
            <td>{{ $recipe['name'] }}</td>
            <td>
              <a class="btn btn-primary" href="{{ route('recipes.show', ['id' => $recipe['id']]) }}"><span class="oi oi-eye"></span></a>
            </td>
            <td>
              <a class="btn btn-primary" href="{{ route('recipes.edit', ['id' => $recipe['id']]) }}"><span class="oi oi-pencil"></span></a>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>
</div>
