@extends('layouts.app')

@section('title-block')
    C&M: Админ панель
@endsection

@section('content')
    <div class="container py-4">
        @foreach($data as $el)
            <h2>{{ $el->subject }}</h2>
            <div class="alert alert-info bg-light">
                <div style="display: flex;justify-content: space-between">
                    <h4>{{ $el->name }}</h4>
                    <p><small>{{ $el->created_at }}</small></p>
                </div>
                <p style="margin-bottom: 0">{{ $el->message }}</p>

                <div style="text-align: end;">
                    <small><i><p style="margin-bottom: 0">{{ $el->email }}</p></i></small>
                    <small><i><p style="margin-bottom: 0">{{ $el->phone }}</p></i></small>
                </div>
            </div>

        @endforeach
    </div>






    {{--    <div class="container py-4" style="padding: 100px 200px; margin-top: 100px;margin-bottom: 100px; border: 1px solid black; height: 500px">--}}
    {{--        <h3 class="py-4" style="margin-top: 40px">Вход в админ панель</h3>--}}
    {{--        <hr>--}}
    {{--        <form class="pb-4">--}}
    {{--            <div class="form-group">--}}
    {{--                <label for="exampleInputEmail1">Логин</label>--}}
    {{--                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите логин">--}}
    {{--            </div>--}}
    {{--            <div class="form-group">--}}
    {{--                <label for="exampleInputPassword1">Пароль</label>--}}
    {{--                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">--}}
    {{--            </div>--}}
    {{--            <button type="submit" class="btn btn-dark">Отправить</button>--}}
    {{--        </form>--}}
    {{--    </div>--}}

@endsection
