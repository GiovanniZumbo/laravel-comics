<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container">

            {{--  Header left --}}
            <div id="header-left">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Logo"
                        class="d-inline-block align-text-top">
                </a>
            </div>

            {{-- Link menu --}}
            <div id="nav-links" class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    @foreach ($navLinks as $link)
                        <li class="nav-item">
                            <a class="nav-link" href="#">{{ $link }}</a>
                        </li>
                    @endforeach
            </div>
            {{-- header Right --}}

            <div id="header-right">
                <form>
                    <input type="text" placeholder="search">
                    <button type="submit" class="btn">Cerca</button>
                </form>
            </div>
        </div>
    </nav>
</header>
