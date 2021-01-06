<header>
    <div class="logo">
        <img src="{{asset('images/marchio-sito-test.png')}}" alt="">
    </div>
    <div class="menu">
        <nav>
            <ul>
                <li class="nav-menu">
                    <a class="{{Request::route()->getName() == 'home' ? 'active' : ''}}" href="{{url('/')}}">Home</a>
                </li>
                <li class="nav-menu">
                    <a  class="{{Request::route()->getName() == 'prodotti' ? 'active' : ''}}" href="{{route('prodotti')}}">Prodotti</a>
                </li>
                <li class="nav-menu">
                    <a  class="{{Request::route()->getName() == 'news' ? 'active' : ''}}" href="{{route('news')}}">News</a>
                </li>
            </ul>
        </nav>

    </div>
</header>
