@extends('layouts.master')

@section('body')

  @includeif('parts.navbar')

  <div class="container-fluid">
    <div class="row">
        @yield('content')
    </div>
  </div>
  
@endsection
