<?php require "header.php"; "db.php";?>
	<div class="lamp-container-outside">
		<input class="l" type="checkbox" id="switch-1">
	</div>
	<section class="work-create">
		<div class="container work-title-container">
			<h2>Прогресс: <span id="progress-val">0</span>%</h2>
			<progress value="0" max="100"></progress>
			<div class="slider-create-work">
				<div class="work-title">
					<h1>Название заказа</h1>
					<p>Название проекта должно максиально точно отразить суть вашего заказа.</p>
					<input type="text" name="text" id="review-text" class="work-title-area" placeholder="Пример: Сделать сайт для магазина.."></input>
					<span>Осталось <span id="counter"></span> из 75 симоволов</span>
					<div class="work-create-btn">
						<button type="submit" class="arrow arrow__left minus">Назад</button>
						<button type="submit" id="btn-first_next" class="arrow arrow__right plus" disabled>Далее</button>
					</div>
				</div>
				<div class="work-title-category">
					<div class="work-create-btn work-create-btn_margin-none">
						<button type="submit" class="arrow arrow__left minus">Назад</button>
					</div>
					<h1>Категории</h1>
					<p>Выберите наиболее подходящую категорию под Ваш заказ. Это позволит найти нужного Вам специалиста.</p>
					<div class="work-title-category-container">
						<h4 class="all-category all-category-none">Назад к всем категориям</h4>
						<div class="work-title-category-item">
						<h2>Тексты</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Сценарии</a></li>
								<li><a href="work-create-2.php" title="">Резюме</a></li>
								<li><a href="work-create-2.php" title="">Статьи</a></li>
								<li><a href="work-create-2.php" title="">Редактирование</a></li>
								<li><a href="work-create-2.php" title="">Контент менеджер</a></li>
								<li><a href="work-create-2.php" title="">Стихи, сказки, эссе</a></li>
								<li><a href="work-create-2.php" title="">Помощь, мануал</a></li>
								<span class="other_li">
									<li><a href="work-create-2.php" title="">Создание субтитров</a></li>
									<li><a href="work-create-2.php" title="">Бизнес-тексты</a></li>
								</span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
						<div class="work-title-category-item">
							<h2>Разработка сайтов</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Сайты «под ключ»</a></li>
								<li><a href="work-create-2.php" title="">Вёрстка</a></li>
								<li><a href="work-create-2.php" title="">Доработка сайта</a></li>
								<li><a href="work-create-2.php" title="">Адаптивный дизайн</a></li>
								<li><a href="work-create-2.php" title="">Домены и хостинги</a></li>
								<li><a href="work-create-2.php" title="">Сис. админ. (CMS)</a></li>
								<li><a href="work-create-2.php" title="">Тестирование (QA)</a></li>
								<span class="other_li">
					  			<li><a href="work-create-2.php" title="">Контент-менеджер</a></li>
					        <li><a href="work-create-2.php" title="">Интернет-магазины</a></li>
					        <li><a href="work-create-2.php" title="">Флеш-сайт</a></li>
					        <li><a href="work-create-2.php" title="">PDA сайты</a></li>
					        <li><a href="work-create-2.php" title="">Копия сайта</a></li>
					        <li><a href="work-create-2.php" title="">Проектирование</a></li>
				        </span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
						<div class="work-title-category-item">
							<h2>Оптимизация и SEO</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Трафик</a></li>
								<li><a href="work-create-2.php" title="">Консультация</a></li>
								
								<li><a href="work-create-2.php" title="">Продажа ссылок</a></li>
								<li><a href="work-create-2.php" title="">SMO</a></li>
								<li><a href="work-create-2.php" title="">Семантическое ядро</a></li>
								<li><a href="work-create-2.php" title="">Поиск. продвижение (SEM)</a></li>
								<li><a href="work-create-2.php" title="">Контент</a></li>
								<span class="other_li">
									<li><a href="work-create-2.php" title="">Контекстная реклама</a></li>
								</span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
						<div class="work-title-category-item">
							<h2>Маркетинг</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Промо-персонал</a></li>
								<li><a href="work-create-2.php" title="">Креатив</a></li>
								<li><a href="work-create-2.php" title="">PR-менеджмент</a></li>
								<li><a href="work-create-2.php" title="">Бизнес планы</a></li>
								<li><a href="work-create-2.php" title="">Маркетинг в соц сетях</a></li>
								<li><a href="work-create-2.php" title="">Статистика, аналитика</a></li>
								<li><a href="work-create-2.php" title="">Контекстная реклама</a></li>
								<span class="other_li">
									<li><a href="work-create-2.php" title="">SMO</a></li>
									<li><a href="work-create-2.php" title="">Генерации лидов</a></li>
									<li><a href="work-create-2.php" title="">Исследования</a></li>
									<li><a href="work-create-2.php" title="">Медиапланирование</a></li>
								</span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
						<div class="work-title-category-item">
							<h2>Аудио и видео</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Режиссура</a></li>
								<li><a href="work-create-2.php" title="">Кастинг</a></li>
								<li><a href="work-create-2.php" title="">Музыка и песни</a></li>
								<li><a href="work-create-2.php" title="">Диктор</a></li>
								<li><a href="work-create-2.php" title="">Интро и анимация лого</a></li>
								<li><a href="work-create-2.php" title="">Видеосъёмка, монтаж</a></li>
								<li><a href="work-create-2.php" title="">Раскадровки</a></li>
								<span class="other_li">
									<li><a href="work-create-2.php" title="">Свадебное видео</a></li>
									<li><a href="work-create-2.php" title="">Создание субтитров</a></li>
									<li><a href="work-create-2.php" title="">Аудиомонтаж</a></li>
									<li><a href="work-create-2.php" title="">Видеодизайн</a></li>
								</span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
						<div class="work-title-category-item">
							<h2>Арты и Дизайн</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Интерфейсы</a></li>
								<li><a href="work-create-2.php" title="">Баннеры</a></li>
								<li><a href="work-create-2.php" title="">Дизайн сайтов</a></li>
								<li><a href="work-create-2.php" title="">Логотипы</a></li>
								<li><a href="work-create-2.php" title="">2D персонажи</a></li>
								<li><a href="work-create-2.php" title="">3D персонажи</a></li>
								<li><a href="work-create-2.php" title="">Концепт-арты</a></li>
								<span class="other_li">
									<li><a href="work-create-2.php" title="">Дизайн интерфейсов</a></li>
									<li><a href="work-create-2.php" title="">Дизайн упаковки</a></li>
									<li><a href="work-create-2.php" title="">Комиксы</a></li>
									<li><a href="work-create-2.php" title="">2D анимации</a></li>
									<li><a href="work-create-2.php" title="">Иллюстрации</a></li>
									<li><a href="work-create-2.php" title="">Граффити</a></li>
									<li><a href="work-create-2.php" title="">Разработка шрифтов</a></li>
									<li><a href="work-create-2.php" title="">3D анимации</a></li>
									<li><a href="work-create-2.php" title="">Живопись</a></li>
									<li><a href="work-create-2.php" title="">Хенд-мейд</a></li>
									<li><a href="work-create-2.php" title="">Ландшафтный дизайн</a></li>
									<li><a href="work-create-2.php" title="">Аэрография</a></li>
									<li><a href="work-create-2.php" title="">Пиксел-арт</a></li>
									<li><a href="work-create-2.php" title="">Презентации</a></li>
									<li><a href="work-create-2.php" title="">Векторная графика</a></li>
									<li><a href="work-create-2.php" title="">Интерьеры</a></li>
									<li><a href="work-create-2.php" title="">Текстильный дизайн</a></li>
								</span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
						<div class="work-title-category-item">
							<h2>Аудио и видео</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Режиссура</a></li>
								<li><a href="work-create-2.php" title="">Кастинг</a></li>
								<li><a href="work-create-2.php" title="">Музыка и песни</a></li>
								<li><a href="work-create-2.php" title="">Диктор</a></li>
								<li><a href="work-create-2.php" title="">Интро и анимация лого</a></li>
								<li><a href="work-create-2.php" title="">Видеосъёмка, монтаж</a></li>
								<li><a href="work-create-2.php" title="">Раскадровки</a></li>
								<span class="other_li">
									<li><a href="work-create-2.php" title="">Свадебное видео</a></li>
									<li><a href="work-create-2.php" title="">Создание субтитров</a></li>
									<li><a href="work-create-2.php" title="">Аудиомонтаж</a></li>
									<li><a href="work-create-2.php" title="">Видеодизайн</a></li>
								</span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
						<div class="work-title-category-item">
							<h2>Аудио и видео</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Режиссура</a></li>
								<li><a href="work-create-2.php" title="">Кастинг</a></li>
								<li><a href="work-create-2.php" title="">Музыка и песни</a></li>
								<li><a href="work-create-2.php" title="">Диктор</a></li>
								<li><a href="work-create-2.php" title="">Интро и анимация лого</a></li>
								<li><a href="work-create-2.php" title="">Видеосъёмка, монтаж</a></li>
								<li><a href="work-create-2.php" title="">Раскадровки</a></li>
								<span class="other_li">
									<li><a href="work-create-2.php" title="">Свадебное видео</a></li>
									<li><a href="work-create-2.php" title="">Создание субтитров</a></li>
									<li><a href="work-create-2.php" title="">Аудиомонтаж</a></li>
									<li><a href="work-create-2.php" title="">Видеодизайн</a></li>
								</span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
						<div class="work-title-category-item">
							<h2>Аудио и видео</h2>
							<ul>
								<li><a href="work-create-2.php" title="">Режиссура</a></li>
								<li><a href="work-create-2.php" title="">Кастинг</a></li>
								<li><a href="work-create-2.php" title="">Музыка и песни</a></li>
								<li><a href="work-create-2.php" title="">Диктор</a></li>
								<li><a href="work-create-2.php" title="">Интро и анимация лого</a></li>
								<li><a href="work-create-2.php" title="">Видеосъёмка, монтаж</a></li>
								<li><a href="work-create-2.php" title="">Раскадровки</a></li>
								<span class="other_li">
									<li><a href="work-create-2.php" title="">Свадебное видео</a></li>
									<li><a href="work-create-2.php" title="">Создание субтитров</a></li>
									<li><a href="work-create-2.php" title="">Аудиомонтаж</a></li>
									<li><a href="work-create-2.php" title="">Видеодизайн</a></li>
								</span>
								<li class="local-cat local-cat-show" id="more">Ещё..</li>
								<li class="local-cat local-cat-sh" id="shadow">Скрыть</li>
							</ul>
						</div>
					</div> <!-- work-title-container -->
				</div>
			</div>
		</div>
	</section>
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
					<p><a href="work-create-2.php" title="">О бирже</a></p>
					<p><a href="work-create-2.php" title="">Политика конфиденциальности</a></p>
					<p><a href="work-create-2.php" title="">Пользовательское соглашение</a></p>
				</div>
				<div class="footer-user">
					<h4>Пользователь</h4>
					<p><a href="work-create-2.php" title="">Подтверждение аккаунта (PRO)</a></p>
					<p><a href="work-create-2.php" title="">Войти</a></p>
					<p><a href="work-create-2.php" title="">Зарегистрироваться</a></p>
					<p><a href="work-create-2.php" title="">Рекомендации</a></p>
				</div>
				<div class="footer-help">
					<h4>Помощь</h4>
					<p><a href="work-create-2.php" title="">Вопрос - Ответ Q&A</a></p>
					<p><a href="work-create-2.php" title="">Правила проекта</a></p>
					<p><a href="work-create-2.php" title="">Поддержка</a></p>
				</div>
			</div>
			<div class="footer-social">
				<a href="work-create-2.php" title=""><i class="fab fa-vk"></i></a>
				<a href="work-create-2.php" title=""><i class="fab fa-instagram"></i>
				</a>
				<a href="work-create-2.php" title=""><i class="fab fa-twitter"></i></a>
				<a href="work-create-2.php" title=""><i class="fab fa-facebook"></i></a>
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