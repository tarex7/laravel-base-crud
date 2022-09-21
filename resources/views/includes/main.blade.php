<main class="bg-dark"> 
    <div class="container">
      <div class="comics">
        @foreach($comics as $comic)
        <div class="card">
          <figure>
            <a href="{{ route('comics.show', [$comic->id]) }}"> <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title']}} " /></a>
          </figure>
          <figcaption>{{ $comic['title']}}</figcaption>
        </div>
        @endforeach
      </div>
    </div>
  </main>