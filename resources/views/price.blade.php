@extends('layouts.app')

@section('title-block')
    C&M: Цены
@endsection
@section('content')
    <div class="container">
            <div class="price-block">
                <h2 class="pt-2">Мой прайс</h2>
                <hr>
                <p>Милые цены для милых заказчиков!</p>
                <div class="row mb-0">
                    <div class="columns">
                        <ul class="price">
                            <li class="header">Торты</li>
                            <li>
                                <b>Торты бисквитные</b> <br> от 45 до 60 BYN /кг <br>
                                <em style="font-size: 12px;">
                                    Цена зависит от начинки и оформления. <br>
                                    Минимальный заказ: 2 кг — кремовый, 2.5 кг — мастичный
                                </em>
                            </li>
                            <li>
                                <b>Сложные 3D-торты</b> <br> 60 BYN /кг <br>
                                <em style="font-size: 12px;">
                                    Минимальный заказ: 4 кг
                                </em>
                            </li>
                            <li>
                                <b>Торты муссовые</b> <br> 60 BYN /кг <br>
                                <em style="font-size: 12px;">
                                    Минимальный заказ: 1 кг
                                </em>
                            </li>
                            <li><b>Чизкейки</b> <br> 50 BYN /кг</li>
                        </ul>
                    </div>

                    <div class="columns">
                        <ul class="price">
                            <li class="header">Десерты</li>
                            <li>
                                <b>Капкейки</b> <br> 6 BYN /шт <br>
                                <em style="font-size: 12px;">
                                    Минимальный заказ: 6 шт
                                </em>
                            </li>
                            <li>
                                <b>Муссовые пирожные</b> <br> от 7 BYN /шт <br>
                                <em style="font-size: 12px;">
                                    Минимальный заказ: 4 шт
                                </em>
                            </li>
                            <li>
                                <b>Эклеры</b> <br> от 2 до 3 BYN /шт <br>
                                <em style="font-size: 12px;">
                                    Цена зависит от начинки и оформления. <br>
                                    Минимальный заказ: 10 шт
                                </em>
                            </li>
                            <li>
                                <b>Макарон</b> <br> 3.5 BYN /шт <br>
                                <em style="font-size: 12px;">
                                    Минимальный заказ: 4 шт
                                </em>
                            </li>
                            <li><b>Зефир</b> <br> 1.5 BYN /шт <br>
                                <em style="font-size: 12px;">
                                    Минимальный заказ: 10 шт
                                </em>
                            </li>
                            <li><b>Трайфлы</b> <br> 7 BYN /шт</li>
                        </ul>
                    </div>
                    <div class="columns">
                        <ul class="price">
                            <li class="header">Другое</li>
                            <li><b>Леденцы</b> <br> 0.5 BYN /шт</li>
                            <li><b>Меренга на палочке</b> <br> 2.5 BYN /шт</li>
                            <li><b>Безе в виде цветка</b> <br> 0.5 BYN /шт</li>
                            <li><b>Кейк-попсы</b> <br> 3 BYN /шт</li>
                            <li>
                                <b>Имбирные пряники</b> <br> от 4 до 10 BYN /шт <br>
                                <em style="font-size: 12px;">
                                    Цена зависит оформления.
                                </em>
                            </li>
                        </ul>
                    </div>
                </div>
                <p>Доставка по Минску: 10 BYN</p>
            </div>
    </div>
    <style>
        body {
            background-color: #f1f1f1;
            padding: 20px;
        }
    </style>
@endsection
