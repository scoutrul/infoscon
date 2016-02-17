<?php     

$mail_admin = 'info@infoscon.ru';

// Assigning data from the $_POST array to variables    
$contact_org = $_POST['contact_org'];     
$contact_face = $_POST['contact_face'];     
$contact_email = $_POST['contact_email'];     
$contact_phone = $_POST['contact_phone'];    
$contact_text = $_POST['contact_text'];       

// Construct email subject    
$subject = 'infoScon.ru (новое сообщение с сайта(Контакты)) / ' . $contact_org;      

// Construct email body     
$body_message = 'Организация: ' . $contact_org . "\r\n";    
$body_message .= 'Контактное лицо: ' . $contact_face . "\r\n";    
$body_message .= 'Телефон: ' . $contact_phone . "\r\n";  
$body_message .= 'E-mail: ' . $contact_email . "\r\n";     
$body_message .= 'Сообщение: ' . $contact_text;  

// Construct email headers     



$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= "Content-type: text/plain; charset=\"utf-8\"" . "\r\n";

$headers .= 'From: '.$contact_org.' <'.$mail.'>' . "\r\n" .
 'Reply-To: <'.$mail.'>' . "\r\n" .
 'X-Mailer: PHP/' . phpversion();



$mail_sent = mail($mail_admin, $subject, $body_message, $headers);         

header("Location: /#sent");

?>

