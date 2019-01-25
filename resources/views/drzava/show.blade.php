@extends('adminlte::page')

@section('title', 'Drzava detalji')
@section('content_header')
    <h1>Detalji drzave {{ $drzava->name }}</h1>
@stop

@section('content')
 @if (Session::has('greska'))
	<div class="alert alert-error">{{ Session::get('greska') }}</div>
@endif  

<?php

var_dump($drzava);

?>

@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
