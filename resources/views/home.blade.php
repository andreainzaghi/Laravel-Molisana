<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <link rel="" href="{{asset('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    
    </head>
    <body>
        <header>
            <div class="logo"> <img src="{{asset('img/marchio-sito-test.png')}}" alt="" width="200px"></div>
            <div class="nav-bar">
                <ul>
                    <li>Home</li>
                    <li>Prodotti</li>
                    <li>News</li>
                </ul>
            </div>
        </header>
        <main>
            <div class="lunghe">
                <h2>le lunghe</h2>
                <div class="cards">
                    @foreach($lunga as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </main>
       
      
    </body>
</html>
