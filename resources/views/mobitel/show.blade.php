@extends('adminlte::page')

@section('title', 'Mobitel detalji')
@section('content_header')
    <h1>Detalji mobitela {{ $mobitel->model }}</h1>
@stop

@section('content')
 @if (Session::has('greska'))
	<div class="alert alert-error">{{ Session::get('greska') }}</div>
@endif  

    <h3>Hello, {{ $mobitel->producer }} <i class="fa fa-mobile" aria-hidden="true"></i></h3>
    
    Trenutna cijena je <span style="font-weight: bold; color: #e3342f">{{ $mobitel->price }} </span><br>
    Model je: {{ $mobitel->model }}, veličina ekrana je {{ $mobitel->screen }} 
    <br>
    <br>
    Mozete ga kupiti ovdje:<br>
    <?php 
    // Ovo je Manje ispravno:
   // $t=App\Mobitel::find(1)->trgovine()->get();
    //$trgs=$mobitel->trgovine()->get();
    ?>
        <ol>
    @foreach ($mobitel->trgovine()->get() as $t)
        <li><a href='{{url("/trgovine/{$t->id}")}}'> {{$t->name}}</a> 
        <i class="fas fa-arrow-circle-right"></i>
        </li>
     @endforeach
    </ol>
    
    @component('components.mob2trg',['m' => $mobitel] )
    @endcomponent
    
    
    @include('mobitel.footer')
@endsection
@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
