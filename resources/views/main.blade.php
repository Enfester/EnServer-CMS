@extends('layouts.app')

@section('content')


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron" style="background-image:url('{{ asset('images/samp.jpg') }}'); background-attachment: fixed;background-size: 100% 100%;">
    <div class="container">
        <h1>{{ config('app.name', 'Laravel') }} Minecraft</h1>
        <p>Попробуй поиграть в minecraft на наших серверах</p>
        <p><a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Начать играть в Minecraft &raquo;</a></p>
    </div>
</div>


<div class="container">
    <!-- Example row of columns -->
    <div class="row">
        @foreach($servers as $server)
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-image: url('{{ asset($server->icon) }} '); background-size: 100%;height: 140px;color: white;text-shadow: -0   -1px 0   #000000,     0   -1px 0   #000000,    -0    1px 0   #000000,     0    1px 0   #000000,    -1px -0   0   #000000,     1px -0   0   #000000,    -1px  0   0   #000000,     1px  0   0   #000000,    -1px -1px 0   #000000,     1px -1px 0   #000000,    -1px  1px 0   #000000,     1px  1px 0   #000000,    -1px -1px 0   #000000,     1px -1px 0   #000000,    -1px  1px 0   #000000,     1px  1px 0   #000000;">
                    <h2 class="panel-title"> {{ $server->name }}</h2>
                </div>
                <div class="panel-body" style="height: 150px;">

                    <p>{{ $server->descript }}</p>

                </div>

                <div class="panel-body" >
                      {{ $server->online_cur }} из   {{ $server->online_max }} 
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{ $server->online_cur }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $server->online_cur }}%;">
                          
                        </div>
                    </div>

                    <p><a class="btn btn-default" href="{{ route('serverId',['id'=>$server->id]) }}" role="button">Подробнее &raquo;</a></p>
                </div>
            </div>


        </div>
        @endforeach
    </div>

    <hr>

</div>




@endsection