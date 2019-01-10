@extends('adminlte::page')

@section('title', 'Uredi trgovinu')
@section('content_header')
    <h1>Uredi trgovinu {{$trgovine->name }}</h1>
@stop

@section('content')
 @if (Session::has('error'))
	<div class="alert alert-error">{{ Session::get('error') }}</div>
@endif   
    <form method="POST" action="/trgovine/{{$trgovine->id}}">  
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="form-group">
            <label for="id"> id:</label>
            {{$trgovine->id}}<br>
            <label for="name"> *name:</label>
        <input maxlength="191" type="text" name="name" required="true" 
               value="{{ $trgovine->name }}"><br>
        <label for="drzava"> *drzava:</label>
         <input maxlength="191" type="text" name="drzava" required="true"
               value="{{ $trgovine->drzava }}"><br>
        </div>
        <div class="form-group">
        <input type="submit" name="trgovina_sbm" value="Izmijeni detalje trgovine">
        </div>
    </form>    

    
    
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
