@extends('adminlte::page')

@section('title', 'Dodaj novu trgovinu')
@section('content_header')
<h1>Dodaj novu trgovinu</h1>
@stop
@section('content')

<form method="POST" action="/trgovine">  
    @csrf
    <div class="form-group">
        <label for="name"> *name:</label>
        <input maxlength="191" type="text" name="name" required="true"
               value="{{ old('name') }}"><br>
        <label for="drzava"> *drzava:</label>
        <input maxlength="191" type="text" name="drzava" required="true"
               value="{{ old('drzava') }}"><br>
    </div>
    <div class="form-group">
        <input type="submit" name="trgovina_sbm" value="Dodaj novu trgovinu">
    </div>
</form>    


@endsection
@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!');</script>
@stop
