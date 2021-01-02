<?php require "header.php"; "db.php";?>
<div class="lamp-container-outside">
		<input class="l" type="checkbox" id="switch-1">
	</div>
	<div class="container work-title-container">
		<h2>Прогресс: <span id="progress-val">50</span>%</h2>
		<progress value="50" max="100"></progress>
		<div class="slider-create-work">
			<div class="work-title">
				<h1>Описание заказа</h1>
				<p>Опишите Вашу работу правильно, чтобы у фрилансера не возникало вопросов по Вашему заказу и он мог выполнить её точно по условиям. Расскажите, что именно вам нужно, в каком объёме выполнить и за какие сроки.</p>
				<textarea id="desc-text" class="work-desc-area" name="text" placeholder="Здесь подробно опишите ваше задание"></textarea>
				<span>Осталось <span id="counter-desc"></span> из 4500 симоволов</span>
				<div class="down-file">
					<p>Дополнительные файлы</p>
					<div class="example">
					  <div class="form-group">
					    <input type="file" name="file" id="file" class="input-file">
					    <label for="file" class="btn btn-tertiary js-labelFile">
					      <i class="icon fa fa-check"></i>
					      <span class="js-fileName">Загрузить файл</span>
					    </label>
					  </div>
					</div>
				</div>
				<div class="work-create-btn">
					<button type="submit" class="arrow arrow__left minus"><a href="work-create.php" title="">Назад</a></button>
					<button type="submit" class="arrow arrow__right plus" id="btn-second_next" disabled>Далее</button>
				</div>
			</div>
			<div class="work-title">
				<h1>Описание заказа</h1>
				<p>Опишите Вашу работу правильно, чтобы у фрилансера не возникало вопросов по Вашему заказу и он мог выполнить её точно по условиям. Расскажите, что именно вам нужно, в каком объёме выполнить и за какие сроки.</p>
				<textarea id="desc-text" class="work-desc-area" name="text" placeholder="Здесь подробно опишите ваше задание"></textarea>
				<span>Осталось <span id="counter-desc"></span> из 4500 симоволов</span>
				<div class="work-create-btn">
					<button type="submit" class="arrow arrow__left minus">Назад</button>
					<button type="submit" class="arrow arrow__right plus" id="btn-deactiv">Далее</button>
				</div>
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