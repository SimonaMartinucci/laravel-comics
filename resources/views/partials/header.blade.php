@php 

    $navbar = config('menus.navbar');

@endphp

<header>
        <div class="container cont-header">
            <div class="header-logo">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
            </div>
            <nav>
                <ul>
                    @foreach($navbar as $item)
                    <li>
                        <a href="{{ $item['href'] }}">{{ $item['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </nav>
        </div>
</header>