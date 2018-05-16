<? 
session_start();
include ("logins.php");
if (($_SESSION['login']==$login) AND ($_SESSION['password'])==$password) { ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <? include("head.php") ?>
 <style>
.form{width: 850px; margin: <? if ($_POST['product']=="password") echo "100px"; else echo("0"); ?> auto auto auto;}
.form input, textarea {width: 549px;}
</style>  
  </head>
  <body>
  <div class="exit"><a href="exit.php" title="Выйти из конфигуратора."> <i class="fa fa-power-off fa-lg"></i> Выйти</a></div>
  
 <? $include=$_SESSION['product'].".php";
 $save=$_SESSION['product']."_save.php";
if ($_POST['product']=="password") $th1="Настройки доступа для"; else $th1="Основные настройки для";
 ?>
  <h1><?= $th1."<br><strong>".$_SERVER['SERVER_NAME'].str_ireplace('/config/options.php','', $_SERVER['PHP_SELF']);?></strong></h1>
 <a href="https://youtu.be/I56D87MHQnI" title="Видеоинструкция по конфигуратору">Видеоинструкция</a>
    <form class="form" enctype="multipart/form-data" action="<?= $save ?>" method="POST">
 <? if ($_GET['save']=='1') echo ('<div class="ok">Данные успешно сохранены!</div>');
 else if ($_GET['save']=='2') echo('<font color="red">Ошибка записи!</font>');
include("{$include}") ?>
<p><input class="save" type="submit" value="&#10004; Сохранить"></p><br>
</form>

      </body>
</html>
<? }
else
header("Location: index.php?pass=1"); ?>