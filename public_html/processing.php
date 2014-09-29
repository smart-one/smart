<?php 	//processing.php


if(isset($_POST)){

	foreach ($_POST as $key => $value) {

		if(stristr($key, "name")){
			$data .= "Имя: ". htmlspecialchars($value)."\n";
		}
		elseif(stristr($key, "phone")){
			if($value == "") die("spam");
			$data .= "Телефон: ". htmlspecialchars($value)."\n";
		}
		elseif(stristr($key, "email")){
			$data .= "Почта: ". htmlspecialchars($value)."\n";
		}
		else{
			$extra .= htmlspecialchars($key).": ".htmlspecialchars($value)."\n";
		}
	}

	$data .= $extra;

	$mail = "egor.zubarev@gmail.com, alex_19@mail.ru, webdev@sms.ru, alex19@sms.ru";
	$subject="=?utf-8?B?". base64_encode("Новая заявка с сайта: Smartidea.su"). "?=";	
	$data .= date("d.m.yг. H:i:s", time() );

	$headers='';
    $headers.="Mime-Version: 1.0\r\n";
    $headers.="Content-type: text/plain"."; charset=UTF-8\r\n";

    mail($mail, $subject, $data, $headers);

    echo "success";
    
}

?>