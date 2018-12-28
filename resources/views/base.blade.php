<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">
    @section('head')  
    @show
</head>
<body>
    <header class="header">
        <div class="header_logo"></div>
        <div class="header_base"></div>
        <div class="header_cart">
            <div class="cart">
                <ul class="cart_elements">
                @if($header_card_elements != null)
                    @foreach($header_card_elements as $header_card_element)
                        <li>
                            <div class="cart_elem_img">
                                <img src="{{ $header_card_element['img'] }}" alt="">
                            </div>
                            <div class="cart_name_product">{{ $header_card_element['name'] }}</div>
                            <div class="cart_remove_img">
                                <img src="img/cart_remove.png" alt="">
                            </div>
                        </li>
                    @endforeach
                @else
                <h3>Корзина пуста!</h3>
                @endif
                </ul>
            </div>
        </div>
        @section('header')
            
        @show
    </header>
    <main class="main">
        @section('main')
            
        @show
    </main>
    <footer class="footer">
        @section('footer')
            
        @show
    </footer>
</body>
</html>