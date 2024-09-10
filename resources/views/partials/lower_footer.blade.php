@php 

    $icons = config('menus.footer_icons');

@endphp

<div class="low_foot_cont">
        <div class="container">
            <div class="sign">
                <a href="#">SIGN-UP NOW</a>
            </div>
            <div class="socials">
                <a href="#">FOLLOW US</a>
                @foreach($icons as $icon)
                <div class="icons">
                    <img src="{{ Vite::asset('resources/img/' . $icon['img']) }}" alt="{{ $icon['name'] }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>