<footer>
    <div class="container">
      <div class="row">
        <img id="logo" src="../images/dc-logo-bg.png" alt="dc-logo" />
        <div class="col">
          <h3>DC Comics</h3>
          <ul>
            @foreach ($DCcomicsLinks as $link)
            <li>
              <a :href="link.url" :class="">
                {{ $link['text'] }}</a
              >
            </li>
            @endforeach
          </ul>
          <h3>Shop</h3>
          <ul>
            <li >
              <a href="#">Shop DC</a>
            </li>
            <li >
              <a href="#">Shop DC Collectibles</a>
            </li>
          </ul>
        </div>
        <div class="col">
          <h3>DC</h3>
          <ul>
            @foreach ($DClinks as $link)
            <li>
              <a :href="{{ $link['url'] }}">{{ $link['text'] }}</a>
            </li>
            @endforeach
          </ul>
        </div>
        <div class="col">
          <h3>Sites</h3>
          <ul>
            @foreach ($sites as $link)
            <li>
              <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </footer>