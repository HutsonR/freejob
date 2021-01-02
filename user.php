<?php require "header.php"; "db.php";?>
	<!-- Шапка -->
	<div class="user-header">
		<div class="user-img-inner">
			<img src="img/Шапка.jpg" alt="background-user">
		</div>
		<div class="container">
				<div class="user-container">
					<div class="user-container-info-user">
						<div class="user-left">
							<div class="user-img-over">
								<img src="img/unnamed.jpg" alt="logo-user">
							</div>
							<h3><?php echo $_SESSION['logged_user']->login; ?></h3>
							<p>На сайте с <?php echo $_SESSION['logged_user']->join_date; ?></p>
							<div class="user-confirm">
								<a href="#" tooltip="Как получить значок?" flow="left"><img src="img/mail.active.png" alt="mail"></a>
								<a href="#" tooltip="Как получить значок?" flow="bottom"><img src="img/pass.active.png" alt="pass"></a>
								<a href="#" tooltip="Как получить значок?" flow="right"><img src="img/confirm.active.png" alt="confirm"></a>
							</div>
						</div>
						<div class="user-info">
							<h2><?php echo $_SESSION['logged_user']->login; ?></h2>
							<h4>Специализация: Разработка и IT</h4>
							<p>Привет!
								Меня зовут Рома, живу и работаю прямиком из Москвы. На этом сайте вы можете подробнее узнать обо мне, а также посмотреть мои работы: https://hutsonr.ru/

								В мои услуги входят следующие пункты:
								1 ) Разработка сайта с полного нуля. После разработки проекта Вы получаете полностью готовый сайт, который будет уже на хостинге и с доступом в панель управления, для полного контроля сайта.
								2 ) Отрисовка макетов с учётом ваших вкусов.
								3 ) Качественный современный сайт с индивидуальным стилем и своими плюшками.
								4 ) Профессиональная верстка макетов любой сложности.
								5 ) (ДОПОЛНИТЕЛЬНО) "Натягивание" сайта на CMS под ваши вкусы для полного редактирования всех разделов
							</p>
						</div>
						<div class="user-right">
							<div class="user-top">
								<i class="fas fa-signal"></i>
								<h3>Рейтинг:</h3>
								<h3 class="user-top-posititon">125493</h3>
							</div>
							<div class="change-user">
								<a href="#" title="">
									<i class="fas fa-user"></i>
									<h3>Войти как работодатель</h3>
								</a>
							</div>
							<div class="user-settings">
								<a href="user-settings.php" title="">
									<i class="fas fa-user-edit"></i>
									<h3>Настройки</h3>
								</a>
							</div>
							<div class="night-mode">
								<i class="fas fa-moon"></i>
								<input class="l" type="checkbox" id="switch-1">
							</div>
							<div class="user-logout">
									<i class="fas fa-sign-out-alt"></i>
									<a href="logout.php" title="">Выйти из аккаунта</a>
							</div>
						</div>
					</div>
					<div class="user-portfolio">
						<h2>Мои работы:</h2>
						<div class="user-portfolio-inner">
							<div class="user-portfolio-inner_item">
								<a href="#" title="">
									<img src="img/Gerber.jpg" alt="image">
									<p>Gerber -  Магазин по продаже топоров</p>
								</a>
							</div>
							<div class="user-portfolio-inner_item">
								<a href="#" title="">
									<img src="img/g1unE6n4lYo.jpg" alt="image">
									<p>Сайт для лейбла музыкальной группы</p>
								</a>
							</div>
							<div class="user-portfolio-inner_item">
								<a href="#" title="">
									<img src="img/PlayKing.jpg" alt="image">
									<p>PlayKing - игровой новостной сайт</p>
								</a>
							</div>
							<div class="user-portfolio-inner_item">
								<a href="#" title="">
									<img src="img/tSVxHKR44rE.jpg" alt="image">
									<p>Fully - Сайт рэперов Трио</p>
								</a>
							</div>
							<div class="user-portfolio-inner_item">
								<a href="#" title="">
									<img src="img/g1unE6n4lYo.jpg" alt="image">
									<p>Hutson - сайт-портфолио для программиста</p>
								</a>
							</div>									
						</div>
					</div>
					<div class="user-otziv">
						<h2>Отзывы о пользователе:</h2>
						<div class="otziv-category">
							<div class="positive button-cat" id="like">
								<i class="far fa-thumbs-up"></i>
								положительные
							</div>
							<div class="negative button-cat" id="dislike">
								<i class="far fa-thumbs-down"></i>
								отрицательные
							</div>
						</div>
						<div class="users-otziv-container">
							<div class="otziv like">
								<img src="img/1.jpg" alt="">
								<div class="otziv-text">
									<div class="user-title">
										<a href="#" title=""><h4>ZeddHQ</h4></a> 
										<i class="far fa-thumbs-up"></i>
									</div>
									<p>Работа сделана очень качественно, рекоммендую продавца.</p>
								</div>
							</div>
							<div class="otziv like">
								<img src="img/2.jpg" alt="">
								<div class="otziv-text">
									<div class="user-title">
										<a href="#" title=""><h4>Zero</h4></a> 
										<i class="far fa-thumbs-up"></i>
									</div>
									<p>Попался учень пунктуальный продавец, который выполнил работу точно в сроки. Всё сделано быстро и качественно!</p>
								</div>
							</div>
							<div class="otziv dislike">
								<img src="img/3.jpg" alt="">
								<div class="otziv-text">
									<div class="user-title">
										<a href="#" title=""><h4>Hikot</h4></a> 
										<i class="far fa-thumbs-down"></i>
									</div>
									<p>Ужасный продавец, договаривались сделать за неделю, вышло на 3. Не рекоммендую!</p>
								</div>
							</div>
							<div class="otziv like">
								<img src="img/4.jpg" alt="">
								<div class="otziv-text">
									<div class="user-title">
										<a href="#" title=""><h4>KEgo</h4></a> 
										<i class="far fa-thumbs-up"></i>
									</div>
									<p>Без лишних слов. Сделал сложную систему точно по графику без багов и лагов.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
		</div>
	</div>
	<footer>
		<div class="container">
			<div class="footer__item">
				<div class="footer-about">
					<a href="index.html" title=""><img src="img/unnamed.jpg" alt="logo"></a>
					<a href="index.html" title=""><h4>FreeJob</h4></a>
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
	<script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js'></script>
	<!-- User scripts -->
	<script src="js/main.js"></script>
</body>
</html>