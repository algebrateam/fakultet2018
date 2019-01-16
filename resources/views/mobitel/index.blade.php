@extends('adminlte::page')

@section('title', 'Mobiteli svi')
@section('content_header')
    <h1>Mobiteli</h1>
@stop


@section('content')


<h3>Lista mobitela:</h3>
<ul>
    @foreach ($mobitels as $m)
    
    <!-- <li> <a href="/mobitels/{{$m->id}}"> {{$m->producer }}</a></li> -->
    
    <li> <a href='{{url("/mobitels/{$m->id}")}}'> {{$m->producer }}</a>
<a href='{{url("/mobitels/{$m->id}/edit")}}'><span class="label label-info">Edit</span></a>
<form action='{{url("/mobitels/{$m->id}")}}' method='POST' style="display: inline">
@csrf
<input type='hidden' name='_method' value='DELETE'>
<button type='submit' name='delete_mob' value='delete' class="btn btn-warning"> delete</button>
</form>
</li>
    
    @endforeach
</ul>


{{--
    Trenutna cijena je <span style="font-weight: bold; color: #e3342f">{{ $mobitel->price }} </span><br>
Model je: {{ $mobitel->model }}, veličina ekrana je {{ $mobitel->screen }} 
--}}


@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

