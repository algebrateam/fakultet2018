@extends('master')

@section('title', 'Sve trgovine')
{{-- linkovi za mobitel --}}
@section('sidebar')
@parent

<p>Ovo su linkovi za mobitel:</p>
<a href="/mobitels">Svi mobiteli</a>

@endsection

{{-- This comment will not be present in the rendered HTML --}}

@section('content')

<?php
//dd($mobit);
?>
<h3>Lista trgovina:</h3>
<ul>
    @foreach ($trgovine as $t)
    
  
    
    <li> <a href='{{url("/trgovine/{$t->id}")}}'> {{$t->name }}</a>
<a href='{{url("/trgovine/{$t->id}/edit")}}'><span class="label label-info">Edit</span></a>
<form action='{{url("/trgovine/{$t->id}")}}' method='POST' style="display: inline">
@csrf
<input type='hidden' name='_method' value='DELETE'>
<button type='submit' name='delete_trgovina' value='delete' class="btn btn-warning"> delete</button>
</form>
</li>
    
    @endforeach
</ul>


@endsection

