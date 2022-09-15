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
  <div class="jumbotron"></div>

  </div>
</body>
</html>