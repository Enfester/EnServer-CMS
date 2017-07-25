@extends('layouts.app')

@section('content')

<div class="container">
<h4>Скачать лаунчер</h4>
      <p>Ты не сможешь играть если у тебя нет аккаунта! <a href="{{route('register')}}">Быстрая регестрация за 5 секунд</a></p>
      <p>Если у тебя не установлена Java, то тебе <a href="//www.java.com/ru/">сюда</a></p>
      <p><a href="/laun/Launch.exe">Скачать версию лаунчера для Windows</a></p>
      <p><a href="/laun/Launch.jar">Скачать версию лаунчера для всех OS</a></p>

</div>
      
@endsection