<?php require "db.php";?>
    <?php 
	$data = $_POST;
	if ( isset($data['do_signup']) ) 
	{
		// Регистрируем

		$errors = array();
		if ( trim($data['login']) == '' ) 
		{
			$errors[] = 'Введите логин!';
		}

		if ( trim($data['email']) == '' ) 
		{
			$errors[] = 'Введите email!';
		}

		if ( $data['password'] == '' ) 
		{
			$errors[] = 'Введите пароль!';
		}

		if ( $data['password_2'] != $data['password'] ) 
		{
			$errors[] = 'Пароли не совпадают';
		}

		if ( R::count('users', "login = ?", array($data['login'])) > 0 ) 
		{
			$errors[] = 'Пользователь с таким логином существует';
		}

		if ( R::count('users', "email = ?", array($data['email'])) > 0 ) 
		{
			$errors[] = 'Пользователь с таким email существует';
		}

		if ( empty($errors) ) 
		{
		 	// Можно регистрировать
		 	$user = R::dispense('users');
		 	$user->login = $data['login'];
		 	$user->email = $data['email'];
		 	// $user->user_type = $data['user_type'];
		 	$user->password = password_hash($data['password'], PASSWORD_DEFAULT);
		 	$user->join_date = date("m.d.Y");
		 	R::store($user);

		 	header('location: login.php');
		} else {
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
						<li><a href="#" title="" class="nav__menu-li">Тексты</a>
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
						<li><a href="#" title="" class="nav__menu-li">Разработка и IT</a>
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
						<li><a href="#" title="" class="nav__menu-li">Оптимизация и SEO</a>
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
						<li><a href="#" title="" class="nav__menu-li">Маркетинг</a>
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
						<li><a href="#" title="" class="nav__menu-li">Аудио и видео</a>
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
						<li><a href="#" title="" class="nav__menu-li">Ещё..</a></li>
					</ul>
				</nav>
				<div id="nav" class="navigation">
				  <div class="navigation__inner">
				  	<h3>Заказчик</h3>
				    <ul class="m-menu">
				    	<li><i class="fas fa-list"></i><a href="#" title="">Все фрилансеры</a></li>
				    	<li><i class="fas fa-check-double"></i><a href="#" title="">Мои заказы</a></li>
				    	<li><i class="fas fa-exchange-alt"></i><a href="market.php" title="">Биржа</a></li>
				    </ul>
				    <h3>Фрилансер</h3>
				    <ul class="m-menu">	
				    	<li><i class="fas fa-briefcase"></i><a href="#" title="">Мои работы</a></li>
				    	<li><i class="far fa-images"></i><a href="#" title="">Мои проекты</a></li>
				    	<li><i class="fas fa-exchange-alt"></i><a href="market.php" title="">Биржа</a></li>
				    </ul>
				    <h3>Главное на FreeJob</h3>
				    <ul class="m-menu">	
				    	<li><i class="fas fa-list"></i><a href="#" title="">Категории</a></li>
				    	<li><i class="far fa-id-card"></i><a href="user.php" title="">Профиль</a></li>
				    	<li><i class="fas fa-clipboard-list"></i><a href="#" title="">Q & A</a></li>
				    	<?php if (isset($_SESSION['logged_user'])) : ?>
				    		<li><a href="logout.php" title="">Выход</a></li>
				    	<?php else: ?>
				    		<li class="exit-none">пп</li>
				   	  <?php endif; ?>
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
		  <div class="frame frame-long">
		    <div class="nav">
		      <ul class="links">
		        <li class="signup-active"><a class="btn">Зарегистрироваться</a></li>
		      </ul>
		    </div> 
		    <div class="sign-error"></div>
				<form class="form-signup" action="" method="post" name="form">
					<label for="fullname">Логин</label>
					<input class="form-styling" type="text" name="login" value="<?php echo @$data['login']; ?>" />
					<label for="email">Email</label>
					<input class="form-styling" type="email" name="email" value="<?php echo @$data['email']; ?>"/>
					<label for="password">Введите пароль</label>
					<input class="form-styling" type="password" name="password" placeholder=""/>
					<label for="password_2">Повторите пароль</label>
					<input class="form-styling" type="password" name="password_2" placeholder=""/>
					<!-- <label for="signup-user">Войти как</label>
					<form action="http://ab-w.net/info.php" method="post" name=".">
						<select name="meu" size="1">
						<option value="first" name="user_type">Фрилансер</option>
						<option selected="selected" value="second" name="user_type">Заказчик</option>
						</select>
					</form> -->
					<button ng-click="checked = !checked" name="do_signup" class="btn-signup">Зарегистрироваться</button>
				</form>
				<div class="have_acc">
				  <a href="login.php" title="Войти">У меня есть аккаунт</a>
				</div>  
		  </div>
		</div>

	<footer>
		<div class="container">
			<div class="footer__item">
				<div class="footer-about">
					<a href="index.php" title=""><img src="img/unnamed.jpg" alt="logo"></a>
					<a href="index.php" title=""><h4>FreeJob</h4></a>
					<p>© 2019 - 2020 FreeJob</p>
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