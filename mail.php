<?php
phpinfo();
	$message = "Сообщение";
	$to = "123@mail.ru";
	$from = "456@mail.ru";
	$subject = "Тема сообщения";
	$headers = "From: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";

	if (mail($to, $subject, $message, $headers)) {
		echo "true";
	} 
	else echo "false";
	
?>