@foreach ($ingredients as $ing)
  <div class="form-group row">
    <div class="col-sm-1 offset-1">
      {!! Form::hidden('ingredients['.$loop->iteration.'][id]', $ing['id']) !!}
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
      {!! Form::text('ingredients['.$loop->iteration.'][modifiers]', $ing['modifiers'], ['placeholder' => 'Modifier', 'class'=>'form-control']) !!}

    </div>

    <div class="col-sm-2">
      <a href="#" class="btn btn-danger">X</a>
      @if ($loop->last)
        <a href="#" class="btn btn-success">ADD</a>
      @endif

    </div>

  </div>

@endforeach
