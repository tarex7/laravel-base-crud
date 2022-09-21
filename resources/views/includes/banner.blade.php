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