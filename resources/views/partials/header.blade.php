<header>
    <img class="molisana-logo" src="{{asset('img/logo.png')}}" alt="La Molisana">
    <nav class="header-nav">
        <ul>
            <li>
                <a href="{{route('home')}}" class="{{(url()->current() == route('home')) ? 'active' : ''}}">Home</a>
            </li>
            <li>
                <a href="{{route('prodotti')}}" class="{{(url()->current() == route('prodotti')) ? 'active' : ''}}">Prodotti</a>
            </li>
            <li>
                <a href="{{route('news')}}" class="{{(url()->current() == route('news')) ? 'active' : ''}}">News</a>
            </li>
        </ul>
    </nav>
    <i class="fas fa-bars lg-none"></i>
</header>
