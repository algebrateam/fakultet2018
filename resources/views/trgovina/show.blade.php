@extends('master')

@section('title', 'Mobitel detalji')
{{-- linkovi za mobitel --}}
@section('sidebar')
    @parent

    <p>Ovo su linkovi za mobitel:</p>
    <?php
    //dd($trgovine);
    ?>
    
@endsection

{{-- This comment will not be present in the rendered HTML --}}

@section('content')
    <p>Detalji trgovine:</p>
    <h3>Hello, {{ $trgovine->name }}.</h3>
    
    Država: <span style="font-weight: bold; color: #e3342f">{{ $trgovine->drzava }} </span><br>
    Lista mobitela:
    <ol>
    @foreach ($mobovi as $m)
        <li><a href='{{url("/mobitels/{$m->id}")}}'> {{$m->producer}}, {{$m->model}}</a> </li>
     @endforeach
    </ol>
@endsection

