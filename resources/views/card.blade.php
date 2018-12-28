@extends('base')

@section('main')
    @if($header_card_elements != null)
        @foreach($header_card_elements as $header_card_eleme)
            <div class="card_item">
                <div class="card_img"><img src="{{ $header_card_eleme['img'] }}" alt="fddf"></div>
                <div class="card_description">{{ $header_card_eleme['description'] }}</div>
                <div class="card_price">{{ $header_card_eleme['price'] }}</div>
                <a href="remove-in-card?id={{ $header_card_eleme['id'] }}" class="cart_remove">Удалить</a>
            </div>
        @endforeach
    @else
        <h3>Корзина пуста!</h3>
    @endif
@endsection