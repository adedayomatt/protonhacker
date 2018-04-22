<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer-6.0.5/src/Exception.php';
require 'PHPMailer-6.0.5/src/PHPMailer.php';
require 'PHPMailer-6.0.5/src/SMTP.php';


class EMAIL{
	private $mailer;
	
	private $client;
	private $subject;
	private $body;
	
	
	function __construct($client){
		$this->client = $client;
		
		//Set up the SMTP
		$this->mailer = new PHPMailer;
        $this->mailer->isSMTP();
        $this->mailer->SMTPSecure = "ssl"; 
        $this->mailer->Host = 'cpanel-box5659.bluehost.com';
        $this->mailer->Port = 465;
        $this->mailer->CharSet = 'utf-8';
        $this->mailer->SMTPAuth = true;
	}
	
	public function sendHackersCopy($subject,$body){//Hacker's copy of mail
		$mail = $this->mailer; //get the mailer object
		
        $mail->Username = 'request@protonhacker.com';
        $mail->Password = 'HackTheFuck';
        $mail->setFrom('request@protonhacker.com', 'Hacking Request');
        $mail->addAddress('hacker@protonhacker.com');
        $mail->addReplyTo($this->client);
        $mail->Subject = $subject;
        $mail->Body = $body;
		
		 if (!$mail->send()){
			 echo 'email delivered to the hacker <br/>';
            return true;
        } else {
			 echo 'email delivery to the hacker failed  Reason:'.$mail->ErrorInfo.' <br/>';
            return $mail->ErrorInfo;
        }
	}		

	public function sendClientCopy($subject,$body){
		$mail = $this->mailer; //get the mailer object
		
        $mail->Username = 'hacker@protonhacker.com';
        $mail->Password = '1<html>Artificial</html>';
        $mail->setFrom('hacker@protonhacker.com', 'ProtonHacker Team');
        $mail->addAddress($this->client);
        $mail->addReplyTo('hacker@protonhacker.com', 'ProtonHacker Team');
        $mail->Subject = $subject;
        $mail->Body = $body;
		
		 if ($mail->send()){
			 echo 'email delivered to the client <br/>';
            return true;
        } else {
			 echo 'email delivery to the client failed Reason:'.$mail->ErrorInfo.' <br/>';
            return $mail->ErrorInfo;
        }
	}		
}

 ?>
