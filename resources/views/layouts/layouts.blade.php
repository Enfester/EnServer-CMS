<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <link rel="shortcut icon" href="/img/logo.png"/>

        <title>{{ $title }} - Enfester игровые сервера Minecraft с модами.</title>
        <meta name="description" content="- Это лучшие игровые сервера Minecraft. Industrial сервер, RPG сервер, Magic сервер. Уникальные сервера. Играть онлайн в майнкрафт. Скачать майнкрафт бесплатно без регистрации."/>
        <meta name="keywords" content="infestor,infester,инфестер,инфестор,industrial, индастриал,индустриал, лучший,играть,Half-Life, RUST, SAMP, CS 1.6, Enfester, енфестер, игровой, портал, samp,sa-mp,gta,sa,самп,cs,минекрафт, майнкрафт, minecraft,сервера, сервер, server, Дай, волю, фантазии"/>
        <meta name="owner" content="antivirus1221@ya.ru"/>
        <meta name="author" content="Samar"/>
        <meta charset="utf-8">
        <meta http-equiv="content-language" content="ru"/>
        <meta name="robots" content="index,follow"/>
        <meta name="revisit-after" content="1 days"/>
        <meta name='yandex-verification' content='4b7abc2a5ea42ae5' />
        <meta name="google-site-verification" content="xqF6INHv7AoOvR2dR79X4VMoJnMLcWo2HVJ8cLH9CWs" />

        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">       
        <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="{{ asset('css/animate.css') }}"  />
        <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}"  />
        <!--Let browser know website is optimized for mobile-->
        <!meta name="viewport" content="width=device-width, initial-scale=1.0"/>        



    </head>
    <body style="background-image: url('{{ asset('images/bg.jpg') }}')">

        <script type="text/javascript" src="{{ asset('js/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
     
     
     
     <ul id="slide-out" class="side-nav">
  
	@if (!Auth::guest())

		<li>
		<div class="userView" style="height: 250px">
			<a href="/profile/?skin"><div class="background">
				<img src="">
	        </div>
			</a>
	    </div>
		</li>
		
	    <li><a href="{{ route('profile') }}">Моя страница</a></li>
	    <li><a href="{{ route('bonus') }}">Мои бонусы</a></li>
	    <li><a href="/profile/?donate">Услуги</a></li>
	    <li><a href="/profile/?frends">Друзья</a></li>
		
		<li><div class="divider"></div></li>
	    <li><a href="/support/">Написать в службу поддержки</a></li>
	    <li><a href="/profile/?settings">Настройки</a></li>
	    <li><a href="/profile/?skin">Сменить скин</a></li>
		
	    <li><div class="divider"></div></li>
	    
	    
	    <form action="{{ route('logout') }}" method="POST" id="logout">
			<input type="hidden" name="logout">
			<li><a href='#' onclick="document.getElementById('logout').submit()" class="waves-effect">Выйти</a></li>
	    </form>
	@endif

</ul>



<nav>
    <div class="nav-wrapper light-green darken-3">
        <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li class="waves-effect"><a href="/">Главная</a></li>
            <li class="waves-effect"><a class="modal-trigger" href="#launcher">Скачать лаунчер</a></li>
            <li class="waves-effect"><a href="/players/">Рейтинг игроков</a></li>
            <li class="waves-effect"><a href="/forum/">Форум</a></li>
			<li class="waves-effect"><a href="/rules/">Правила</a></li>
			<li class="waves-effect"><a href="/profile/?donate">Платные услуги</a></li>
			<li class="waves-effect"><a href="/profile/?bonus">Бесплатные призы</a></li>
        </ul>
        <ul class="right hide-on-med-and-down">
            <li><a class="fb" href="//vk.com/enfester"></a></li>

 	@if (Auth::guest())
 		<li style="color: white;"><a href="{{ route('register') }}">Регистрация </a></li>
 		<li style="color: white;"><a href="{{ route('login') }}">Вход </a></li>
 	@else
 		<li style="color: white;"><a href="#" data-activates="slide-out" class="cabinet">Личный кабинет {{ Auth::user()->name }}</a></li>
 	@endif
        </ul>
    </div>
</nav>
     
     
     

  <!-- Modal Structure -->
  <div id="launcher" class="modal">
    <div class="modal-content">
      <h4>Скачать лаунчер</h4>
      <p>Ты не сможешь играть если у тебя нет аккаунта! <a href="/play/">Быстрая регестрация за 5 секунд</a></p>
      <p>Если у тебя не установлена Java, то тебе <a href="//www.java.com/ru/">сюда</a></p>
      <p><a href="/laun/Launch.exe">Скачать версию лаунчера для Windows</a></p>
      <p><a href="/laun/Launch.jar">Скачать версию лаунчера для всех OS</a></p>
    </div>
    <div class="modal-footer">
      <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Закрыть</a>
    </div>
  </div>
<script>


  $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
   
	$('.modal-trigger').leanModal();
  });
   
 $('.cabinet').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'right', // Choose the horizontal origin
      closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
      draggable: true // Choose whether you can drag to open on touch screens
    }
  );

</script>


<div id="game" class="modal">
    <div class="modal-content">
        <h4>Как играть на наших серверах</h4>
        <br>
        <h5>1. Зарегистрируй аккаунт</h5>
        На всех наших серверах используется собственная система авторизации,
        поэтому тебе необходимо сначала <a href="/play">создать аккаунт</a>.
        <h5>2. Скачать лаунчер</h5>
        Лаунчер - запускатор для minecraft, он автоматически будет скачивать наши клиенты и обновлять их. <br>
        Для запуска игры тебе необходимо иметь установленную Oracle Java 8 на компьютере. <a href="//java.com/ru/download/manual.jsp" target="_blink">Самую последнюю версию можно загрузить с официального сайта</a>.
        <br><center><a href="/laun/Launch.exe" class=" modal-action modal-close waves-effect btn green"><i class="material-icons">&#xE2C4;</i></a></center>
    </div>
    <div class="modal-footer">

        <a class="modal-action modal-close waves-effect btn red">Закрыть</a>
    </div>
</div>
     
@yield('content')