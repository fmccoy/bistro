<h2>Ingredients</h2>

<div id="ingredients" class="container">
  @foreach ($data->ingredients as $ing )
      <div class="row ing">
        <div class="col-1 ing-qty">
          {{ $ing['qty'] }}
        </div>
        <div class="col-1 ing-uom">
          {{ $ing['uom'] }}
        </div>
        <div class="col-3">
          {{ title_case($ing['description']) }}
        </div>
        @if ($ing['modifier'])
          <div class="col-3">
            <em>{{ implode(array_wrap($ing['modifier'])) }}</em>
          </div>
        @endif
      </div>
  @endforeach
</div>
