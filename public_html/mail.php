<?php     

$mail_admin = 'scoutrul@mail.ru';
$mail_kostya = 'runner10@yandex.ru';


// Assigning data from the $_POST array to variables    
$name = $_POST['name'];     
$contact = $_POST['contact'];    
$message = $_POST['message'];       

// Construct email subject    
$subject = 'infoScon.ru (новое сообщение с сайта) / ' . $name;      

// Construct email body     
$body_message = 'Имя: ' . $name . "\r\n";     
$body_message .= 'Контакт: ' . $contact . "\r\n";  
$body_message .= 'Сообщение: ' . $message;  

// Construct email headers     



$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/plain; charset=\"utf-8\"" . "\r\n";

$headers .= 'From: '.$name.' <'.$mail.'>' . "\r\n" .
 'Reply-To: <'.$mail.'>' . "\r\n" .
 'X-Mailer: PHP/' . phpversion();



$mail_sent = mail($mail_admin, $subject, $body_message, $headers);         
$mail_sent = mail($mail_kostya, $subject, $body_message, $headers);         

header("Location: /#sent");

?>

