@extends('layout')

@section('title')
    Отзывы
@endsection


@section('main_content')
    <h1 class="text-xl-center">Форма добавления отзывов</h1>

    {{--  Если после отправки формы возвращается ошибка, мы возвращаемся на эту страницу и перезагружается страница  --}}
    @if($errors->any()) {{-- Получаем список ошибок в переменную $errors --}}
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif




    <form method="post" action="/review/check">
        @csrf {{-- токен  позволяет легко защитить ваше приложение от атак с подделкой межсайтовых запросов --}}
        <input type="email" name="email" id="email" placeholder="Введите email" class="form-control"/>
        <br>
        <input type="text" name="subject" id="subject" placeholder="Введите отзыв" class="form-control"/>
        <br>
        <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение"></textarea>
        <br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>

    <h1>Все отзывы</h1>
{{--  $all - это ключ-значение из массива NewController   --}}
    @foreach($all as $element)
        <div class="alert alert-warning">
            <h3>{{ $element->subject }}</h3>
        </div>
    @endforeach
@endsection
