@extends('base')


@section('main')
        <div class="contaniner news">
            <div class="item">
                Название: {{ $product->name }} <br>
                <img src="{{ $product->photo }}" alt="">
                Описание: {{ $product->description }} <br>
                Цена: {{ $product->price }}<br>
                Дата создания: {{ $product->created_ad }}
            </div>
        </div>
@endsection

