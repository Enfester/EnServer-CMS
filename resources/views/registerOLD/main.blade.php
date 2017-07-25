<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Minecraft комплекс серверов - уникальный проект, включающий в себя все возможные сервера minecraft, приятную игровую атмосферу и игроков"/>
        <meta name="keywords" content="Enfester, енфестер, игровой, портал, samp,sa-mp,gta,sa,самп,cs,1.6,минекрафт, майнкрафт, minecraft,сервера, сервер, server, Дай, волю, фантазии"/>
        <meta name="owner" content="antivirus1221@ya.ru"/>
        <meta name="author" content="Samar"/>
        <meta name="resourse-type" content ="Homepage"/>
        <meta http-equiv="expires" content=""/>
        <meta http-equiv="charset" content="UTF-8"/>
        <meta http-equiv="content-language" content="ru"/>
        <meta name="robots" content="index,follow"/>
        <meta name="revisit-after" content="1 days"/>
        <title>Играть в minecraft на Enfester - Быстрая бесплатная регистрация. Скачть minecraft бесплатно</title>
        <link rel="shortcut icon" href="/img/logo.png" />
        <link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="{{asset('css/materialize.min.css')}}"  media="screen,projection"/>
        <!--Let browser know website is optimized for mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="{{asset('css/animate.css')}}" rel="stylesheet" />
        <script src="//www.google.com/recaptcha/api.js"></script>
    </head>
    <body>
        <div class="navbar-fixed">
            <nav>
                <div class="nav-wrapper light-blue">
                    <a href="/" class="brand-logo"> Enfester</a>
                    <ul id="nav-mobile" class="right hide-on-med-and-down">
                        <li><a href="/">ГЛАВНАЯ СТРАНИЦА САЙТА</a></li>
                        <li><a href="#home">НАЧАЛО</a></li>
                        <li><a href="#aboutus">О НАС</a></li>
                        <li><a href="#first">УСЛУГИ</a></li>
                        <li><a href="#registration">РЕГИСТРАЦИЯ</a></li>
                        <li><a href="#contactus">МЫ ВКОНТАКТЕ</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- banner -->
        <section style="background-image:url('{{asset('images/register/bg.jpg')}}'); background-attachment: fixed;background-size: 100%; text-shadow: 1px 1px 2px black;"class="banner  white-text" id="home">
            <div class="container">
                <div class="wow pulse">
                    <div class="center" style="padding-top:10%;padding-bottom: 20%;">
                        <image src="{{asset('images/register/logo128.png')}}" alt="" />
                        <?php echo '<p style="font-size: 24px; color:red;">' . $msg . '</p>'; ?>
                        <h3>ENFESTER </h3>
                        <h5>Minecraft комплекс серверов - уникальный проект, включающий в<br>себя качественные сервера minecraft, игровую атмосферу и игроков! </h5>
                        <h4><span class="label label-success">Зарегистрировано уже <?php echo $countPlayers; ?> чел.</span></h4>
						<a href="#registration" class="btn btn-large green waves-effect">НАЧАТЬ ИГРУ!</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.banner -->
        <!-- aboutus -->
        <section class="aboutus" id="aboutus">
            <div class="container">
                <div class="row">

                    <div class="wow bounceInLeft" data-wow-delay="0.1s">
                        <h2 class="thin">О нас</h2>
                    </div>
                    <div class="col m6 s12">
                        <p class="flow-text">
                            Enfester - это уникальный проект, который затянет тебя своей простотой и доступностью.
                            Мы небольшая команда знающих свое дело программистов, уже давно работаем в сфере Minecraft.
                            Наша команда, сделала для вас игру максимально удобной и простой!
                            Приглашай друзей и наслаждайся игрой на наших серверах!
                        </p>
                    </div>
                    <div class="col m6 s12">
                        <div class="img-aboutus">
                            <div class="wow fadeIn" data-wow-delay="0.2s">
                                <img src="{{asset('images/register/aboutus.jpg')}}" alt="" class="responsive-img" />
                            </div>
                        </div>
                    </div>
                    <center><a href="/" class="btn green btn-large">Посмотреть наши сервера и онлайн игроков можно на главной странице сайта</a> </center>
                </div>
            </div>

        </section>
        <!-- /.aboutus -->
        <!-- services -->
        <section style="background-color: #EBEBEB;" id="services">
            <div class="container">
                <br>
                <div class="row-padded" id="first"></div>
                <div class="wow bounceInLeft" data-wow-delay="0.1s">
                    <h2 class="thin">Наши услуги</h2>
                </div>
                <br>
                <div class="row">

                    <div class="col s5">
                        <div class="avatar">
                            <div class="wow fadeIn" data-wow-delay="0.2s">
                                <img src="{{asset('images/register/services/serv.png')}}" style="    margin-top: 10px;    margin-right: 40px; " alt="" class="responsive-img right" />
                            </div>
                        </div>
                    </div>
                    <div class="col s7 text-left">
                        <div class="wow bounceInRight" data-wow-delay="0.2s">
                            <h4>Создай свой сервер</h4>
                            <p>
                                Присоединится к нам? Легко!
                                Создавай свою сборку. Ставь на свой хостинг или покупай у нас. Напиши нашему администратору.
                                Докажи что твой сервер уникален в отличии от наших. Ты и твой сервер попадут в наш лаунчер, клиент и сайт.
                            </p>
                        </div>
                    </div>

                </div>
                <br><br>
                <div class="row">

                    <div class="col s7">
                        <div class="wow bounceInLeft right-align" data-wow-delay="0.2s">
                            <h4>Стань одним из нас</h4>
                            <p>
                                В нашу команду ведется набор, если ты считаешь что ты можешь помочь нашему проекту, тогда
                                заходи в группу и свяжись с администратором!
                        </div>
                    </div>
                    <div class="col s5">
                        <div class="avatar">
                            <div class="wow fadeIn" data-wow-delay="0.2s">
                                <img src="{{asset('images/register/services/adm.png')}}" style="  margin-top: 10px;"  alt="" class="responsive-img img-rounded" />
                            </div>
                        </div>
                    </div>

                </div>
                <br>
                <div class="row">
                    <div class="col s5">
                        <div class="avatar">
                            <div class="wow fadeIn" data-wow-delay="0.2s">
                                <img src="{{asset('images/register/services/donat.png')}}" style="  margin-top: 10px;    margin-right: 40px; "  alt="" class="responsive-img right img-rounded" />
                            </div>
                        </div>
                    </div>
                    <div class="col s7 text-left">
                        <div class="wow bounceInRight" data-wow-delay="0.2s">
                            <h4>Донат услуги</h4>
                            <p>
                                На нашем сайте есть донат услуги. Пополняй
                                свой счёт в личном кабинете, выбирай, что тебе нужно и покупай. Всё просто!
                            </p>
                        </div>
                    </div>

                </div>

                <br>
                <br>
                <br>
                <br>
            </div>
        </section>
        <!-- /.services -->

        <section class="registration" id="registration" style="background-image:url('{{asset('images/register/bgregister.jpg')}}'); background-attachment: fixed;padding: 150px;background-size: 100% 100%;">
            <div class="container" >
                <div class="wow flipInY" data-wow-delay="0.5s">
                    <h2 class="thin white-text">Создай аккаунт за 5 секунд!</h2>
                    <br>

                    <div class="card">
                        <div class="card-content">

                            <form  method="post" action="">
                                <?php echo '<p style="font-size: 13px; color:red;">' . $msg . '</p>'; ?>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field inline">
                                            <input id="email" name="email" type="email" class="validate">
                                            <label for="email">Укажи свой E-Mail</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field inline">
                                            <input id="login" name="login" type="text" class="validate" length="15">
                                            <label for="login">Придумай логин</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field inline">
                                            <input id="password1" name="password1" type="password" class="validate">
                                            <label for="password1">Придумай пароль</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <div class="input-field inline">
                                            <input id="password2" name="password2" type="password" class="validate">
                                            <label for="password2">Повтори пароль</label>
                                        </div>
                                    </div>
                                </div>
                                <center>

                                    <div class="g-recaptcha" data-sitekey="6LfSNQkUAAAAAJpEnekz9GVLxGJCw-QeRiULuiHA"></div>
                                    <input type="checkbox" style="position:absolute; top:-9999px; left:-9999px; visibility:hidden; " name="register[license]" id="stat_license_input" checked="checked" value="1" />
                                    <br>
                                    <input type="submit" name="submit" id="submit" class="btn green btn-large " value="Завершить регистрацию" disabled><br>
                                    <span style="font-size: 13px; color:red;">Нажимая эту кнопку, ты принимаешь <a class="modal-trigger" href="/rules/">правила сервера</a></span>
                                </center>
                            </form>
                            <br>
                        </div>
                    </div>
                </div>
            </div>     
        </section>
	   <footer style="margin-top:0px" class="page-footer grey darken-3">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Контакты</h5>
                <p class="grey-text text-lighten-4">По техническим вопросам обращаться к <a href="//vk.com/mr.samar">Антону</a>.</p>
                <p class="grey-text text-lighten-4">По заявкам в команду обращаться к <a href="//vk.com/kiskesis">Глебу</a>.</p>
              </div>
             
            </div>
          </div>
          <div class="footer-copyright grey darken-4">
            <div class="container">
             Комплекс игровых серверов майнкрафт "ЭнСервер". Сделано в России. 
            <a class="grey-text text-lighten-4 right" target="_blanck" href="//vk.com/mr.samar">Связь с автором проекта</a>
            </div>
          </div>
        </footer>


        <script src="/js/jquery.min.js"></script>
        <script src="reg.js"></script>
      

        <script src="/js/materialize.min.js"></script>
        <script src="/js/wow.min.js"></script>
        <script>  new WOW().init();</script>
        <script>


            (function ($) {
                $(function () {
                    $('a[href^="#"]').click(function () {
                        var el = $(this).attr('href');
                        $('body').animate({
                            scrollTop: $(el).offset().top
                        }, 500);
                        return false;
                    });
					
					 
                }); 
            })(jQuery); 
 $(document).ready(function(){
   $('.modal').modal();					 
					$('#modal').modal('open');
  });
//            function animate(elem) {
//                var effect = elem.data("effect");
//                if (!effect || elem.hasClass(effect))
//                    return false;
//                elem.addClass(effect);
//                setTimeout(function () {
//                    elem.removeClass(effect);
//                }, 1000);
//            }
//            $(".animated").mouseenter(function () {
//                animate($(this));
//            });
        </script>
		
		 <!-- Modal Structure -->
        <div id="modal" class="modal modal-fixed-footer">
            <div class="modal-content">
                <h4>Правила сервера</h4>
                
                <h2>Правила Поведение игроков На Сервере</h2>
                <div>&nbsp;</div>
                <div>1.1 Игрокам запрещено портить чужое имущество, вносить корректировки без согласия владельца, мешать строительству.</div>
                <div>&nbsp;</div>
                <div>1.2 Игрокам запрещено приватить чужое имущество на себя.</div>
                <div>&nbsp;</div>
                <div>1.3 Игрокам запрещено открывать чужие сундуки без согласия владельца.</div>
                <div>&nbsp;</div>
                <div>1.4 Игрокам запрещено убивать других игроков в домах, городах и других публичных местах.</div>
                <div>&nbsp;</div>
                <div>1.5 Игрокам запрещено создавать регионы привата с нецензурными названиями.</div>
                <div>&nbsp;</div>
                <div>1.6 Запрещено гриферство (нарушением не являются случаи: дом/постройку ограбил один из участников региона; дом/постройку ограбили вне какого-либо привата).</div>
                <div>&nbsp;</div>
                <div>1.7 Запрещено проводить раздачи игровых вещей в любом виде (запрет не распространяется на сервера, имеющие в названии слово &quot;Dupe&quot;).</div>
                <div>&nbsp;</div>
                <div>1.8 Запрещено возводить постройки на расстоянии менее 15 блоков от приватов других игроков.</div>
                <div>Наказание: Бан от суток до вечного бана.</div>
                <div>&nbsp;</div>
                <div>2.1 Игрокам запрещено использовать любого рода модификации, дающие преимущества над другими игроками (читы).</div>
                <div>&nbsp;</div>
                <div>2.2 Запрещено использовать баги игрового клиента и сервера, дающие Вам преимущества.</div>
                <div>&nbsp;</div>
                <div>2.3 Запрещено нарушать стабильность работы игрового сервера.</div>
                <div>Наказание: Бан от трех суток до вечного бана.</div>
                <div>&nbsp;</div>
                <div>3.1 Игрокам запрещено оскорблять кого-либо.</div>
                <div>&nbsp;</div>
                <div>3.2 Запрещено использовать нецензурные выражения в чате.</div>
                <div>&nbsp;</div>
                <div>3.3 Запрещено всячески отвлекать администрацию. Например, просить выдать что-либо или сменить время суток.</div>
                <div>&nbsp;</div>
                <div>3.4 Запрещено засорять чат не информативными и/или повторяющимися фразами.</div>
                <div>&nbsp;</div>
                <div>3.5 Запрещено рекламировать любые сторонние ресурсы без согласования с администрацией.</div>
                <div>&nbsp;</div>
                <div>3.6 Запрещен расизм, нацизм, религиозные обсуждения (оскорбления), разжигание межнациональной розни.</div>
                <div>&nbsp;</div>
                <div>3.7 Запрещено писать сообщения в верхнем регистре(Caps Lock).</div>
                <div>&nbsp;</div>
                <div>3.8 Запрещено совершать обман при обмене/торговле.</div>
                <div>&nbsp;</div>
                <div>3.9 Запрещается оскорблять, критиковать модераторов/администрацию и игровой проект в целом.</div>
                <div>Наказание: Лишение права общаться в чате, бан от 1 суток до 2 недель, вечный бан.</div>
                <div>&nbsp;</div>
                <div>4.1 Запрещено входить, а так же пытаться войти под чужими аккаунтами.</div>
                <div>&nbsp;</div>
                <div>4.2 Запрещено регистрировать несколько аккаунтов.</div>
                <div>&nbsp;</div>
                <div>4.3 Запрещено регистрировать ники, схожие с никами администрации сервера.</div>
                <div>&nbsp;</div>
                <div>4.4 Запрещено представляться администрацией.</div>
                <div>&nbsp;</div>
                <div>4.5 Запрещено регистрировать ник, схожий с ником другого игрока, с целью выдать себя за этого игрока.</div>
                <div>&nbsp;</div>
                <div>4.6 Запрещено выставлять префиксы нарушающие пункты правил.</div>
                <div>&nbsp;</div>
                <div>4.7 Запрещено распространять ссылки с целью получения данных других игроков.</div>
                <div>&nbsp;</div>
                <div>4.8 Запрещено регистрировать оскорбительные ники.</div>
                <div>Наказание: Вечный бан.</div>
                <div>&nbsp;</div>
                <div>5.1 Запрещено строить постройки в виде половых органов или свастики.</div>
                <div>&nbsp;</div>
                <div>5.2 Запрещено возводить постройки без указания ника автора.</div>
                <div>&nbsp;</div>
                <div>5.3 Запрещено строить примитивные сооружения, например, огромные каменные/земляные коробки, высокие узкие башни, высокие столбы воды/лавы, огромные бесполезные надписи, длинные дороги в воздухе, глубокие ямы в земле.</div>
                <div>&nbsp;</div>
                <div>5.4 Запрещено срубать дерево не полностью (оставлять кроны деревьев - в надежде, что осыплется автоматически).</div>
                <div>&nbsp;</div>
                <div>5.5 Запрещено строить высокие &quot;башенки&quot; и &quot;пирамидки&quot; из грибов и деревьев.</div>
                <div>&nbsp;</div>
                <div>5.6 Игрок обязан следить за состоянием своих построек и прилегающих к ним территорий.</div>
                <div>Наказание: бан от 1 суток до 2 недель, штраф в игровой валюте, снос постройки, вечный бан.</div>
                <div>&nbsp;</div>
                <div>6.1 Запрещено нарушать правила ивент- развлечений.</div>
                <div>&nbsp;</div>
                <div>6.2 Запрещено давать показания на других игроков без предъявления доказательств.</div>
                <div>&nbsp;</div>
                <div>6.3 Запрещено строить ловушки на точке /home либо /warp, способные убить игрока.</div>
                <div>&nbsp;</div>
                <div>6.4 Запрещено продавать/передавать игровой аккаунт за ресурсы или реальные ценности.</div>
                <div>&nbsp;</div>
                <div>6.5 Запрещено устанавливать скины непристойного содержания.</div>
                <div>&nbsp;</div>
                <div>6.6 Запрещено вводить в заблуждение игроков, модерацию и администрацию по техническим и игровым аспектам.</div>
                <div>Наказание: бан от 1 суток до 2 недель, вечный бан.</div>
                <div>&nbsp;</div>
                <div>7.1 Запрещается использование донат возможностей для получения преимущества перед другими игроками.</div>
                <div>&nbsp;</div>
                <div>7.2 Запрещается выдавать предметы , договариваться с игроками, оказывать услуги, полученными с помощью донат прав.</div>
                <div>&nbsp;</div>
                <div>7.3 Запрещается злоупотребление донат правами.</div>
                <div>&nbsp;</div>
                <div>7.4 Запрещается использование возможностей для получения персональной выгоды, не предусмотренными донат возможностями.</div>
                <div>&nbsp;</div>
                <div>7.5 Запрещается использовать донат возможности во вред игрокам, серверу, ландшафту.</div>
                <div>&nbsp;</div>
                <div>7.6 Запрещается пользоваться донат возможностями во время боев с игроками.</div>
                <div>Наказание: Бан от 1 суток до 2 недель, изъятие донат-статуса</div>              
            </div>
            <div class="modal-footer">
                <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Согласен</a>
            </div>
        </div>
    </body>
</html>