<?php
require_once dirname(__FILE__) . '/vendor/autoload.php';

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'SSL'))
  ->setUsername('euc0119@gmail.com')
  ->setPassword('scuuegfektqcrcut')
;

$result = $mailer->send($message);

if($json = json_decode(file_get_contents("php://input"), true)) {
    $notify = file_get_contents("php://input");
    
    $mailer = new Swift_Mailer($transport);

    $message = (new Swift_Message('Notificación de mercado pago prueba'))
    ->setFrom(['euc0119@gmail.com' => 'Emmanuel'])
    ->setTo(['euc0119@gmail.com'])
    ->setBody($notify);
} 
?>