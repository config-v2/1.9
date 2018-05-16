<? require_once('config.php'); ?><!DOCTYPE html>

<head>

	<meta charset="UTF-8">
	<title>Document</title><meta http-equiv="content-type" content="text/html; utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="author" content="GreyGler" />
    <meta name="copyright" content="https://greygler.github.io" />
	<meta name="keywords" content="Ключевые слова">
    <meta name="description" content="Описание">

	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


<? lands::head($head_index64) ?></head>
<body>
<? lands::body($body_index64) ?>
                    <p>Суперцена! <s> <?= $price_old ?><?= $valuta ?>.</s> 
					<?= $price_new ?><?= $valuta ?>.</p>
					<p>Скидка: <?= $skidka ?></p>
                
				<form id="mform" class="order-form" action="zakaz.php" method="post" onsubmit="if(this.name.value==''){alert('Введите Ваше имя!');return false}if(this.phone.value==''){alert('Введите Ваш номер телефона!');return false}return true;"> 


				
				
				
				<div>ФИО:<br><input maxlength="55" name="name" type="text"> </div>
				<div>Телефон:<br><input class="phone" maxlength="25" name="phone" type="text"></div>
				
				<br>
<input type="submit" value="отправить">
				
				</form> 	


<h2>Отзывы:</h2>			
<p>Иван Иванов, г. <?= $geocity ?></p>
<p>Петр Петров, г.	<?= lands::random_city($country_script); ?></p>
<p>Сидор Сидоров, г. <?= lands::random_city($country_script); ?></p>			
				

            <div id="footer">
                <div class="footer_text">
                     <? lands::seller(); ?>
                      <br>
                    <? lands::politics(); ?>
                    

                </div>
            </div>
       
    


<?  lands::footer(); // Дополнительная часть скриптов, ставим перед </body> ?>


<b>Визитов: </b><br><? print_r($_COOKIE) ?>

    <br>=================<br>
<b>Сервер: </b><br><? print_r($_SERVER); ?>

    <br>=================<br>
<b>Сессии: </b><br><? print_r($_SESSION); ?>

</body>
</html>
