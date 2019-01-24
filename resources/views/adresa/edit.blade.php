@extends('adminlte::page')

@section('title', 'Uredi adresu')
@section('content_header')
    <h1>Uredi adresu{{$adresa->id}}</h1>
@stop

@section('content')
 @if (Session::has('error'))
	<div class="alert alert-error">{{ Session::get('error') }}</div>
@endif   
<?php 
dd($adresa);
?>
    <form method="POST" action="/adrese/{{$adresa->id}}">  
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="form-group">
            <label for="id"> id:</label>
            {{$adresa->id}}<br>
            <input maxlength="191" type="number" name="id" required="true" readonly="true"
               value="{{ $adresa->id }}"><br>
            
            <label for="trgovina_id"> trgovina_id:</label>
            {{$adresa->trgovina_id}}<br>
            <input maxlength="191" type="number" name="trgovina_id" required="true"
               value="{{ $adresa->trgovina_id }}"><br>
            
            <label for="slika"> slika:</label>
            {{$adresa->slika}}<br>
            <input maxlength="191" type="text" name="slika"
               value="{{ $adresa->slika }}"><br>
            
            <label for="country"> country:</label>
            {{$adresa->country}}<br>
            <input maxlength="191" type="text" name="country" required="true"
               value="{{ $adresa->country }}"><br>
            
            <label for="city"> city:</label>
            {{$adresa->city}}<br>
            <input maxlength="191" type="text" name="city" required="true"
               value="{{ $adresa->city }}"><br>
            
            <label for="pbr"> pbr:</label>
            {{$adresa->pbr}}<br>
            <input maxlength="191" type="text" name="pbr" required="true"
               value="{{ $adresa->pbr }}"><br>
            
            <label for="street"> street:</label>
            {{$adresa->street}}<br>
            <input maxlength="191" type="text" name="street" required="true"
               value="{{ $adresa->street }}"><br>
            
            <label for="phone"> phone:</label>
            {{$adresa->phone}}<br>
            <input maxlength="191" type="text" name="phone"
               value="{{ $adresa->phone }}"><br>
            
            <label for="email"> email:</label>
            {{$adresa->email}}<br>
            <input maxlength="191" type="text" name="email"
               value="{{ $adresa->email }}"><br>
            
  
        </div>
        <div class="form-group">
        <input type="submit" name="adresa_sbm" value="Izmijeni detalje adrese">
        </div>
    </form>    


    
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
