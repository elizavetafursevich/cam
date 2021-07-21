<div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #1a202c;">
        <div class="container-fluid">
            <div class="collapse navbar-collapse d-flex justify-content-between">
                <h5 class="font-weight-normal mt-2">
                    <a class="text-light" style="text-decoration: none;" href="{{ route('home') }}">Мастерская кондитера</a>
                </h5>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-4">
                        <a class="nav-link" aria-current="page" href="{{route('about')}}">Обо мне</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="{{route('deserts')}}">Торты и десерты</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="{{route('gallery')}}">Фотогалерея</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="{{route('price')}}">Цены</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="{{route('contact')}}">Контакты</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /Navbar -->
</div>
