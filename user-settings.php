 <?php require "header.php";?>
	<!-- Шапка -->
	<div class="user-header">
		<div class="user-img-inner">
			<img src="img/Шапка.jpg" alt="background-user">
		</div>
		<div class="container">
			<div class="user-container-over">
				<div class="user-container-inner">
					<div class="user-container-info-user">
						<div class="user-left">
							<div class="user-settings-img-over">
								<img src="img/unnamed.jpg" alt="logo-user">
							</div>
							<h3><?php echo $_SESSION['logged_user']->login; ?></h3>
							
						</div>
						<div class="user-info">
							<h2><?php echo $_SESSION['logged_user']->login; ?></h2>
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