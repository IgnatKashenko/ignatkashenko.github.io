<?php
$post = (!empty($_POST)) ? true : false;
if($post) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$sub .= 'Письмо с сайта https://elkahomesrus.com/ ';
	$error = '';
	if(!$name) {$error .= 'Укажите свое имя. ';}
	if(!$email) {$error .= 'Укажите свое email. ';}
	if(!$phone) {$phone .= 'Укажите номер телефона. ';}
	if(!$error) {
		$address = "propertyinalanya@elkahomesrus.com"; //адрес электронной почты, на которую будут приходить письма
		$mes = "Имя: ".$name."\n\nНомер телефона: " .$phone."\n\nE-mail: ".$email."\n\n";
		$send = mail ($address, $sub, $mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else {echo '<div class="err">'.$error.'</div>';}
}
?>