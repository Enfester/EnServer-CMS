@extends('layouts.app')

@section('content')

<div class="container">
 <div class="row">
        <div class="col-md-8 col-md-offset-2">
    <!-- Блок персональной информации -->
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Редактирование персональнальной информации</h3>
        </div>  

        <div class="panel-body">

            <form method="POST" action="{{ route('saveSettings') }}">

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label>Имя</label>                    
                    <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}">
                </div>
                <div class="form-group">
                    <label>Фамилия	</label>   
                    <input type="text" class="form-control" name="surname" value="{{Auth::user()->surname}}">
                </div>
                <div class="form-group">
                   <label> Возраст</label>   
                    <input type="integer" class="form-control" name="age" value="{{Auth::user()->age}}">
                </div>
                <div class="form-group">
                    <label>Skype	</label>   
                    <input type="text" class="form-control" name="skype" value="{{Auth::user()->skype}}">
                </div>
                <div class="form-group">
                    <label>Страница в Вконтакте</label>   
                    <input type="text" class="form-control" name="vk" value="{{Auth::user()->vk}}">   
                </div>


                <button type="submit" class="btn btn-primary"> Сохранить </button>

            </form>

        </div>
    </div>
    <!-- //Блок персональной информации -->

</div>
</div>
</div>


@endsection