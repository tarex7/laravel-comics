<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>

<div class="container">
    
  <header class="">
      <nav>
        <a href="#">
          <img id="logo" src="../images/dc-logo.png" alt="logo"
        /></a>
        <div class="links">
          <ul>
            @foreach($links as $link)
              <li>
              <a href="#" class="">{{ $link['name'] }}</a>
            </li>
            @endforeach
          </ul>
        </div>
      </nav>
  </header>

</div>

<div class="jumbotron"></div>
<main>
    <div class="container">
      <div class="comics">
        @foreach($comics as $comic)
        <div class="card">
          <figure>
            <a href="#"> <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}} " /></a>
          </figure>
          <figcaption>{{ $comic['title']}}</figcaption>
        </div>
        @endforeach
      </div>
    </div>
  </main>

  <div class="banner">
    <div class="container">
      <div class="banner-icons">
      
          @foreach ($bannerItems as $item)
          <a href="#">
            <img src="{{ $item['src'] }}" :alt="{{ $item['text'] }}" />
            <p class="media-text">{{ $item['text'] }}</p>
          </a>
          @endforeach
        
      </div>
    </div>
  </div>

  
</body>
</html>