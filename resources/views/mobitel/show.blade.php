@extends('master')

@section('title', 'Mobitel detalji')
{{-- linkovi za mobitel --}}
@section('sidebar')
    @parent

    <p>Ovo su linkovi za mobitel:</p>
    
    
@endsection

{{-- This comment will not be present in the rendered HTML --}}

@section('content')
 @if (Session::has('greska'))
	<div class="alert alert-error">{{ Session::get('greska') }}</div>
@endif  
    <p>Detalji mobitela:</p>
    <?php
    //dd($mobitel);
    ?>
    <h3>Hello, {{ $mobitel->producer }}.</h3>
    
    Trenutna cijena je <span style="font-weight: bold; color: #e3342f">{{ $mobitel->price }} </span><br>
    Model je: {{ $mobitel->model }}, veličina ekrana je {{ $mobitel->screen }} 
    
    
@endsection

