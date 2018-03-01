@foreach ($ingredients as $ing)
  <div class="form-group row">
    <div class="col-sm-2">
      {!! Form::hidden('ingredients['.$loop->iteration.'][id]', $ing['id']) !!}
    </div>
    <div class="col-sm-2">
      {!! Form::text('ingredients['.$loop->iteration.'][qty]', $ing['qty'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-2">
      {!! Form::text('ingredients['.$loop->iteration.'][uom]', $ing['uom'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-4">
      {!! Form::text('ingredients['.$loop->iteration.'][item]', $ing['description'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-2">
      {!! Form::text('ingredients['.$loop->iteration.'][mods]', $ing['modifier'], ['placeholder' => 'Modifier', 'class'=>'form-control']) !!}

    </div>

  </div>

@endforeach
