@php

    $merch = config('menus.merch');

@endphp

<div class="merch-cont">
        <div class="container">
            @foreach($merch as $item)
           <div class="item">
                <div class="item_img">
                <img src="{{ Vite::asset('resources/img/' . $item['img']) }}" alt="{{ $item['name'] }}">
                </div>
                <div class="item_descr">{{ $item['name'] }}</div>
           </div>
           @endforeach
        </div>
    </div>