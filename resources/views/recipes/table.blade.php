<table class="table table-responsive">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($data as $recipe)
      <tr>
        <td>{{ $recipe['id'] }}</td>
        <td>{{ $recipe['name'] }}</td>
        <td>
          <a class="btn btn-primary" href="{{ route('recipes.show', ['id' => $recipe['id']]) }}"><span class="oi oi-eye"></span></a>
          <a class="btn btn-primary" href="{{ route('recipes.edit', ['id' => $recipe['id']]) }}"><span class="oi oi-pencil"></span></a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
