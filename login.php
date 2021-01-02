<?php require "db.php";?>
<?php 
	$data = $_POST;
	if ( isset($data['do_login']) )
	 {

		$errors = array();
		$user = R::findOne('users', 'email = ?', array($data['email']));
		if ( $user )
	  {
			// Логин существует
	  	if (password_verify($data['password'], $user->password)) {
	  		// Логиним пользователя
	  		$_SESSION['logged_user'] = $user;
	  		header('location: index.php');
	  	} else {
	  		$errors[] = 'Email или пароль не верны';
	  	}
		} else {
			$errors[] = 'Email или пароль не верны';
		}

		if ( ! empty($errors) ) 
		{
		 	echo '<div class="sign-error">'.array_shift($errors).'</div>';
		}

	}
?>
 <!DOCTYPE html>
<html lang="ru-Ru" prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb#">
  <head>
    <meta charset="utf-8">
    <title>FreeJob лучшая биржа фриланс услуг</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <!-- Open Graph Start-->
    <meta property="og:locale" content="">
    <meta property="og:type" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="">
    <meta property="og:url" content="">
    <meta property="og:site_name" content="">
    <meta property="fb:admins" content="">
    <!-- Only Facebook Start-->
    <meta property="profile:first_name" content="">
    <meta property="profile:last_name" content="">
    <meta property="profile:username" content="">
    <!-- Only Facebook End-->
    <!-- Content Video Start-->
    <meta property="og:video:type" content="">
    <meta property="og:video" content="">
    <meta property="og:video:height" content="">
    <meta property="og:video:width" content="">
    <meta property="og:duration" content="">
    <!-- Content Video End-->
    <!-- Open Graph End-->
    <!-- Twitter Cards Start-->
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="">
    <!-- Twitter Cards End-->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/awesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="css/slick.css">
    <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
    <link rel="shortcut icon" href="#"  type="image/png">
  </head>
<body>
	<header id="header" class="header">
		<div class="container">
			<a class="logo-a" href="index.php" title=""><img class="logo" src="img/unnamed.jpg" alt="logo"></a>
			<svg class="ham hamRotate ham4" id="navToggle" viewBox="0 0 110 100" width="80">
			  <path
			        class="line top"
			        d="m 70,33 h -40 c 0,0 -8.5,-0.149796 -8.5,8.5 0,8.649796 8.5,8.5 8.5,8.5 h 20 v -20" />
			  <path
			        class="line middle"
			        d="m 70,50 h -40" />
			  <path
			        class="line bottom"
			        d="m 30,67 h 40 c 0,0 8.5,0.149796 8.5,-8.5 0,-8.649796 -8.5,-8.5 -8.5,-8.5 h -20 v 20" />
			</svg>
				<nav class="nav" id="menu" role="navigation">
					<ul class="nav__menu">
						<li><a href="#" title="">Тексты</a>
							<ul class="submenu">
								<li><a href="#" title="">Сценарии</a></li>
								<li><a href="#" title="">Резюме</a></li>
								<li><a href="#" title="">Статьи</a></li>
								<li><a href="#" title="">Редактирование</a></li>
								<li><a href="#" title="">Контент менеджер</a></li>
								<li><a href="#" title="">Стихи, сказки, эссе</a></li>
								<li><a href="#" title="">Помощь, мануал</a></li>
								<li><a href="#" title="">Создание субтитров</a></li>
								<li><a href="#" title="">Переводы</a></li>
								<li><a href="#" title="">Бизнес-тексты</a></li>
							</ul>
						</li>
						<li><a href="#" title="">Разработка и IT</a>
							<ul class="submenu">
								<li><a href="#" title="">Сайты «под ключ»</a></li>
								<li><a href="#" title="">Вёрстка</a></li>
								<li><a href="#" title="">Доработка сайта</a></li>
								<li><a href="#" title="">Адаптивный дизайн</a></li>
								<li><a href="#" title="">Домены и хостинги</a></li>
								<li><a href="#" title="">Скрипты и боты</a></li>
								<li><a href="#" title="">Сис. админ. (CMS)</a></li>
								<li><a href="#" title="">Контент менеджер</a></li>
								<li><a href="#" title="">Программы для пк</a></li>
								<li><a href="#" title="">Составление ТЗ</a></li>
								<li><a href="#" title="">Мобильные приложения</a></li>
								<li><a href="#" title="">Программы для ПК</a></li>
							</ul>
						</li>
						<li><a href="#" title="">Оптимизация и SEO</a>
							<ul class="submenu">
								<li><a href="#" title="">Трафик</a></li>
								<li><a href="#" title="">Консультация</a></li>
								
								<li><a href="#" title="">Продажа ссылок</a></li>
								<li><a href="#" title="">SMO</a></li>
								<li><a href="#" title="">Семантическое ядро</a></li>
								<li><a href="#" title="">Поиск. продвижение (SEM)</a></li>
								<li><a href="#" title="">Контент</a></li>
								<li><a href="#" title="">Контекстная реклама</a></li>
							</ul>
						</li>
						<li><a href="#" title="">Маркетинг</a>
							<ul class="submenu">
								<li><a href="#" title="">Промо-персонал</a></li>
								<li><a href="#" title="">Креатив</a></li>
								<li><a href="#" title="">PR-менеджмент</a></li>
								<li><a href="#" title="">Бизнес планы</a></li>
								<li><a href="#" title="">Маркетинг в соц сетях</a></li>
								<li><a href="#" title="">Статистика, аналитика</a></li>
								<li><a href="#" title="">Контекстная реклама</a></li>
								<li><a href="#" title="">SMO</a></li>
								<li><a href="#" title="">Генерации лидов</a></li>
								<li><a href="#" title="">Исследования</a></li>
								<li><a href="#" title="">Медиапланирование</a></li>
							</ul>
						</li>
						<li><a href="#" title="">Аудио и видео</a>
							<ul class="submenu">
								<li><a href="#" title="">Режиссура</a></li>
								<li><a href="#" title="">Кастинг</a></li>
								<li><a href="#" title="">Музыка и песни</a></li>
								<li><a href="#" title="">Диктор</a></li>
								<li><a href="#" title="">Интро и анимация лого</a></li>
								<li><a href="#" title="">Видеосъёмка, монтаж</a></li>
								<li><a href="#" title="">Раскадровки</a></li>
								<li><a href="#" title="">Свадебное видео</a></li>
								<li><a href="#" title="">Создание субтитров</a></li>
								<li><a href="#" title="">Аудиомонтаж</a></li>
								<li><a href="#" title="">Видеодизайн</a></li>
							</ul>
						</li>
						<li><a href="#" title="">Ещё..</a></li>
					</ul>
				</nav>
				<div id="nav" class="navigation">
				  <div class="navigation__inner">
				  	<h3>Заказчик</h3>
				    <ul class="m-menu">
				    	<li><i class="fas fa-list"></i><a href="#" title="">Все фрилансеры</a></li>
				    	<li><i class="fas fa-check-double"></i><a href="#" title="">Мои заказы</a></li>
				    	<li><i class="fas fa-exchange-alt"></i><a href="#" title="">Биржа</a></li>
				    </ul>
				    <h3>Фрилансер</h3>
				    <ul class="m-menu">	
				    	<li><i class="fas fa-briefcase"></i><a href="#" title="">Мои работы</a></li>
				    	<li><i class="far fa-images"></i><a href="#" title="">Мои проекты</a></li>
				    	<li><i class="fas fa-exchange-alt"></i><a href="#" title="">Биржа</a></li>
				    </ul>
				    <h3>Главное на FreeJob</h3>
				    <ul class="m-menu">	
				    	<li><i class="fas fa-list"></i><a href="#" title="">Категории</a></li>
				    	<li><i class="far fa-id-card"></i><a href="#" title="">Профиль</a></li>
				    	<li><i class="fas fa-clipboard-list"></i><a href="#" title="">Q & A</a></li>
				    	<li><a href="#" title="">Выход</a></li>
				    </ul>
				  </div>
				</div>
				<div class="header-right">
					<div class="input-wrapper" id="search-input" data-text="">
		  			<a href="work-create.php" class="post-job">Разместить заказ</a>
					</div>
					<?php if (isset($_SESSION['logged_user'])) : ?>
						<a class="auth-user" href="user.php" tooltip="Личный кабинет" flow="bottom"><img src="img/unnamed.jpg" alt="img"></a>
					<?php else: ?>
					<a href="login.php" tooltip="Личный кабинет" flow="bottom"><i class="far fa-user"></i></a>
					<?php endif; ?>
				</div>
		</div>
	</header><!-- /header -->
		<div class="container-auth">
		  <div class="frame">
		    <div class="nav">
		      <ul class="links">
		        <li class="signin-active"><a class="btn">Войти</a></li>
		      </ul>
		    </div>
		    <div class="sign-error"></div>
		    <div ng-app ng-init="checked = false">
						        <form class="form-signin" action="" method="post" name="form">
		          <label for="email">email</label>
		          <input class="form-styling" type="text" name="email" value="<?php echo @$data['email']; ?>"/>
		          <label for="password">Пароль</label>
		          <input class="form-styling" type="password" name="password" placeholder=""/>
		          <input type="checkbox" id="checkbox"/>
		          <label for="checkbox" ><span class="ui"></span>Запомнить меня</label>
		            <button class="btn-signin" name="do_login">Войти</button>
						        </form>
		      
		            <div  class="success">
		              <svg width="270" height="270" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
		       viewBox="0 0 60 60" id="check" ng-class="checked ? 'checked' : ''">
		                 <path fill="#ffffff" d="M40.61,23.03L26.67,36.97L13.495,23.788c-1.146-1.147-1.359-2.936-0.504-4.314
		                  c3.894-6.28,11.169-10.243,19.283-9.348c9.258,1.021,16.694,8.542,17.622,17.81c1.232,12.295-8.683,22.607-20.849,22.042
		                  c-9.9-0.46-18.128-8.344-18.972-18.218c-0.292-3.416,0.276-6.673,1.51-9.578" />

		             </div>
		      </div>
		      
		      <div class="forgot">
		        <a class="pass" href="#">Забыли пароль?</a><br>
		        <a class="havent_acc" href="signup.php" title="Зарегистрироваться">У меня нет аккаунта</a>
		      </div>
		      
		      
		  </div>
		    
		 
		</div>

	<footer>
		<div class="container">
			<div class="footer__item">
				<div class="footer-about">
					<a href="index.php" title=""><img src="img/unnamed.jpg" alt="logo"></a>
					<a href="index.php" title=""><h4>FreeJob</h4></a>
					<p>© 2018 - 2020 FreeJob</p>
				</div>
				<div class="footer-birja">
					<h4>О бирже</h4>
					<p><a href="#" title="">О бирже</a></p>
					<p><a href="#" title="">Политика конфиденциальности</a></p>
					<p><a href="#" title="">Пользовательское соглашение</a></p>
				</div>
				<div class="footer-user">
					<h4>Пользователь</h4>
					<p><a href="#" title="">Подтверждение аккаунта (PRO)</a></p>
					<p><a href="#" title="">Войти</a></p>
					<p><a href="#" title="">Зарегистрироваться</a></p>
					<p><a href="#" title="">Рекомендации</a></p>
				</div>
				<div class="footer-help">
					<h4>Помощь</h4>
					<p><a href="#" title="">Вопрос - Ответ Q&A</a></p>
					<p><a href="#" title="">Правила проекта</a></p>
					<p><a href="#" title="">Поддержка</a></p>
				</div>
			</div>
			<div class="footer-social">
				<a href="#" title=""><i class="fab fa-vk"></i></a>
				<a href="#" title=""><i class="fab fa-instagram"></i>
				</a>
				<a href="#" title=""><i class="fab fa-twitter"></i></a>
				<a href="#" title=""><i class="fab fa-facebook"></i></a>
			</div>
		</div>
	</footer>
	<!-- Vender scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<!-- User scripts -->
	<script src="js/main.js"></script>
</body>
</html>