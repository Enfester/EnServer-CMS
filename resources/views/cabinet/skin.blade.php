@extends('layouts.app')

@section('content')

<div class="container">
	
   		
			
			<!-- Блок персональной информации -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Смена скина и плаща</h3>
				</div>  
				<div class="panel-body">
				<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('skin') }}">
				   
						Скин: <input type="file" name="skin"><br>
						Плащ<input type="file" name="cloak" ><br>
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
					<input type="submit" class="btn btn-primary" value="Сохранить скин">
				 
				  </form>
				
				
			</div>
			</div>
			<!-- //Блок персональной информации -->
		
	
</div>

	
@endsection