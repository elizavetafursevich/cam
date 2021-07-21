@extends('layouts.app')

@section('title-block')
    C&M: Торты и десерты
@endsection
@section('content')
    <style>
        body {
            background-color: #f1f1f1;
            padding: 20px;
        }
    </style>
    <div id="menu">
        <div class="container pt-2 mt-5">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Бисквитные торты (45 BYN /кг)</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name">Наполеон</div>
                            <div class="menu-item-description">
                                Коржи из классического слоеного теста, заварной крем. От 2 кг
                                (возможно изготовление от 1 кг — 60 BYN /кг с доплатой за декор)
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Медовик</div>
                            <div class="menu-item-description">
                                Медовые коржи, сметанный крем Пломбир (заварной), карамельная пропитка, соленая
                                карамель; орехи, фрукты, ягоды — по желанию. От 2 кг (возможно изготовление от 1 кг — 60
                                BYN /кг с
                                доплатой за декор).
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Шоколадный медовик</div>
                            <div class="menu-item-description">
                                Медовые шоколадные коржи, сметанный крем со сливками; орехи, фрукты, ягоды —
                                по желанию. От 2 кг (возможно изготовление от 1 кг — 60 BYN /кг с доплатой за декор).
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Медовый тарт в виде цифр, букв, фигур и т.д.</div>
                            <div class="menu-item-description">
                                Медовые коржи, крем-чиз, соленая карамель, шоколад,
                                ягоды, фрукты — по желанию. От 2 кг (возможно изготовление от 1 кг — 60 BYN /кг).
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Морковный торт</div>
                            <div class="menu-item-description">
                                Морковно-ореховый бисквит, морковный конфитюр, крем-чиз. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Красный бархат</div>
                            <div class="menu-item-description">
                                Масляный бисквит, крем-чиз, по желанию — фруктовые прослойки. От 2 кг (возможно
                                изготовление от 1 кг — 60 BYN /кг с доплатой за декор).
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Птичье молоко</div>
                            <div class="menu-item-description">
                                Ванильный бисквит, нежное суфле, шоколад, по желанию, можно добавить орешки.
                                Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Киевский</div>
                            <div class="menu-item-description">
                                Белково-миндальный корж, крем Шарлотт, шоколадный Шарлотт. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Бисквитные торты (50 BYN /кг)</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name">Молочная девочка</div>
                            <div class="menu-item-description">
                                Коржи на сгущенном молоке, крем на натуральных сливках с фруктовым/ягодным
                                пюре, крем творожный с маскарпоне, консервированные либо термически обработанные фрукты
                                и ягоды.
                                Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Шоколадно-карамельный торт</div>
                            <div class="menu-item-description">
                                Шоколадный бисквит, крем-чиз, карамельное кремю, орехи и чернослив —
                                по желанию. Минимальный заказ — 2,5 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Черный лес</div>
                            <div class="menu-item-description">
                                Бисквит шоколадный, креме шоколадное, вишня, крем Черный лес на основе сливок,
                                пропитка — сироп с вишневым соком и алкоголе. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Взрывной цитрус</div>
                            <div class="menu-item-description">
                                Ванильный бисквит, апельсиновое желе, лимонный крем, крем творожный с
                                маскарпоне. Минимальный заказ — 2,5 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Банан в шоколаде</div>
                            <div class="menu-item-description">
                                Шоколадный бисквит, банан в апельсиновой карамели, карамельная пропитка,
                                шоколадный крем, крем-чиз. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Бисквитные торты (55 BYN /кг)</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name">Ванильно-клубничный торт</div>
                            <div class="menu-item-description">
                                Ванильный бисквит, пропитка из клубничного сиропа, чизкейк на основе белого шоколада и
                                маскарпоне с
                                клубникой, крем-чиз. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Черничный торт</div>
                            <div class="menu-item-description">
                                Коржи из классического бисквита, пропитка из черничного сиропа, чизкейк на основе
                                белого шоколада и маскарпоне, крем-чиз. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Сникерс</div>
                            <div class="menu-item-description">
                                Шоколадный бисквит, арахис в карамели, безе, шоколадный крем. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Пряная груша</div>
                            <div class="menu-item-description">
                                Бисквит с рикоттой и глинтвейном на белом вине, карамелизованная груша, апельсиновый
                                крем, пряный крем. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Морковный с чизкейком</div>
                            <div class="menu-item-description">
                                Морковный бисквит с грецким орехом, карамелизованная груша, карамель,
                                апельсиновый курд (заварной крем на апельсиновом соке), крем-чиз, запеченный чизкейк.
                                Минимальный заказ
                                — 2,5 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">OreoCake</div>
                            <div class="menu-item-description">
                                Насыщенный шоколадный бисквит, шоколадная пропитка, сырный крем с кусочками печенья
                                Oreo,
                                чизкейк с кусочками печенья Oreo. Минимальный заказ — 2,5 кг.
                            </div>
                        </div>

                        <div class="menu-item">
                            <div class="menu-item-name">Карамельная девочка</div>
                            <div class="menu-item-description">
                                Коржи на мягкой карамели, карамельная пропитка, творожно-карамельный крем,
                                орехи в мягкой карамели. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Трюфель</div>
                            <div class="menu-item-description">
                                Шоколадно-кофейный бисквит, кофейный ликер, ганаш на темном шоколаде. От 2 кг (возможно
                                изготовление от 1 кг — 60 руб./кг с доплатой за декор).
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Вишневый с чизкейком</div>
                            <div class="menu-item-description">
                                Шоколадный бисквит, вишневая пропитка, вишня в ликере, чизкейк классический,
                                шоколадный крем. Минимальный заказ — 2,5 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Трио: апельсин, банан, шоколад</div>
                            <div class="menu-item-description">
                                Ванильный бисквит, банан в апельсиновой карамели, апельсиновый курд,
                                шоколадный крем на маскарпоне.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Бисквитные торты (60 BYN /кг)</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name">Три шоколада</div>
                            <div class="menu-item-description">
                                Корж на темном шоколаде без муки, мусс на темном, молочном и белом шоколаде. Минимальный
                                заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Эстерхази</div>
                            <div class="menu-item-description">
                                Коржи на миндальной муке, заварной крем с ореховой пастой). Минимальный заказ — 2,5 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">3D-торты (автомобили, антигравитация и т.д.)</div>
                            <div class="menu-item-description">
                                *Подходят не все начинки.
                            </div>
                        </div>
                    </div>
                    <div class="menu-section">
                        <h2 class="menu-section-title">Капкейки</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name">Кекс</div>
                            <div class="menu-item-description">
                                Ванильный / Шоколадный / Кофейно-ореховый / Банановый / Морковный / Карамельный
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Шапочка</div>
                            <div class="menu-item-description">
                                Крем-чиз / Масляный (цветочные композиции в дополнение к шапочке
                                из другого крема) / Меренга (белковый) / Шоколадный (на основе темного либо белого
                                шоколада, можно
                                с добавлением фруктового пюре) / Пломбир (заварной на сметане)
                            </div>
                        </div>
                        <div class="menu-item wow bounceInRight" data-wow-offset="100">
                            <div class="menu-item-name">Начинка</div>
                            <div class="menu-item-description">
                                Шоколад / Конфитюр из фруктов или ягод / Мягкая карамель / Курд
                                (заварной крем на фруктовом соке) / Вишня в коньяке / Орехи
                            </div>
                        </div>
                        <div class="menu-item wow bounceInRight">
                            <div class="menu-item-name">Декор</div>
                            <div class="menu-item-description">Таблички / Ягоды / Орехи / Конфеты / Мастичные фигурки /
                                Другое
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
                        <h2 class="menu-section-title">Муссовые торты (60 BYN /кг)</h2>
                        <hr>
                        <div class="menu-item">
                            <div class="menu-item-name">Торт «Киви-клубника»</div>
                            <div class="menu-item-description">
                                Апельсиново-шпинатный бисквит, клубничный трюфель, сливочно-шоколадный мусс,
                                кули из киви, клубничный крем шантильи, шоколадный гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Шоколадно-кофейный торт</div>
                            <div class="menu-item-description">
                                Шоколадно-кофейный бисквит, трюфель Черный кофе, шоколадный мусс.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Ягодно-лавандовый тарт</div>
                            <div class="menu-item-description">
                                Тарт из песочного теста, ягодный террин, ягодный мусс, лавандовый крем,
                                шоколадный гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Евромедовик</div>
                            <div class="menu-item-description">
                                Карамельные либо медовые коржи, карамель, ганаш с орехами, карамельное кремю, шоколадный
                                гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Мятный торт</div>
                            <div class="menu-item-description">
                                Лаймово-мятный бисквит, смородиновый джем, смородиновый мусс, мятный мусс, шоколадный
                                гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Торт «Цитрус»</div>
                            <div class="menu-item-description">
                                Шоколадно-злаковый крустиллаж, грейпфрутовый террин, лимонный курд, лимонно-ванильный
                                крем Муслин, шоколадный гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Яблочно-миндальный (грушево-миндальный) этюд</div>
                            <div class="menu-item-description">
                                Шоколадно-кофейный бисквит, яблочный либо грушевый
                                трюфель, миндально-карамельный крустиллаж, ванильный крем Муслин, шоколадный гляссаж
                                либо велюр.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <div class="menu-section">
{{--                        <h2 class="menu-section-title">Муссовые торты (60 BYN /кг)</h2>--}}
{{--                        <hr>--}}
                        <div class="menu-item" style="padding-top: 45px">
                            <div class="menu-item-name">Творожно-вишневый десерт</div>
                            <div class="menu-item-description">
                                Миндальный бисквит Джоконда, вишневое компоте, сливочно-творожный крем,
                                шоколадный гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Шоколадно-вишневый торт</div>
                            <div class="menu-item-description">
                                Шоколадно-кофейный бисквит, миндальный бисквит Джоконда, карамелизованная
                                вишня в коньяке, шоколадный кранч, шоколадный ганаш, английский заварной крем, белый
                                мусс, шоколадный
                                мусс, шоколадный гляссаж либо велюр. Минимальный заказ — 2 кг.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Торт «Три шоколада»</div>
                            <div class="menu-item-description">
                                Шоколадный бисквит Брауни без муки, три мусса на основе сливочного сыра,
                                белого, молочного и темного шоколада, шоколадный гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Торт "Малиновый рай"</div>
                            <div class="menu-item-description">
                                Бисквит на миндальной муке, малиновое конфи, малиновое креме, малиновый мусс
                                на итальянской меренге, шоколадный гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name">Грейпфрутовый экстаз</div>
                            <div class="menu-item-description">
                                Фисташковый бисквит, компоте из клюквы с розмарином и кардамоном,
                                грейпфрутовый мусс на итальянской меренге, гляссаж либо велюр.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name"> Пряный апельсин</div>
                            <div class="menu-item-description">
                                Бисквит Мадлен с корицей и грецким орехом, пряное рождественское желе с
                                мандаринами, апельсинами и цукатами, мандариновое креме, сливочный мусс на итальянской
                                меренге.
                            </div>
                        </div>
                        <div class="menu-item">
                            <div class="menu-item-name"> Рождественский мандарин</div>
                            <div class="menu-item-description">
                                Шоколадный бисквит на миндальной муке, цитрусовое конфи, соленая карамель,
                                мандариновое кремю, шоколадный мусс. Декор: зеркальная глазурь и шоколад.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection
