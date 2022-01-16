<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>- Manager fashion - @yield('title')</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery-func.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="all" />
    <div id="shell">
      
        <div id="header">
            <h1 id="logo1"><a href="/admin/fashion">FASHION</a></h1>
            <div id="navigation">
              <ul>
                <li><a class="active" href="/admin/fashion">HOME</a></li>
              </ul>
              <ul>
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu" aria-labelledby=""  >
                            <a class="dropdown-item" href="{{ route('logout') }}" style="color:blue"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            </div>
            
            <div id="sub-navigation">
              <ul>
                <li><a href="/admin/fashion/create">Add </a></li>
              </ul>
              {{-- <div id="search">
                <form action="#" method="get" accept-charset="utf-8">
                  <label for="search-field">SEARCH</label>
                  <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
                  <input type="submit" value="GO!" class="search-button" />
                </form>
              </div> --}}
            </div>
          </div>
        </div>
</head>
<body>
    
    <div class="container">
        <p class="lead">
            @yield('content')
        </p>
    </div>
    <footer class="footer">
    </footer>
  </body>
</html>