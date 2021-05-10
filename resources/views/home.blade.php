<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
         <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    
    </head>
    <body>
        <header>
            <div class="logo"> <img src="{{asset('img/marchio-sito-test.png')}}" alt="" width="200px"></div>
            <div class="nav-bar">
                <ul>
                    <li><a href="{{route('homepage')}}">Home</a> </li>
                    <li><a href="{{route('product')}}">Prodotti</a> </li>
                    <li><a href="{{route('news')}}">News</a> </li>
                </ul>
            </div>
        </header>
        <main>
            <div class="foto-main">
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
            <div class="corte">
                <h2>le corte</h2>
                <div class="cards">
                    @foreach($lunga as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="cortissime">
                <h2>le cortissime</h2>
                <div class="cards">
                    @foreach($lunga as $pasta)
                    <div class="card">
                        <img src="{{$pasta['src']}}" alt="">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        </main>
        <footer>
            <div class="untre">
  
                    <img src="{{asset('img/marchio-sito-test.png')}}" alt="" width="200px">  
                <ul>                  </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                <li>Lorem ipsum dolor sit enim placeat harum ad. </li>
                </ul>
            </div>
          <div class="duetre">
              <div class="tredue">
                <h3>PASTIFICIO</h3>
                <ul>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                </ul>
              </div>
              <div class="tredue">
                <h3>PASTIFICIO</h3>
                <ul>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                </ul>
              </div>
              <div class="tredue">
                <h3>PASTIFICIO</h3>
                <ul>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                    <li>IL pastificio</li>
                </ul>
              </div>
          </div>
          

   
        </footer>
       <section>          <div class="montagne">
        <img src="{{asset('img/footer-montagne-bottom.jpg')}}" alt="" width="100%"> 
     </div></section>
      
    </body>
</html>
