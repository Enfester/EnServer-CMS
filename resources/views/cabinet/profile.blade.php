@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-4">    	
            <!-- Блок скина -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{Auth::user()->login}}</h3>
                </div>
                <div class="panel-body">

                    <script src="{{ asset('js/three.min.js')}}" type="text/javascript"></script>
                    <canvas id="canvas" width="64" height="64" ></canvas>
                    <div id="model"></div>
                    <script src="{{ asset('js/3dskin.js')}}" type="text/javascript"></script>


                    @if(Auth::user()->hd_skin)
                    <p class="card-text">@lang('cabinet.hd_skin_true')</p>
                    @else
                    <p class="card-text">@lang('cabinet.hd_skin_false') <a href="{{route('donate')}}">@lang('cabinet.hd_skin_donate')</a></p>
                    @endif
                    <a class="btn btn-primary" href="{{route('skin')}}">
                        Сменить скин
                    </a>


                </div>
            </div>		
            <!-- //Блок скина -->
            @if(Auth::user()->referal)
            <div class="alert alert-success">
                Тебя пригласил игрок <a href="{{route('user', ['login'=> Auth::user()->referal])}}">{{ Auth::user()->referal }}</a>
            </div>
            @endif

            <!-- Блок статистики в игре -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Игровая статистика</h3>
                </div>


                <table class="table">
                    <tr>
                        <td>Статус на серверах</td>
                        <td>Offline</td>
                    </tr>    <tr>
                        <td>Последний раз заходил</td>
                        <td>Ниразу не играл</td>
                    </tr>  

                    <tr>
                        <td>Часов сыграл:</td>
                        <td>0ч</td>
                    </tr> 
                </table>

            </div>
            <!-- //Блок статистики в игре -->
        </div>
        <div class="col-md-4">		
            <!-- Блок персональной информации -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Персональная информация</h3>
                </div>  
                <table class="table">
                    <tr>
                        <td>Имя</td>
                        <td>{{Auth::user()->name}}</td>
                    </tr>    <tr>
                        <td>Фамилия</td>
                        <td>{{Auth::user()->surname}}</td>
                    </tr>      
                    <tr>
                        <td>Возраст</td>
                        <td>{{Auth::user()->age}}</td>
                    </tr>  <tr>
                        <td>Skype</td>
                        <td>{{Auth::user()->skype}}</td>
                    </tr>  <tr>
                        <td>Страница в Вконтакте</td>
                        <td>{{Auth::user()->vk}}</td>
                    </tr>
                </table>
                <div class="panel-body">
                    <a href="{{route('settingsProfile')}}" class="btn btn-primary">Изменить</a>
                    <a href="{{route('settingsProfile')}}" class="btn btn-danger">Сменить пароль</a>
                </div>
            </div>
            <!-- //Блок персональной информации -->

        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Информация серверов</h3>
                </div>
                <table class="table">
                    <tr>
                        <td>Аккаунт</td>
                        <td>Игрок</td>
                    </tr>    
                    <tr>
                        <td>Клан</td>
                        <td>нет</td>
                    </tr>  

                    <tr>
                        <td>Баланс</td>
                        <td>1200</td>
                    </tr> 
                </table>

            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Активность на сайте</h3>
                </div>
                <table class="table">
                    <tr>
                        <td>Общее число голосов</td>
                        <td>0</td>
                    </tr>    
                    <tr>
                        <td>Прикласил игроков</td>
                        <td>нет</td>
                    </tr> 
                </table>

            </div>
        </div>


    </div>
</div>


@endsection