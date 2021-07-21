@extends('layouts.app')

@section('title-block')
    C&M: Обо мне
@endsection

@section('content')

    <style>
        body {
            background-color: #f1f1f1;
            padding: 20px;
        }
    </style>
    <div id="about">
        <div class="container pt-2">
            <div class="row">
                <div class="col-xs-12 col-md-6">
                    <div class="about-img">
                        <img src="{{ asset('images/profile.jpg' )}}" class="img-responsive"
                             alt="profile-image">
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="about-text">
                        <h2>Cake&amp;Mousse</h2>
                        <hr>
                        <p style="margin-bottom: 15px;">Меня зовут Виктория и мой девиз: <br>
                            <i>"Не лишайте себя радости — регулярно ешьте сладости!"</i>
                        </p>
                        <div class="about-img" style="margin-bottom: 10px">
                            <img src="{{ asset('images/profile-2.jpg' )}}" class="img-responsive"
                                 alt="profile-image">
                        </div>
                        <h3>Я предлагаю:</h3>
                        <p class="my-0" style="text-align: justify"> Современные десерты. Кремовые и мастичные торты. Торты в малайзийском стиле. Имбирные
                            пряники.
                            Капкейки. Кейкпопсы. Пирожные. Макарон. Кэнди-бар (Candy bar).<br>
                            Только качественные продукты! Натуральные сливки, бельгийский шоколад, профессиональные
                            европейские красители.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">

            </div>
        </div>
    </div>


@endsection
