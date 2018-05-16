<?
if (($_POST['valuta']!="") OR ($_POST['product']!="")){
require_once("class/save.class.php");

$fp1 = fopen('value1.php', 'w+');
$fp2 = fopen('../config.php', 'w+');
$ver=$config['ver'];
flock($fp1, LOCK_EX); // Блокирование файла для записи
flock($fp2, LOCK_EX); // Блокирование файла для записи
$file_conf="Configuration v.{$ver} for LandingPage: ";
$last_edit="Last edition by ".date('d.m.Y, h:i:s');
//$create="Created by ConfigLand";
$power1=$config['powered'];
$power2=$config['site_conf'];
$text="<?php\n/* ".str_repeat("* ", 22)."\n";
$text.=" * ".str_pad($file_conf, 41, " ", STR_PAD_BOTH)." *\n";
$text.=" * ".str_pad($_SERVER['SERVER_NAME'], 41, " ", STR_PAD_BOTH)." *\n";
$text.=" * ".str_pad($last_edit, 41, " ", STR_PAD_BOTH)." *\n";
$text.=" ".str_repeat("* ", 22)."*/\n\n";
$text2=$text."session_start();\nrequire_once(\"config/class/functions.class.php\");\nrequire_once(\"config/class/lands.class.php\");\nrequire_once(\"config/define.php\");\n";

if ($_FILES["upsel_pic"]["name"]!="") move_uploaded_file($_FILES["upsel_pic"]["tmp_name"], "upsel_img/".$_FILES["upsel_pic"]["name"]);
if ($_FILES["og_pic"]["name"]!="") move_uploaded_file($_FILES["og_pic"]["tmp_name"], "../".$_FILES["og_pic"]["name"]);

 foreach($_POST as $key => $value) {
	//$value = str_replace("'", "\'", $value);
	
	//echo("{$key} = {$value}<br>");
	
	if (stripos($key, "64")) {$value_save=base64_encode($value); $value=base64_encode($value);} else {$value_save=save_config::config($value);
	$value = str_replace('"', '\"', $value);}
	//if (($key=="contact_email") AND ($value=="")) $value=$_POST['email'];
  
		//$s="$".$key." = "."'{$value_save}';\n";
		$s="$".$key." = \"".$value."\";\n";
		$s2="$".$key." = \"".$value_save."\";\n";
        //echo("{$key} = {$value_save}<br>");
	$text.=$s; 
	$text2.=$s2;
}
if ($_POST['price_old_select']=='1') 		{$text.="$"."price_old = floor(($"."price_new/(100-$"."skidka))*100);\n"; $text2.="$"."price_old = floor(($"."price_new/(100-$"."skidka))*100);\n";}
else {$text.="$"."skidka = 100-floor(($"."price_new/$"."price_old)*100);\n"; $text2.="$"."skidka = 100-floor(($"."price_new/$"."price_old)*100);\n";}
if ($_FILES["upsel_pic"]["name"]!=""){
$text.="$"."upsel_pic = '{$_FILES["upsel_pic"]["name"]}';\n"; 
$text2.="$"."upsel_pic = '{$_FILES["upsel_pic"]["name"]}';\n";
}
if ($_FILES["og_pic"]["name"]!=""){
$text.="$"."og_pic = '{$_FILES["og_pic"]["name"]}';\n"; 
$text2.="$"."og_pic = '{$_FILES["og_pic"]["name"]}';\n";
}
$text.="$"."ver='".$ver."';\n"."$"."power1='".$power1."';\n"."$"."power2='".$power2."';\n".'$time_land=3;'."\n";

//$footer.='$os=getOS($_SERVER[\'HTTP_USER_AGENT\']);'."\n";
$footer.="\n/* ".str_repeat("* ", 22)."\n";
//$footer.=" * ".str_pad($create, 41, " ", STR_PAD_BOTH)." *\n";
$footer.=" * ".str_pad($power1, 41, " ", STR_PAD_BOTH)." *\n";
$footer.=" * ".str_pad($power2, 41, " ", STR_PAD_BOTH)." *\n";
$footer.=" ".str_repeat("* ", 22)."*/\n\n";
$text.="{$footer}?>\n";
$sender=save_config::config($_POST['sender']);
$text2.="$"."header=\"Content-type: text/html;charset=utf-8\\"."r\\"."nFrom: "."{"."$"."sender"."}"."\\"."r\\"."n\";\n";
$text2.="\n{$footer}\n?>\n";
fwrite($fp1, $text);
fwrite($fp2, $text2);
flock($fp1, LOCK_UN); // Снятие блокировки
flock($fp2, LOCK_UN); // Снятие блокировки
fclose($fp1);
fclose($fp2);
unlink('value.php');
rename("value1.php", "value.php");
$save=1;
}
else{
	$save=2;
}

$suces_url="Location: options.php?save={$save}#".$_POST['button_ref'];
header($suces_url);
?>