<div class="col-sm-10 offset-sm-1">

  {!! Form::model($data, ['route' => ['recipes.update', $data->id], 'method' => 'put']) !!}

  <fieldset>

    <legend>Meta</legend>

    {{-- Name --}}
    <div class="form-group row">
      {!! Form::label('name', 'Name', ['class'=>'col-sm-2 col-form-label']) !!}
      <div class="col-sm-10">
        {!! Form::text('name', $data->name,['class'=>'form-control']) !!}
      </div>
    </div>

    {{-- Category --}}
    <div class="form-group row">
      {!! Form::label('category', 'Category', ['class'=>'col-sm-2 col-form-label']) !!}
      <div class="col-sm-10">
        {!! Form::text('category', $data->meta['category'],['class'=>'form-control']) !!}
      </div>
    </div>

    {{-- Yield --}}
    <div class="form-group row">
      {!! Form::label('yield', 'Yield', ['class'=>'col-sm-2 col-form-label']) !!}
      <div class="col-sm-5">
        {!! Form::text('yield[qty]', $data->meta['yield']['qty'],['class'=>'form-control']) !!}
      </div>
      <div class="col-sm-5">
        {!! Form::text('yield[uom]', $data->meta['yield']['uom'],['class'=>'form-control']) !!}
      </div>
    </div>

    {{-- Type --}}
    <div class="form-group row">
      {!! Form::label('type', 'Type', ['class'=>'col-sm-2 col-form-label']) !!}
      <div class="col-sm-10">
        {!! Form::text('type', $data->type, ['class'=>'form-control']) !!}
      </div>
    </div>

    {{-- File --}}
    <div class="form-group row">
      {!! Form::label('file', 'File', ['class'=>'col-sm-2 col-form-label']) !!}
      <div class="col-sm-10">
        {!! Form::text('file', $data->file, ['class'=>'form-control']) !!}
      </div>
    </div>

  </fieldset>

  <fieldset>

    <legend>Ingredients</legend>
    
    @if ($data->ingredients()->get()->isEmpty())
      @include('recipes.edit.ingredients', ['ingredients' => $data->ingredients])
    @else

      @include('recipes.edit.update-ingredients', ['ingredients' => $data->ingredients()->get()])
    @endif
  </fieldset>

  {!! Form::submit('Submit') !!}


  {!! Form::close() !!}
</div>
