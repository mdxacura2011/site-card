<?php

session_name("fancyform");
session_start();


$_SESSION['n1'] = rand(1,20);
$_SESSION['n2'] = rand(1,20);
$_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


$str='';
if($_SESSION['errStr'])
{
	$str='<div class="error">'.$_SESSION['errStr'].'</div>';
	unset($_SESSION['errStr']);
}

$success='';
if($_SESSION['sent'])
{
	$success='<h1>Thank you!</h1>';
	
	$css='<style type="text/css">#contact-form{display:none;}</style>';
	
	unset($_SESSION['sent']);
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta name="robots" content="nofollow"/>
<meta http-equiv="Content-Type"  content="text/php; charset=utf-8">
<meta name="keywords" content=" ">
<meta name="description" content=" ">
<title>Контакты</title>
<meta name="copyright" content="agsmechanic">
 <link rel="canonical" href="http://agsmechanic.com">
<!--Стили с основного-->
<link rel="stylesheet" type="text/css" href="style/global.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  
  <link rel="stylesheet" href="css/screen.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
  <link href='http://fonts.googleapis.com/css?family=Fredoka+One|Open+Sans:400,700' rel='stylesheet' type='text/css'>

  <script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(){
					$('.caption').animate({
						bottom:-35
					},100);
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						
						console.log(current);
					};
				}
			});
		});
	</script>
  <!---->
  
<link rel="stylesheet" type="text/css" href="jqtransformplugin/jqtransform.css" />
<link rel="stylesheet" type="text/css" href="formValidator/validationEngine.jquery.css" />
<link rel="stylesheet" type="text/css" href="style/demo.css" />

<?=$css?>


<script type="text/javascript" src="jqtransformplugin/jquery.jqtransform.js"></script>
<script type="text/javascript" src="formValidator/jquery.validationEngine.js"></script>

<script type="text/javascript" src="js/script.js"></script>

</head>

<body>
	<div id="wrapper">
		<div id="header">
			<div id="logo"><a href="index.php"><img src="images/logo.png" alt="Логотип agsmechanic"> </a></div>
			<div id="textik"></div>
			<div id="mainmenu">
			<a href="index.php">главная</a>
			<a href="produktciya.php">продукция</a>
			<a href="contact.php">контакты</a>
			</div>
<div id="container_body">
	<div id="container">
			<div id="slides">
				<div class="slides_container">
					<div>
						<a title="Плазма" target="_blank"><img src="img/slide-1.jpg" width="500" height="180" alt="Slide 1"></a>
						<div class="caption" style="bottom:0">
							<p>Изготовление Машин Термической Резки</p>
						</div>
					</div>
					<div>
						<a title="Токарные ЧПУ по дереву" target="_blank"><img src="img/slide-2.jpg" width="500" height="180" alt="Slide 2"></a>
						<div class="caption">
							<p>Изготовление Токарных Машин</p>
						</div>
					</div>
					<div>
						<a title="Фрезерные ЧПУ по дереву" target="_blank"><img src="img/slide-3.jpg" width="500" height="180" alt="Slide 3"></a>
						<div class="caption">
							<p>Изготовление Фрезерных Машин</p>
						</div>
					</div>
					<div>
						<a title="Детали под заказ" target="_blank"><img src="img/slide-4.jpg" width="500" height="180" alt="Slide 4"></a>
						<div class="caption">
							<p>Изготовление Деталей под Заказ</p>
						</div>
					</div>
					<div>
						<a title="Конструирование" target="_blank"><img src="img/slide-5.jpg" width="500" height="180" alt="Slide 5"></a>
						<div class="caption">
							<p>Конструирование Оборудования</p>
						</div>
					</div>
					<div>
						<a title="Шаговые двигатели, драйвера, контролеры..." target="_blank"><img src="img/slide-6.jpg" width="500" height="180" alt="Slide 6"></a>
						<div class="caption">
							<p>Детали и Комплектующие</p>
						</div>
					</div>
					<div>
						<a title="Ремонт" target="_blank"><img src="img/slide-7.jpg" width="500" height="180" alt="Slide 7"></a>
						<div class="caption">
							<p>Ремонт</p>
						</div>
					</div>
				</div>
				<a href="#" class="prev"><img src="img/arrow-prev.png" width="24" height="43" alt="Arrow Prev"></a>
				<a href="#" class="next"><img src="img/arrow-next.png" width="24" height="43" alt="Arrow Next"></a>
			</div>
	</div>
</div>
			
		</div>
		<div id="slider">
		</div>
		<div id="wrContent">
			<div id="container_1">
<!--ФОРМА-->
<div class="forma">
<div id="main-container">
	<div id="form-container">
    <h1>Форма обратной связи</h1>
    <h2>Здесь вы можете отправить нам сообщение.</h2>
    
    <form id="contact-form" name="contact-form" method="post" action="submit.php">
      <table width="100%" border="0" cellspacing="0" cellpadding="5">
        <tr>
          <td width="15%"><label for="name">Ваше имя:</label></td>
          <td width="70%"><input type="text" class="validate[required,custom[onlyLetter]]" name="name" id="name" value="<?=$_SESSION['post']['name']?>" /></td>
          <td width="15%" id="errOffset">&nbsp;</td>
        </tr>
        <tr>
          <td><label for="email">Ваш e-mail:</label></td>
          <td><input type="text" class="validate[required,custom[email]]" name="email" id="email" value="<?=$_SESSION['post']['email']?>" /></td>
          <td>&nbsp;</td>
        </tr>
		<tr>
          <td><label for="telephone">Телефон:</label></td>
          <td><input type="text" class="validate[required,custom[telephone]]" name="telephone" id="telephone" value="<?=$_SESSION['post']['telephone']?>" /></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
        	 <td colspan="3"><h2>Выберите тему для письма и напишите сообщение</h2></td>
        </tr>
        <tr>
          <td><label for="subject">Тема письма:</label></td>
          <td><select name="subject" id="subject">
            <option value="" selected="selected"> - выбрать тему -</option>
            <option value="Фрезерный ЧПУ">Фрезерный ЧПУ</option>
            <option value="Плазма ЧПУ">Плазма ЧПУ</option>
            <option value="Токарный по дереву">Токарный по дереву</option>
            <option value="Металлообработка">Металлообработка</option>
            <option value="Конструирование">Конструирование</option>
				<option value="Другое">Другое</option>
          </select>          </td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td valign="top"><label for="message">Сообщение:</label></td>
          <td><textarea name="message" id="message" class="validate[required]" cols="35" rows="5"><?=$_SESSION['post']['message']?></textarea></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
        	 <td colspan="3"><h2>Введите капчу и нажмите "Отправить".</h2></td>
        </tr>
        <tr>
          <td><label for="captcha"><?=$_SESSION['n1']?> + <?=$_SESSION['n2']?> =</label></td>
          <td><input type="text" class="validate[required,custom[onlyNumber]]" name="captcha" id="captcha" /></td>
          <td valign="top">&nbsp;</td>
        </tr>
        <tr>
          <td valign="top">&nbsp;</td>
          <td colspan="2"><input type="submit" name="button" id="button" value="Отправить" />
          <input type="reset" name="button2" id="button2" value="Очистить" />
          
          <?=$str?>          <img id="loading" src="img/ajax-load.gif" width="16" height="16" alt="loading" /></td>
        </tr>
      </table>
      </form>
      <?=$success?>
    </div>
	</div>
</div>
<!--ФОРМА-->
<div class="clear"></div>
			</div>
				
					<div class="line"></div>
		</div>

			
			<div id="social_networks">
				<div id="net">
						<ul> 
							<li><a href="#"><img src="images/facebook.png" alt="Фейсбук" title="Фейсбук" width="35" height="35"></a></li>
							<li><a href="#"><img src="images/twitter.png" alt="Твиттер" title="Твиттер" width="35" height="35"></a></li>
							<li><a href="#"><img src="images/vkontakte.png" alt="В контакте" title="В контакте" width="35" height="36"></a></li>
							<li><a href="#"><img src="images/googl.png" alt="Гугл" width="35" title="Гугл" height="35"></a></li>
							<li><a href="#"><img src="images/odnoklassniki.png" alt="Одноклассники" title="Одноклассники" width="35" height="35"></a></li>
							<li><a href="#"><img src="images/yaru.png" alt="Я.ру" title="Я.ру" width="35" height="35"></a></li>
							<li><a href="#"><img src="images/mail_ru.png" alt="Я.ру" title="Мейл ру" width="102" height="35"></a></li>
						</ul>
				</div>
				<div id="recommend">
						<ul> 
							<li><script type="text/javascript" rel="nofollow" src="//yandex.st/share/share.js"
								charset="utf-8"></script>
								<div class="yashare-auto-init" data-yashareL10n="ru"
								 data-yashareType="button" data-yashareQuickServices="yaru,vkontakte,facebook,twitter,odnoklassniki,moimir,gplus"></div> 
							</li>
						</ul>
				</div>
				<div class="clear"></div>
			</div>	
		</div>
		

		
	</div>
		<div id="footerWrapper">
			<div id="footer">
				<div id="mainmenu_footer">
					<a href="index.php">главная</a>
					<a href="produktciya.php">продукция</a>
					<a href="contact.php">контакты</a>
				</div>
				<div id="Copyright">
					<p>copyright&copy;2013<a href="1.php">Sergey.</a>All rights reserved</p>
				</div>
			</div>
		</div>

</body>
</html>
