

<div class="container">
    
    <header class="">
        <nav>
          <a href="#"></a>
            <img id="logo" src="../images/dc-logo.png" alt="logo"
          /></a>
          <div class="links">
            <ul>
              @foreach($DCcomicsLinks as  $index => $link)
                <li>
                <a href=""
                 class="">{{ $link['text'] }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </nav>
    </header>
  
  </div>