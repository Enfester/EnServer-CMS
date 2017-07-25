@extends('layouts.app')

@section('content')

<div class="container" >
    
   
		@if($server)
                
                 <div class="panel panel-default">
                     <div class="panel-heading" >
                    <h2 class="panel-title">Сервер {{ $server->name }}</h2>
                     <p>Здесь можно посмотреть всю информацию про данный сервер</p>
                </div>
                <div class="panel-body" >

                    <p>{!! $server->fulldescript !!}</p>

                </div>
                     <table class="table">
                    <thead>
                        <tr>
                            <th width="20%">Параметр</th>
                            <th width="40%">Значение</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Версия игры</td>
                            <td>{{ $server->version }}</td>

                        </tr>
                        <tr>
                            <td>PvP <span class="tooltip badge-info" data-tooltip="Возможность нанесения игроками урона друг другу">?</span></td>
                            <td>
                            {{ $server->pvp }}
                                <!--?php
                                if ($row['pvp'] == 0) {
                                    echo '<span class="label label-danger">Включено/можно выключить</span>';
                                } elseif ($row['pvp'] == 1) {
                                    echo '<span class="label label-warning">Включено</span>';
                                } else {
                                    echo '<span class="label label-success">Включено/можно выключить</span>';
                                }
                                ?-->
                            </td>
                        </tr>
                        <tr>
                            <td>Площадь карты <span class="tooltip badge-info" data-tooltip="От нулевой координаты. Форма - квадрат.">?</span></td>
                            <td>{{ $server->s }} блоков</td>
                        </tr>
                        <tr>
                            <td >Дата запуска <span class="tooltip badge-info" data-tooltip="Дата когда сервер был впервые открыт">?</span></td>
                            <td>{{ $server->date_start }}</td>
                        </tr>
                        <tr>
                            <td>Последний вайп <span class="tooltip badge-info" data-tooltip="Вайп - удаление карты и всех рессурсов из инвентаря">?</span></td>
                            <td>{{ $server->date_wipe }}</td>
                        </tr>
                    </tbody>
                </table>
                     
                <ul class="list-group">
                    <li class="list-group-item"><h4>Моды</h4></li>
                    {{ $server->mods }}
                    

                </ul>
</div>
                
               


                @else
                <span class="card-title">Сервер не найден!</span>
                
                @endif
            </div>
        </div>
    </div>
   

</div>

@endsection