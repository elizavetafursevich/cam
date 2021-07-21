@extends('layouts.app')

@section('title-block')
    Cake and Mousse
@endsection


@section('content')
    <style>
        body {
            background-color: #f1f1f1;
            padding: 20px;
        }
    </style>
    <!-- Background image -->
    <div class="p-5 text-center bg-image"
         style="background-image: url('{{asset('images/banner-bg.jpg')}}');
             background-size: 100%;
             height: 60vh;
             margin-top: 58px;">
        <div class="mask my-5 py-4 mx-5" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3" style="font-size: 70px">Cake and Mousse</h1>
                    <h4 class="mb-3">Торты и десерты</h4>
                    <a class="btn btn-outline-light btn-lg" href="{{route('about')}}" role="button">Подробнее</a>
                </div>
            </div>
        </div>
    </div>
    <div class="p-2">
        <div class="row">
            <div class="col-lg-2 col-md-12 mb-2">
                <div class="view overlay z-depth-1-half">
                    <img
                        src="{{ asset('images/HPimage/1.jpg') }}"
                        class="img-fluid"
                        alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-2">
                <div class="view overlay z-depth-1-half">
                    <img
                        src="{{ asset('images/HPimage/2.jpg') }}"
                        class="img-fluid"
                        alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-2">
                <!--Image-->
                <div class="view overlay z-depth-1-half">
                    <img
                        src="{{ asset('images/HPimage/3.jpg') }}"
                        class="img-fluid"
                        alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 mb-2">
                <div class="view overlay z-depth-1-half">
                    <img
                        src="{{ asset('images/HPimage/4.jpg') }}"
                        class="img-fluid"
                        alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-2">
                <div class="view overlay z-depth-1-half">
                    <img
                        src="{{ asset('images/HPimage/5.jpg') }}"
                        class="img-fluid"
                        alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 mb-2">
                <div class="view overlay z-depth-1-half">
                    <img
                        src="{{ asset('images/HPimage/6.jpg') }}"
                        class="img-fluid"
                        alt="">
                    <a href="">
                        <div class="mask rgba-white-light"></div>
                    </a>
                </div>
            </div>
        </div>
        <p style="font-size: 28px; text-align: center">
            <b>Пусть жизнь будет такой же яркой, сочной и веселой!</b> <br>
            <em>А если хотите, чтобы она стала вкуснее и слаще, закажите у меня торт <i class="fa fa-birthday-cake" aria-hidden="true"></i></em>
        </p>
        <ul style="font-size: 26px; list-style-type: none">
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Большой выбор начинок <i class="fa fa-search" aria-hidden="true"></i></li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Оформление, которое идеально подойдет для вашего праздника <i class="fa fa-smile-o" aria-hidden="true"></i></li>
            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Доставка <i class="fa fa-car" aria-hidden="true"></i></li>
        </ul>

    </div>
    <!-- /Background image -->
@endsection
