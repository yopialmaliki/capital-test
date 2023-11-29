
        <ul class="navbar-nav">
          @guest
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('index') }}">HOME |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.register') }}">REGISTER</a>
            </li>
          @else
            <li class="nav-item list-unstyled">
                <a class="nav-link active" aria-current="page" href="#">HOME |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.article.index') }}">ARTIKEL |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.profile') }}">PROFILE |</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('public.logout') }}">LOGOUT</a>
            </li>
          @endguest
        </ul>
  