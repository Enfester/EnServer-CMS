@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">{{$data->name}} </h3>
                </div>  

                <div class="panel-body">
                    {{$data->text}} 
                    <hr>
                    <a href="{{route('support')}}" class="btn btn-primary"> Назад </a>
                </div>
            </div>  
        </div>
    </div>
</div>


@endsection