@extends('adminlte::page')

@section('title', 'Sve adrese')

{{-- This comment will not be present in the rendered HTML --}}

@section('content_header')
    <h1>Adrese</h1>
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
<ol start="{{$adresa->firstItem()}}">
    <?php
    //dd($adresa);
    ?>
    @foreach ($adresa as $a)
    
  
    
    <li> <a href='{{url("/adresa/{$a->id}")}}'> {{$a->county }} {{$a->city }} {{$a->street }} {{$a->county }}</a>
<a href='{{url("/adresa/{$a->id}/edit")}}'><span class="label label-info">Edit</span></a>
<form action='{{url("/adresa/{$a->id}")}}' method='POST' style="display: inline">
@csrf
<input type='hidden' name='_method' value='DELETE'>
<button type='submit' name='delete_adresa' value='delete' class="btn btn-warning"> delete</button>
</form>
</li>
    
    @endforeach
</ol>
{{ $adresa->links() }}


@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop