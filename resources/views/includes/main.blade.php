<main>
    <div class="container">
      <div class="comics">
        @foreach($comics as $comic)
        <div class="card">
          <figure>
            <a href="{{ $comic['url'] }}"> <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}} " /></a>
          </figure>
          <figcaption>{{ $comic['title']}}</figcaption>
        </div>
        @endforeach
      </div>
    </div>
  </main>