@foreach ($ingredients as $ing)
  <div class="form-group row">
    <div class="col-sm-2">
      {!! Form::hidden('ingredients['.$loop->iteration.'][id]', '') !!}
    </div>
    <div class="col-sm-2">
      {!! Form::text('ingredients['.$loop->iteration.'][qty]', $ing['qty'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-2">
      {!! Form::text('ingredients['.$loop->iteration.'][uom]', $ing['uom'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-4">
      {!! Form::text('ingredients['.$loop->iteration.'][item]', $ing['item'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-2">
      @if (array_key_exists('modifier', $ing)  )
        {!! Form::text('ingredients['.$loop->iteration.'][mods]', $ing['mods'], ['placeholder' => 'Modifier', 'class'=>'form-control']) !!}
      @else
        {!! Form::text('ingredients['.$loop->iteration.'][mods]', implode(array_wrap($ing['mods'])), ['placeholder' => 'Modifier', 'class'=>'form-control']) !!}
      @endif
    </div>

  </div>

@endforeach
