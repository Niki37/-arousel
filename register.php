<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script><![endif]-->
	<title></title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />
	<link href="style.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/color.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<meta charset="utf-8">
</head>

	<body>
		<div class="shapka_two"></div>	
		<div class="wrapper">
							
			<header class="header">
				<div id="header">
					<a class="menu" href="#"><button type="button" class="btn btn-warning">Главная</button></a>
					<a class="menu" href="#"><button type="button" class="btn btn-warning">Подробнее</button></a>
					<a class="menu" href="#"><button type="button" class="btn btn-warning">Вопросы </button></a>
					<a class="menu" href="#"><button type="button" class="btn btn-warning">Контакты</button></a>
					<div class="form">
						<form role="form">
							<div class="form-group">
								<input type="reseach" class="form-control" id="exampleInputEmail1" placeholder="Reseach">
						  	</div>
						</form>
					</div>
					<div class="form_enter">
						<button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
				        	Вход
				    	</button>
						<!-- Форма входа -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
										<h4 class="modal-title" id="myModalLabel">Форма входа</h4>
									</div>
									<div class="modal-body">
										<div class="form_modal">
											<form class="form-inline" role="form">
											    <div class="form-group">
											        <label class="sr-only" for="exampleInputEmail2">Email</label>
											        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
											    </div>
											    <div class="form-group">
											        <label class="sr-only" for="exampleInputPassword2">Пароль</label>
											        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
											    </div>
											    <div class="checkbox">
											        <label>
														<input type="checkbox"> Запомнить меня
											        </label>
											    </div>
											</form>
										</div>
									</div>
									<div class="modal-footer">
										<div class="button_exist">
											<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
										</div>
										<div class="button_enter">
											<button type="button" class="btn btn-primary">Войти</button>
										</div>
										<div class="button_register">
											<a href="register.php"><button type="button" class="btn btn-default" name="register">Регистрация</button></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</header><!-- .header-->

			<div class="header_two">
							<!--Карусель начало -->
							<div class="karusel">
								<div class="center">
									<style type="text/css">
									#exampleInputEmail2, #exampleInputPassword2, .checkbox{
										
									}

									.button_exist{
										float: right;
									}
									.button_enter{
										margin-right: 20px;
										float: right;
									}
									.button_register{
										float: left;
									}
									.form_enter{
										padding:0px;
										/*margin-top:-20px;*/
										margin-right: 30px;
										height:35px;
										width: 50px;
										float: right; 
									}
									.form{
										padding:0px;
										/*margin-top:-20px;*/
										margin-right: 30px;
										height:35px;
										width: 200px;
										float: right; 
									}
									h2{
									    margin: 0;     
									    color: #666;
									    padding-top: 90px;
									    font-size: 27px;
									    font-family: "trebuchet ms", sans-serif;    
									}
									.item{
									    background: #333;    
									    text-align: center;
									    height: 300px !important;
									}
									.menu{
										padding: 20px;
										font-size: 20px; 
										color:white;

									}
									.sidebar-menu{
										padding-left: 20px;
										color:white;
										font-size: 20px;
									}
									.carousel{
									    margin-top: 20px;
									</style>

									<!-- Карусель -->
									<div id="myCarousel" class="carousel slide" data-interval="3000" data-ride="carousel">
										<!-- Индикаторы для карусели -->
										<ol class="carousel-indicators">
											<!-- Перейти к 0 слайду карусели с помощью соответствующего индекса data-slide-to="0" -->
											<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
											<!-- Перейти к 1 слайду карусели с помощью соответствующего индекса data-slide-to="1" -->
											<li data-target="#myCarousel" data-slide-to="1"></li>
											<!-- Перейти к 2 слайду карусели с помощью соответствующего индекса data-slide-to="2" -->
											<li data-target="#myCarousel" data-slide-to="2"></li>
										</ol>
										<!-- Слайды карусели -->
										<div class="carousel-inner">
											<!-- Слайды создаются с помощью контейнера с классом item, внутри которого помещается содержимое слайда -->
											<div class="active item">
												<h2>Слайд №1</h2>
												<div class="carousel-caption">
													<h3>Заголовок 1 слайда</h3>
													<p>Текст (описание) 1 слайда...</p>
												</div>
											</div>
											<!-- Слайд №2 -->
											<div class="item">
												<h2>Слайд №2</h2>
												<div class="carousel-caption">
													<h3>Заголовок слайда 2</h3>
													<p>Описание слайда</p>
												</div>
											</div>
											<!-- Слайд №3 -->
											<div class="item">
												<h2>Слайд №3</h2>
												<div class="carousel-caption">
													<h3>Заголовок слайда 3</h3>
													<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
												</div>
											</div>
										</div>

										<!-- Навигация для карусели -->
										<!-- Кнопка, осуществляющая переход на предыдущий слайд с помощью атрибута data-slide="prev" -->
										<a class="carousel-control left" href="#myCarousel" data-slide="prev">
											<span class="glyphicon glyphicon-chevron-left"></span>
										</a>
										<!-- Кнопка, осуществляющая переход на следующий слайд с помощью атрибута data-slide="next" -->
										<a class="carousel-control right" href="#myCarousel" data-slide="next">
											<span class="glyphicon glyphicon-chevron-right"></span>
										</a>
									</div>
								</div>
							</div>
							<!--Карусель конец -->
						</div>
						<img src="img/ava.jpg" alt="..." class="img-circle">
						<form role="form">
						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputPassword1">Пароль</label>
						    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputFile">File input</label>
						    <input type="file" id="exampleInputFile">
						    <p class="help-block">Example block-level help text here.</p>
						  </div>
						  <div class="checkbox">
						    <label>
						          <input type="checkbox"> Проверить меня
						        </label>
						  </div>
						  <button type="submit" class="btn btn-default"> <a href="index.php">Отправить</a></button>
						</form>
						
	
		</body>

</html>