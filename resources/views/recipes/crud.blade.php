@extends('layouts.crud')


@section('content')


    @includeif('recipes.'.$crud, $data)

@endsection
