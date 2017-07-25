@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-4">    	
            <!-- Блок скина -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Страница игрока {{ $profile->login  }}</h3>
                </div>
                <div class="panel-body">
                    <script src="{{ asset('js/three.min.js')}}" type="text/javascript"></script>
                    <canvas id="canvas" width="64" height="64" ></canvas>
                    <div id="model"></div>
                    <script src="{{ asset('js/3dskin.js')}}" type="text/javascript"></script>
                    <!--?php
                                                           if($_GET['user'] != $_SESSION['login_user']){
                   if ($isfrend)
                       echo '<input name="delfrend" type="submit"  value="Удалить из друзей"class="btn waves-effect red">';
                   else
                       echo '<input name="addfrend" type="submit" value="Добавить в друзья" class="btn waves-effect green">';
                                                           }
                   ?>
               </form -->
                </div>
            </div>		
            <!-- //Блок скина -->			
        </div>


        <div class="col-md-4">    	
            <!-- Блок скина -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Персональная информация игрока</h3>
                </div>

                <table class="table">
                    <tr>
                        <td>Имя</td>
                        <td>{{$profile->name}}</td>
                    </tr>    <tr>
                        <td>Фамилия</td>
                        <td>{{$profile->surname}}</td>
                    </tr>      
                    <tr>
                        <td>Возраст</td>
                        <td>{{$profile->age}}</td>
                    </tr>  <tr>
                        <td>Skype</td>
                        <td>{{$profile->skype}}</td>
                    </tr>  <tr>
                        <td>Страница в Вконтакте</td>
                        <td>{{$profile->vk}}</td>
                    </tr>
                </table>


            </div>		
            <!-- //Блок скина -->			

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
        </div>
        <!-- //Блок статистики в игре -->


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