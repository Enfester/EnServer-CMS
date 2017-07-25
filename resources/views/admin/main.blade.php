@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Игроки</h3>
                </div>  

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Ник нейм</th>
                                <th>Возраст</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td><a href="{{route('user',$user->id)}}">{{$user->login}}</a></td>
                                <td>{{$user->age}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>


                </div>
            </div>  
        </div>

        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Служба поддержки</h3>
                </div>  

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Тема</th>
                                <th>От кого</th>
                                <th>Статус</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($supports as $support)
                            <tr>
                                <td>{{$support->id}}</td>
                                <td><a href="#">{{$support->name}}</a></td>
                                <td>{{$support->user_id}}</td>
                                @if($support->status)
                                <td>Прочитано</td>
                                @else
                                <td>Ожидает</td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
        <div class="col-md-4">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Сервера</h3>
                </div>  

                <div class="panel-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Имя</th>
                                <th>Онлайн</th>
                                <th>Нагрузка</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($servers as $server)
                            <tr>
                                <td>{{$server->id}}</td>
                                <td><a href="#">{{$server->name}}</a></td>
                                <td>{{$server->online_cur}}/{{$server->online_max}}</td>
                                <td>В разработке</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>
    </div>
</div>


@endsection