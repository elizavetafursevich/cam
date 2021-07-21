@extends('layouts.app')

@section('title-block')
    C&M: Фотогалерея
@endsection
@section('content')

    <style>
        body {
            background-color: #f1f1f1;
            padding: 20px;
        }
    </style>

    <div class="main">
        <div class="container">
            <h2 class="pt-2">Фотогалерея</h2>
            <hr>
            <div id="myBtnContainer" style="display: flex; justify-content: space-between">
                <div>
                    <button class="btn btn-dark" onclick="filterSelection('all')">Все</button>
                    <button class="btn btn-dark" onclick="filterSelection('cakes')">Торты</button>
                    <button class="btn btn-dark" onclick="filterSelection('deserts')">Десерты</button>
                    <button class="btn btn-dark" onclick="filterSelection('else')">Другое</button>
                </div>
                <div>
                    <button class="btn btn-dark" onclick="window.open('https://www.instagram.com/victoriafursevich/', '_blank')">Ещё больше в Instagram</button>
                </div>
            </div>
            <div class="row">
                <?php
                $dir = 'images/cakes/'; // Папка с изображениями
                $files = scandir($dir); // Берём всё содержимое директории
                for ($i = 2; $i < count($files); $i++) { // Перебираем все файлы
                    echo "<div class='column cakes'>";
                    echo "<div class='content'>";
                    $path = $dir . $files[$i]; // Получаем путь к картинке
                    echo "<img src='$path' alt='' width='100%' />"; // Вывод превью картинки
                    echo "</div >";
                    echo "</div>";
                }
                ?>
                <?php
                $dir = 'images/deserts/'; // Папка с изображениями
                $files = scandir($dir); // Берём всё содержимое директории
                for ($i = 2; $i < count($files); $i++) { // Перебираем все файлы
                    echo "<div class='column deserts'>";
                    echo "<div class='content'>";
                    $path = $dir . $files[$i]; // Получаем путь к картинке
                    echo "<img src='$path' alt='' width='100%' />"; // Вывод превью картинки
                    echo "</div >";
                    echo "</div>";
                }
                ?>
                <?php
                $dir = 'images/else/'; // Папка с изображениями
                $files = scandir($dir); // Берём всё содержимое директории
                for ($i = 2; $i < count($files); $i++) { // Перебираем все файлы
                    echo "<div class='column else'>";
                    echo "<div class='content'>";
                    $path = $dir . $files[$i]; // Получаем путь к картинке
                    echo "<img src='$path' alt='' width='100%' />"; // Вывод превью картинки
                    echo "</div >";
                    echo "</div>";
                }
                ?>
            </div>
            <div class="pt-2 pb-4">
                <button class="btn btn-dark" onclick="window.open('https://www.instagram.com/victoriafursevich/', '_blank')">Ещё больше в Instagram</button>
            </div>
        </div>

    </div>

    <script>
        // Фильтр изображений

        filterSelection("all")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "all") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }


        // Add active class to the current button (highlight it)
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function () {
                var current = document.getElementsByClassName("active");
                current[0].className = current[0].className.replace(" active", "");
                this.className += " active";
            });
        }
    </script>


@endsection






<!-- Portfolio Gallery Grid -->
{{--            <div class="row">--}}
{{--                <div class="column cakes">--}}
{{--                    <div class="content">--}}
{{--                        <img src="{{ asset('images/gallery/1.jpg' )}}" alt="deserts"--}}
{{--                             style="width:100%;">--}}
{{--                                                <h4>Mountains</h4>--}}
{{--                                                <p>Lorem ipsum dolor..</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="column cakes">--}}
{{--                    <div class="content">--}}
{{--                        <img src="{{ asset('images/gallery/2.jpg' )}}" alt="cakes"--}}
{{--                             style="width:100%;">--}}
{{--                                                <h4>Lights</h4>--}}
{{--                                                <p>Lorem ipsum dolor..</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="column cakes">--}}
{{--                    <div class="content">--}}
{{--                        <img src="{{ asset('images/gallery/3.jpg' )}}" alt="else"--}}
{{--                             style="width:100%;">--}}
{{--                                                <h4>Forest</h4>--}}
{{--                                                <p>Lorem ipsum dolor..</p>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="column cakes">--}}
{{--                    <div class="content">--}}
{{--                        <img src="{{ asset('images/gallery/02.jpg' )}}" alt=""--}}
{{--                             style="width:100%;">--}}
{{--                                                <h4>Retro</h4>--}}
{{--                                                <p>Lorem ipsum dolor..</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="column cakes">--}}
{{--                    <div class="content">--}}
{{--                        <img src="{{ asset('images/gallery/03.jpg' )}}" alt=""--}}
{{--                             style="width:100%;">--}}
{{--                                                <h4>Fast</h4>--}}
{{--                                                <p>Lorem ipsum dolor..</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="column cakes">--}}
{{--                    <div class="content">--}}
{{--                        <img src="{{ asset('images/gallery/05.jpg' )}}" alt=""--}}
{{--                             style="width:100%;">--}}
{{--                                                <h4>Classic</h4>--}}
{{--                                                <p>Lorem ipsum dolor..</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <!-- END GRID -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
