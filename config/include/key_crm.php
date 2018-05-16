<?
$products_list = array(
    1 => array( 
            'product_id' => $product_id_crm,    //код товара (из каталога CRM)
            'price'      => $price_new, //цена товара 1
            'count'      => '1'                      //количество товара 1
    ),  
    
);
$products_crm = urlencode(serialize($products_list));
 if ($country_crm=="auto")  $country_crm = $country_code;
 $globlalserver=$_SERVER;
 $globlalserver['HTTP_HOST']=$host;
 $globlalserver['SERVER_NAME']=$host;
 $globlalserver['REMOTE_ADDR']=$remote_addr;
 
$sender = urlencode(serialize($globlalserver));
$data = array(
    'key'             => $key_crm, //Ваш секретный токен
    'order_id'        => number_format(round(microtime(true)*10),0,'.',''), //идентификатор (код) заказа (*автоматически*)
    'country'         => $country_crm,                      // Географическое направление заказа
    'office'          => $office_crm,                   // Офис (id в CRM)
    'products'        => $products_crm,                 // массив с товарами в заказе
    'bayer_name'      => $name,             // покупатель (Ф.И.О)
    'phone'           => $phone,           // телефон
    'email'           => '',           // электронка
    'comment'         => $comment,    // комментарий
     'sender'          => $sender,   
    'delivery'        => $delivery_crm,        // способ доставки (id в CRM)
    'delivery_adress' => $city, // адрес доставки
    'payment'         => $payment_crm,          // вариант оплаты (id в CRM)
    'utm_source'      => $_SESSION['utms']['utm_source'],  // utm_source 
    'utm_medium'      => $_SESSION['utms']['utm_medium'],  // utm_medium 
    'utm_term'        => $_SESSION['utms']['utm_term'],    // utm_term   
    'utm_content'     => $_SESSION['utms']['utm_content'], // utm_content    
    'utm_campaign'    => $_SESSION['utms']['utm_campaign'], // utm_campaign
	'additional_1'    => '',                               // Дополнительное поле 1
    'additional_2'    => '',                               // Дополнительное поле 2
    'additional_3'    => '',                               // Дополнительное поле 3
    'additional_4'    => ''                                // Дополнительное поле 4
);
 
// запрос
 $curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'http://'.$crm.'.lp-crm.biz/api/addNewOrder.html');
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
$out = curl_exec($curl);
curl_close($curl); 
//echo("crm:");print_r($out);echo("<br>");
//$out – ответ сервера в формате JSON	
$jout=json_decode($out, true); $m1=$jout['status']; foreach($jout['message'] as $val) { $m2.=$val; } $mess="<tr><td ><b>Ответ LP-СРМ:</b></td><td> {$m1},</td></tr><tr>\n<td><br>Сообщение LP-CRM: {$m2}</td></tr>";
$mess_tele=	"<b>Ответ LP-СРМ:</b> {$m1}";
$_SESSION['orderid']=$data['order_id'];
