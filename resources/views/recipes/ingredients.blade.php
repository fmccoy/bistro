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
          {{ title_case($ing['item']) }}
        </div>
        @if ($ing['mods'])
          <div class="col-3">
            <em>{{ implode($ing['mods']) }}</em>
          </div>
        @endif
      </div>
  @endforeach
</div>
