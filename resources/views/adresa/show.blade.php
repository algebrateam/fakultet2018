@extends('adminlte::page')

@section('title', 'Adresa detalji')
@section('content_header')
    <h1>Detalji adrese {{ $adresa->id }}</h1>
@stop

@section('content')
 @if (Session::has('greska'))
	<div class="alert alert-error">{{ Session::get('greska') }}</div>
@endif  

  <?php
  
  //dd($adresa->all());
  ?>
    {{ $adresa->country }}
   
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
