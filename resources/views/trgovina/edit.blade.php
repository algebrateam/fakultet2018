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


    <h3>Uredi postojeći mobitel</h3>
    
    <form method="POST" action="/mobitels/{{$mobitel->id}}">  
        <input type="hidden" name="_method" value="PUT">
        @csrf
        <div class="form-group">
            <label for="id"> *id:</label>
            {{$mobitel->id}}<br>
            <label for="producer"> *producer:</label>
        <input maxlength="191" type="text" name="producer" required="true"
               value="{{ $mobitel->producer }}"><br>
        <label for="model"> *model:</label>
         <input maxlength="191" type="text" name="model"
                value="{{ $mobitel->model }}"><br>
         <label for="screen"> *screen:</label>
         <input min="1" max="9" type="number" name="screen"
                value="{{ $mobitel->screen }}"><br>
         <label for="price"> *price:</label>
         <input max="9999" min="0" type="number" name="price" required="true"
                value="{{ $mobitel->price }}"><br>
        </div>
        <div class="form-group">
        <input type="submit" name="novi_mob_sbm" value="Izmijeni detalje mobitela">
        </div>
    </form>    

    
    
@endsection

