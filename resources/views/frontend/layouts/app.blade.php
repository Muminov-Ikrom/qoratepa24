<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qoratepa 24</title>
    <link rel="stylesheet" href="{{ asset('front/css/main.css') }}">
{{--    <link rel="icon" type="image/x-icon" href="{{ asset('front/img/qoratepa_24.png') }}">--}}
</head>
<body>
    {{--telegram joing group section start--}}
{{--    <div class="layer">--}}
{{--        <div class="modal-box basic-flex">--}}
{{--            <button type="button" class="btn hide-modal-btn">x</button>--}}
{{--            <h4>Подписывайтесь на наш канал в Telegram и будьте всегда в курсе самых последних новостей:</h4>--}}
{{--            <div class="telegram-join  basic-flex">--}}
{{--                <a href="#"><img src="img/tg.png" alt="Telegram">Подписатся</a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    {{--telegram joing group section end--}}


    <div class="menu-mask"></div>


<main>

    {{--Header section start--}}
    @include('frontend/sections/headerSection')
    {{--Header section end--}}

    @yield('content')

</main>




{{--Footer section start--}}
@include('frontend/sections/footerSection')
{{--Footer section end--}}

<script src="{{ asset('front/js/main.js') }}"></script>

</body>
</html>
