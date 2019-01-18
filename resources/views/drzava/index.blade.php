@extends('adminlte::page')

@section('title', 'Sve drzave')

@section('content_header')
<h1>Drzave</h1>
@stop

@section('content')
@if (Session::has('message'))
<div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
@if (Session::has('error'))
<div class="alert alert-error">{{ Session::get('error') }}</div>
@endif
@if (Session::has('warning'))
<div class="alert alert-warning">{{ Session::get('warning') }}</div>
@endif
<hr>
<?php
// $drzava = $drzave->first();
//$attributes = array_keys($drzava->toArray());
//dd($attributes);
?>

    @component('components.datatable2',['data'=>$drzave])
    @endcomponent


@endsection

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop