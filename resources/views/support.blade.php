@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Служба поддержки</h3>
                </div>  

                <div class="panel-body">
                    @foreach($data as $sup)

                    @if($sup->status == 0)
                    <div class="alert alert-info" role="alert"><a href="{{route('supportId', $sup->id)}}"><b>Обрабатывается</b> {{$sup->name}}</a></div> 
                    @else
                    <div class="alert alert-success" role="alert"><a href="{{route('supportId', $sup->id)}}"><b>Отвечено</b> {{$sup->name}}</a></div> 
                    @endif
                    @endforeach

                    <form method="POST" action="{{ route('support') }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label>Тема обращения</label>                    
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Текст обращения</label> 
                            <textarea name="text" style="height:200px" class="form-control"></textarea>

                        </div>

                        <button type="submit" class="btn btn-primary"> Отправить </button>

                    </form>

                </div>
            </div>  
        </div>
    </div>
</div>


@endsection