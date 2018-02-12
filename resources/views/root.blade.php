@extends('layouts.master')

@php

    $lat = null;
    $lng = null;
    if(!empty($coords = crud_settings('site.coords'))){
        $coords = explode(',', $coords);

        if (count($coords) == 2){
            $lat = trim($coords[0]);
            $lng = trim($coords[1]);
        }
    }


@endphp

@section('page_content')
    {{--Заголовок--}}
    <header class="header">
        <div class="content">
            <h1 class="title">{{ data_content('header_title') }}</h1>
            <h2 class="subtitle">{{ data_content('header_subtitle') }}</h2>
            <a href="{{ data_content('header_button_url') }}" class="button header-button">{{ data_content('header_button_title') }}</a>
        </div>
    </header>

    <section class="section features">
        {{--Наши преимущества--}}
        <div class="section-header">
            <h4 class="title">{{ data_content('features_title') }}</h4>
            <p class="description">{{ data_content('features_description') }}</p>
        </div>
        <div class="container">
            <div class="content row ">
                @foreach(data_feature() as $feature)
                <div class="col-xs-12 col-md-4 item">
                    <div class="image-wrapper">
                        <img src="{{ url($feature->image) }}" alt="{{ $feature->title }}">
                    </div>
                    <p class="title">{{ $feature->title }}</p>
                    <p class="text">{{ $feature->text }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="section portfolio">
        {{--Портфолио--}}
        <div class="section-header">
            <h4 class="title">{{ data_content('portfolio_title') }}</h4>
            <p class="description">{{ data_content('portfolio_description') }}</p>
        </div>
        <div class="container">

            <div class="content">
                <a href="javascript:;" class="slide-left"><i class="icon-left-open"></i></a>
                <a href="javascript:;" class="slide-right"><i class="icon-right-open"></i></a>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach(data_portfolio() as $portolio)
                            <div class="item swiper-slide">
                                <div class="image-wrapper">
                                    <img src="{{ url($portolio->image) }}" alt="{{ $portolio->title }}">
                                </div>
                                <p class="title">{{ $portolio->title }}</p>
                                <p class="text">{{ $portolio->text }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section hot">
        {{--Горячее предложение--}}
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 section-header ">
                    <h4 class="title">{{ data_content('hot_title') }}</h4>
                    <p class="description">{{ data_content('hot_description') }}</p>
                </div>
                <div class="content col-xs-12 col-md-6">
                    форма заказа
                </div>
            </div>
        </div>
    </section>

    <section class="section proposes">
        {{--Наши услуги --}}
        <div class="section-header">
            <h4 class="title">{{ data_content('propose_title') }}</h4>
            <p class="description">{{ data_content('propose_description') }}</p>
        </div>
        <div class="container">
            <div class="content row ">
                @foreach(data_propose() as $propose)
                    <div class="col-xs-12 col-md-4 item">
                        <div class="image-wrapper">
                            <img src="{{ url($propose->image) }}" alt="{{ $propose->title }}">
                        </div>
                        <p class="title">{{ $propose->title }}</p>
                        <p class="text">{{ $propose->text }}</p>
                        <div class="text-center">
                            <a href="#" data-propose-id="{{ $propose->id }}" class="button">Купить за {{ $propose->price }}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="section achives">
        {{--Наши достижения --}}
        <div class="container">
            <div class="content row ">
                @foreach(data_achive() as $achive)
                    <div class="col-xs-12 col-md-4 item">
                        <p class="text">{{ $achive->text }}</p>
                        <p class="title">{{ $achive->title }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="about" class="section about">
        {{--О нас--}}
        <div class="container">
            <div class="section-header">
                <h4 class="title">{{ data_content('about_title') }}</h4>
                <p class="description">{{ data_content('about_description') }}</p>
            </div>
            <div class="content row text-left">
                <div class="col-xs-12 col-md-6">
                    {!! data_content('about_col_1', 'body') !!}
                </div>
                <div class="col-xs-12 col-md-6">
                    {!! data_content('about_col_2', 'body') !!}
                </div>
            </div>
        </div>
    </section>

    <section class="section clients">
        {{--Наши клиенты --}}
        <div class="section-header">
            <h4 class="title">{{ data_content('client_title') }}</h4>
            <p class="description">{{ data_content('client_description') }}</p>
        </div>
        <div class="container">

            <div class="content">
                <a href="javascript:;" class="slide-left"><i class="icon-left-open"></i></a>
                <a href="javascript:;" class="slide-right"><i class="icon-right-open"></i></a>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach(data_client() as $client)
                            <div class="item swiper-slide">
                                <div class="image-wrapper">
                                    <img src="{{ url($client->image) }}" alt="{{ $client->title }}">
                                </div>
                                <p class="title">{{ $client->title }}</p>
                                <p class="text">{{ $client->description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section order-form">
        {{--Форма заказа--}}
        <div class="container">Форма заказа</div>
    </section>

    <section class="section feedbacks">
        {{--Отзывы     model    --}}
        <div class="section-header">
            <h4 class="title">{{ data_content('feedback_title') }}</h4>
            <p class="description">{{ data_content('feedback_description') }}</p>
        </div>
        <div class="container">

            <div class="content">
                <a href="javascript:;" class="slide-left"><i class="icon-left-open"></i></a>
                <a href="javascript:;" class="slide-right"><i class="icon-right-open"></i></a>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach(data_feedback() as $feedback)
                            <div class="item swiper-slide">
                                <div class="image-wrapper">
                                    <img src="{{ url($feedback->image) }}" alt="{{ $feedback->title }}">
                                </div>
                                <p class="title">{{ $feedback->title }}</p>
                                <p class="description">{{ $feedback->description }}</p>
                                <p class="text">{{ $feedback->text }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section partners">
        {{--Наши партнеры--}}
        <div class="section-header">
            <h4 class="title">{{ data_content('partner_title') }}</h4>
            <p class="description">{{ data_content('partner_description') }}</p>
        </div>
        <div class="container">

            <div class="content">
                <a href="javascript:;" class="slide-left"><i class="icon-left-open"></i></a>
                <a href="javascript:;" class="slide-right"><i class="icon-right-open"></i></a>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach(data_partner() as $partner)
                            <div class="item swiper-slide">
                                <div class="image-wrapper">
                                    <img src="{{ url($partner->image) }}" alt="{{ $partner->title }}">
                                </div>
                                <p class="title">{{ $partner->title }}</p>
                                <p class="description">{{ $partner->description }}</p>
                                <p class="text">{{ $partner->text }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section questions">
        {{--вопросы-ответы--}}
        <div class="section-header">
            <h4 class="title">{{ data_content('question_title') }}</h4>
            <p class="description">{{ data_content('question_description') }}</p>
        </div>
        <div class="container">

            <div class="content">
                <div class="tabs row">
                    <div  class="tab-header col-xs-12 col-md-6">
                        @foreach(data_question() as $question)
                            <div data-tab-id="{{ $question->id }}" class="tab {{ $loop->first ? 'is-active' : ''}}">
                                <p>{{ $question->title }}</p>
                            </div>
                        @endforeach
                    </div>
                    <div class="tab-content col-xs-12 col-md-6">
                        @foreach(data_question() as $question)
                            <div data-tab-id="{{ $question->id }}" class="tab {{ $loop->first ? 'is-active' : ''}}">
                                <p>{{ $question->answer }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--<section class="section forms">--}}
        {{--<div class="container">--}}
            {{-- form_render('call', false) --}}
        {{--</div>--}}
    {{--</section>--}}

    <section class="section contacts">
        {{--Контакты карта--}}
        @if (isset($lat) && isset($lng) && !empty($lat) && !empty($lng))
            <div data-lat="{{ $lat }}" data-lng="{{ $lng }}" class="map-box"></div>
        @endif
        <div class="contact-block">
            <h6 class="title">Контакты</h6>
            <p class="item">Адрес: <b>{{ data_content('contact_address') }}</b></p>
            <p class="item">Телефон: <b>{{ data_content('contact_phone') }}</b></p>
            <p class="item">Email: <b>{{ data_content('contact_email') }}</b></p>
            <p class="item">Режим работы: <b>{{ data_content('contact_hours') }}</b></p>
        </div>
    </section>

    {!! form_render('call', true) !!}

    {{--Блог, новости--}}
    {{--Соц сети - фото инстграма--}}

@endsection

