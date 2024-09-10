@php 

    $navbar = config('menus.navbar');

@endphp

<header>
        <div class="container cont-header">
            <div class="header-logo">
                <a href="{{ route('main') }}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                </a>
            </div>
            <nav>
                <ul>
                    @foreach($navbar as $item)
                    <li>
                        <a class="{{ Route::currentRouteName() === $item['href'] ? 'active' : '' }}" href="{{ $item['href'] }}">{{ $item['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
</header>