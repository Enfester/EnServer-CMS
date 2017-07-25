@extends('layouts.app')

@section('content')


<div class="container">
	<div class="row">
   
		<div class="col-md-6">    	
			<!-- Блок голосования -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Голосуй и получай призы</h3>
				</div>
				
				<table class="table">
					<tr>
						<td>Количество голосов:</td>						
					</tr> 
					<tr>
						<td>McTop</td>
						<td>0</td>
					</tr>   
					<tr>
						<td>McRate</td>
						<td>0</td>
					</tr>      
					<tr>
						<td>TopCraft</td>
						<td>0</td>
					</tr> 
				</table>
				
				<div class="panel-body">
					Чтобы получить сундучок удачи, ты должен быть на одном из серверов!
					<a href="#" class="btn btn-warning">Получить сундучок</a>
					или
					<a href="#" class="btn btn-success">Обменять на 1 монету сайта</a>
				</div>
			</div>		
			<!-- //Блок голосования -->
		</div>
		<div class="col-md-6">    	
			<!-- Блок приглашения игроков -->
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Приглашай друзей и получай призы</h3>
				</div>
				<div class="panel-body">				
				Реферальная ссылка: <b>{{route('referal',['login'=>Auth::user()->login])}}</b><br>
					Что бы получить приз, твой друг должен зарегистрироваться перейдя по этой ссылке.
					Но просто зарегистрироваться мало. Твой друг должен играть на наших серверах не менее 72 часов, после чего ты сможешь получить приз в этой таблице.
				</div>
				<table class="table">
					<tr>
						<td>Игроки которых ты пригласил:</td>						
					</tr> 				
				</table>
				
				
			</div>		
			<!-- //Блок приглашения игроков -->
		</div>
		
	</div>
</div>

@endsection