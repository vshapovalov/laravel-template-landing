<!doctype html>
<html lang="{{ app()->getLocale()  }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />

    <meta name="description" content="{{ data_content('page_description') }}" />
    <meta name="keywords" content="{{ data_content('page_keywords') }}" />

    <title>{{ data_content('page_title') }}</title>
    <link rel="stylesheet" href="{{ asset('/css/vendor/swiper/idangerous.swiper.css') }}">
    <link rel="stylesheet" href="{{ url(mix('/css/app.css')) }}">
    <style>
        @-webkit-keyframes scale-up-center {
            0% {
                -webkit-transform: translateX(-50%) translateY(-50%) scale(0.5);
                transform: translateX(-50%) translateY(-50%) scale(0.5);
            }
            100% {
                -webkit-transform: scale(1);

                transform: translateX(-50%) translateY(-50%) scale(1);
            }
        }
        @keyframes scale-up-center {
            0% {
                -webkit-transform: translateX(-50%) translateY(-50%) scale(0.5);
                transform: translateX(-50%) translateY(-50%) scale(0.5);
            }
            100% {
                -webkit-transform: translateX(-50%) translateY(-50%) scale(1);
                transform: translateX(-50%) translateY(-50%) scale(1);
            }
        }


        .preloader{
            position: fixed;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 1000;
            background-color: white;
        }

        .preloader .content{
            position: absolute;
            height: 60px;
            width: 60px;
            left: 50%;
            top: 50%;
            background: black;
            transform: translateX(-50%) translateY(-50%);
            transform-origin: center;
            -webkit-animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) infinite alternate-reverse both;
            animation: scale-up-center 0.4s cubic-bezier(0.390, 0.575, 0.565, 1.000) infinite alternate-reverse both;
        }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->



    @if( crud_settings('site.google_metric') )
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-93677289-2"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', '{{ crud_settings('site.google_metric') }}');
    //        gtag('config', 'UA-93677289-2');

        </script>
    @endif

</head>
<body class="has-fixed-menu">
    <div class="preloader">
        <div class="content"></div>
    </div>

    <div class="fixed-menu">
        <div class="container">
            <div class="logo">
                <div class="logo"><img src="{{ url('/storage/uploads/4-logo.jpg') }}" alt="{{ data_content('site_title') }}"></div>
                <h3 class="logo_text">{{ data_content('logo_caption') }}</h3>
            </div>

            {!! crud_menu('main') !!}

            <div class="phone-block">
                <h1><a href="tel:{{ data_content('phone') }}">{{ data_content('phone') }}</a></h1>
                <div class="call-order">
                    <a href="javascript:;" class="button js-modal-toggle call-order-button" data-modal-target=".modal.form-call">{{ data_content('need_call_button') }}</a>
                </div>
            </div>
            <div class="hamburger">
                <a href="javascript:;"><i class="icon-menu"></i></a>
            </div>
        </div>
    </div>

    <div class="page-content">
        @yield('page_content')
    </div>
    <footer>
        <div class="container">
            <div class="row ">
                <div class="col-xs-12 col-md-6 text-left text-center-md row middle-xs">
                    <a href="{{ data_content('url_facebook') }}"><i class="icon-facebook"></i></a>
                    <a href="{{ data_content('url_twitter') }}"><i class="icon-twitter"></i></a>
                    <a href="{{ data_content('url_vk') }}"><i class="icon-vkontakte"></i></a>
                    <a href="{{ data_content('url_insta') }}"><i class="icon-instagram"></i></a>
                    <a href="{{ data_content('url_skype') }}"><i class="icon-skype"></i></a>
                    <a href="{{ data_content('url_whatsapp') }}"><i class="icon-whatsapp"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 text-right text-center-md">
                    <div class="phone-block inline-block text-center">
                        <h1><a href="tel:{{ data_content('phone') }}">{{ data_content('phone') }}</a></h1>
                        <div class="call-order">
                            <a href="javascript:;" class="button js-modal-toggle call-order-button" data-modal-target=".modal.form-call">{{ data_content('need_call_button') }}</a>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </footer>

    <script src="{{ asset('/js/vendor/swiper/idangerous.swiper.min.js') }}"></script>
    <script src="{{ url(mix('js/app.js')) }}"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAA6eTSNtTGtTOnvOIah6c4Eimcmqd9Znc&callback=initGoogleMap">
    </script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" lazyload>
</body>
</html>