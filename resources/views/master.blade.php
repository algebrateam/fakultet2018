<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>App Name - @yield('title')</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         @section('sidebar')
            <a href="/mobitels">Svi mobiteli</a>
            <a href="/mobitels/create">Dodaj novi mobitel</a>
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
