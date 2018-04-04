<?php
require('mato/lib/php/global.php');

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
						if(strlen($_POST['task_description']) >= 20){
							$req = array_map("clean_input",$_POST);
							$req['request_id'] = time()+rand(1000,9999);
							$req['timestamp'] = time();						
							
							$request = new Request();
							if($request->sendRequest($req)){
								$Feedback = 000; // Request submitted successfully
							}
							else{
								$Feedback = 999; //Request submission failed
							}
						}else{
						$Feedback = 104; //description not up to 20 characters
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