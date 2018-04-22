<?php

require('mato/lib/php/global.php');
require('mato/lib/php/mail/mailer.php');

class Request{
	public $db = null;
	 function __construct(){
		 $this->db = new database();
	 }
	 
	 public function sendRequest($request_details){
		$stmt = $this->db->prepare_statement("INSERT INTO hacking_service_requests (request_id,client_email,task_description,date_ordered,timestamp)
									VALUES(:request_id,:client_email,:task_description,NOW(),:timestamp)");
		$stmt->bindValue(':request_id', $request_details['request_id'], PDO::PARAM_INT);
		$stmt->bindValue(':client_email', $request_details['client_email'], PDO::PARAM_STR);
		$stmt->bindValue(':task_description', $request_details['task_description'], PDO::PARAM_STR);
		$stmt->bindValue(':timestamp', $request_details['timestamp'], PDO::PARAM_INT);
		$stmt->execute();
		
		if($stmt->rowCount() == 1){
			return true;
		}
		else{
			return false;
		}
	 }
}

function clean_input($input){
	//return $this->connection->real_escape_string(trim(htmlentities($input)));
	return trim(htmlentities($input));
}
if(isset($_POST['submit_request'])){
	if(isset($_POST['agreement'])){
		if(isset($_POST['client_email']) && $_POST['client_email'] != '' && strpos($_POST['client_email'],'@') != 0 && strpos($_POST['client_email'],'.') != 0){
					if($_POST['task_description'] != ""){
							$req = array_map("clean_input",$_POST);
							$req['request_id'] = time()+rand(1000,9999);
							$req['timestamp'] = time();						
							
								//Send emails here
							$clientEmail = $req['client_email'];
							$clientMailSubject = "Your Request Was Received!";
							$clientMailBody = "We received your request for a hacking service from our website, we are glad to serve you, here is a copy of the request you sent us:
												\n\n\"".$req['task_description']."\"
												\n\nOur team will review your task and get back to you via this your email regarding the requirement and the payment details
												\n\nFeel free to contact us via this mail for further assistance and enquiry";
												
							$hackerMailSubject = "New Hacking Request Received!";
							$hackerMailBody = "Hey hacker! you just got a new hacking request from $clientEmail , This is what was given as the task descriptions:
												\n\n\"".$req['task_description']."\"	
												\n\nYou will need to reply this client with the payment details and other important information you might need for the task...So what you waiting for??? GET TO WORK COWBOY!
												\n click on $clientEmail to reply this client";	
												
							$mail =  new EMAIL($clientEmail);
							$sendToHacker = $mail->sendHackersCopy($hackerMailSubject,$hackerMailBody);
							$sendToClient = $mail->sendClientCopy($clientMailSubject,$clientMailBody);
							
							//Adding it to the database
							$request = new Request();
							if($request->sendRequest($req)){
								$Feedback = 000; // Request submitted successfully
							}
							else{
								$Feedback = 999; //Request submission failed
								}										
						}
					
					else{
					$Feedback = 103; //No service description
				}
		}else{
			$Feedback = 102; //No valid email address
		}
	}
	else{
		$Feedback = 101; // didn't agree to term of service
	}
}