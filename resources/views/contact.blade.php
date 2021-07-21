@extends('layouts.app')

@section('title-block')
    C&M: Контакты
@endsection

@section('content')
    <style>
        body {
            background-color: #f1f1f1;
            padding: 20px;
        }
    </style>
    <style>
        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

    </style>
    <div class="contact-block">
        <div class="container pb-4">
            <h2 class="pt-2">Обратная связь</h2>
            <hr>
            <form action={{ route('contact-form') }} method="post">
                @csrf
                <label for="name">Имя</label>
                <input type="text" id="name" name="name" placeholder="Введите имя">

                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Введите email">

                <label for="phone">Номер телефона</label>
                <input type="text" id="phone" name="phone" placeholder="Введите номер телефона">

                <label for="subject">Тема</label>
                <input type="text" id="subject" name="subject" placeholder="Введите тему сообщения">

                <label for="message">Сообщение</label>
                <textarea id="message" name="message" placeholder="Сообщение" style="height:200px"></textarea>
                <button type="submit" class="btn btn-dark">Отправить</button>
            </form>
        </div>
    </div>

@endsection
