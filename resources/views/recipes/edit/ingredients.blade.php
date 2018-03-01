@foreach ($ingredients as $ing)
  <div class="form-group row">
    <div class="col-sm-1">
      {!! Form::hidden('ingredients['.$loop->iteration.'][id]', '') !!}
    </div>
    <div class="col-sm-1">
      {!! Form::text('ingredients['.$loop->iteration.'][qty]', $ing['qty'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-1">
      {!! Form::text('ingredients['.$loop->iteration.'][uom]', $ing['uom'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-4">
      {!! Form::text('ingredients['.$loop->iteration.'][description]', $ing['description'], ['class'=>'form-control']) !!}
    </div>

    <div class="col-sm-2">
      @if (array_key_exists('modifier', $ing)  )
        {!! Form::text('ingredients['.$loop->iteration.'][modifiers]', $ing['modifiers'], ['placeholder' => 'Modifier', 'class'=>'form-control']) !!}
      @else
        {!! Form::text('ingredients['.$loop->iteration.'][modifiers]', implode(array_wrap($ing['modifiers'])), ['placeholder' => 'Modifier', 'class'=>'form-control']) !!}
      @endif
    </div>

    <div class="col-sm-2">
      <a href="#" class="btn btn-primary">Button</a>
    </div>
  </div>

@endforeach
