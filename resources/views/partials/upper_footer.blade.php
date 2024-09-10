@php 

    $menu = config('menus.footer_menu');

@endphp

<div class="up_foot_cont">
        <div class="container">
            @foreach($menu as $item)
            <div class="foot_menu">
                <h5>{{ $item['title'] }}</h5>
                <ul>
                    @foreach($item['links'] as $link)
                    <li>
                        <a href="{{ $link['href'] }}">{{ $link['name'] }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
            @endforeach
        </div>
    </div>