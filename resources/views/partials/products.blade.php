@php 

$products = config('products');

@endphp

<div class="content-cont">
    <div class="small_container">
        @foreach($products as $product)
        <div class="card">
            <div class="card-img">
                <img src="{{ $product['thumb'] }}" alt="{{ $product['series'] }}">
            </div>
            <h4>{{ $product['series'] }}</h4>
        </div>
        @endforeach
    </div>
</div>