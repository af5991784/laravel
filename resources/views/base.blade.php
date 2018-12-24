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
                    <li>
                        <div class="cart_elem_img">
                            <img src="https://avatars.mds.yandex.net/get-mpic/1363210/img_id7884416375422533587.png/orig" alt="">
                        </div>
                        <div class="cart_name_product">Название</div>
                        <div class="cart_remove_img">
                            <img src="img/cart_remove.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="cart_elem_img">
                            <img src="https://avatars.mds.yandex.net/get-mpic/1363210/img_id7884416375422533587.png/orig" alt="">
                        </div>
                        <div class="cart_name_product">Название</div>
                        <div class="cart_remove_img">
                            <img src="img/cart_remove.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="cart_elem_img">
                            <img src="https://avatars.mds.yandex.net/get-mpic/1363210/img_id7884416375422533587.png/orig" alt="">
                        </div>
                        <div class="cart_name_product">Название</div>
                        <div class="cart_remove_img">
                            <img src="img/cart_remove.png" alt="">
                        </div>
                    </li>
                    <li>
                        <div class="cart_elem_img">
                            <img src="https://avatars.mds.yandex.net/get-mpic/1363210/img_id7884416375422533587.png/orig" alt="">
                        </div>
                        <div class="cart_name_product">Название</div>
                        <div class="cart_remove_img">
                            <img src="img/cart_remove.png" alt="">
                        </div>
                    </li>
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