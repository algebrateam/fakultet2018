@extends('master')

@section('title', 'Mobitel detalji')
{{-- linkovi za mobitel --}}
@section('sidebar')
    @parent

    <p>Ovo su linkovi za mobitel:</p>
    <a href="/mobitels">Svi mobiteli</a>
    
@endsection

{{-- This comment will not be present in the rendered HTML --}}

@section('content')
    <h3>Novi mobitel</h3>
    <form method="POST" action="/mobitels">
         @csrf
         *producer:<input maxlength="191" type="text" name="producer" required="true"><br>
         *model:<input maxlength="191" type="text" name="model" required="true"><br>
         screen<input min="1" max="9" type="number" name="screen"><br>
        *price: <input max="9999" min="0" type="number" name="price" required="true"><br>
        <input type="submit" name="novi_mob_sbm" value="Dodaj novi mobitel">
    </form>    

    
    
@endsection

