@extends('base')


 @section('main')
    <div class="contaniner news">
        @foreach($products as $product)
        <div class="item">
            Название: {{ $product->name }} <br>
            <img src="{{ $product->photo }}" alt="">
            Описание: {{ $product->description }} <br>
            Цена: {{ $product->price }}<br>
            <div class="btn_in_cart"><a href="{{'add-to-card?id=' . $product->id}}">В корзину</a></div>
            <div class="btn_pay">Купить</div>
        </div>
        @endforeach
    </div>
@endsection

