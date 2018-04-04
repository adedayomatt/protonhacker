<?php
require('mato/lib/php/global.php');

class Request{
	public $db = null;
	 function __construct(){
		 $this->db = new database();
	 }
	 
	 public function addRequest($request_details){
		$stmt = $this->db->prepare_statement("INSERT INTO hacking_service_requests (request_id,client_name,email,phone,task_description,additional_info,pricing,anonymity,payment_method,wallet_address,date_ordered,timestamp)
									VALUES(:request_id,:client_name,:email,:phone,:task_description,:additional_info,:pricing,:anonymity,:payment_method,:wallet_address,NOW(),:timestamp)");
		$stmt->bindValue(':request_id', $request_details['request_id'], PDO::PARAM_INT);
		$stmt->bindValue(':client_name', $request_details['client_first_name'].' '.$request_details['client_last_name'], PDO::PARAM_STR);
		$stmt->bindValue(':email', $request_details['client_email'], PDO::PARAM_STR);
		$stmt->bindValue(':phone', $request_details['client_tel'], PDO::PARAM_STR);
		$stmt->bindValue(':task_description', $request_details['task_description'], PDO::PARAM_STR);
		$stmt->bindValue(':additional_info', $request_details['additional_info'], PDO::PARAM_STR);
		$stmt->bindValue(':pricing', $request_details['pricing'], PDO::PARAM_STR);
		$stmt->bindValue(':anonymity', $request_details['anonymity'], PDO::PARAM_STR);
		$stmt->bindValue(':payment_method', $request_details['payment_method'], PDO::PARAM_STR);
		$stmt->bindValue(':wallet_address', $request_details['wallet_address'], PDO::PARAM_STR);
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
		if(isset($_POST['pay_ready'])){
			if(isset($_POST['payment_method'])){
						$wallet_address = "";
						if($_POST['payment_method'] == 'Bitcoin'){
							$wallet_address = $_POST['BTC_address'];
						}
						else if($_POST['payment_method'] == 'Ethereum'){
							$wallet_address = $_POST['ETH_address'];
						}
						else if($_POST['payment_method'] == 'Bitcoin Cash (BCH)'){
							$wallet_address = $_POST['BCH_address'];
						}
				if($wallet_address != ""){
					if($_POST['task_description'] != ""){
						$req = array_map("clean_input",$_POST);
						$req['request_id'] = time()+rand(1000,9999);
						$req['timestamp'] = time();
						
						$additional_info = "";
						
						$additional_info .= (isset($req['current_messages']) ? $req['current_messages'].'; '  : "");
						$additional_info .= (isset($req['deleted_messages']) ? $req['deleted_messages'].'; '  : "");
						$additional_info .= (isset($req['location_tracking']) ? $req['location_tracking'].'; '  : "");
						$additional_info .= (isset($req['emails']) ? $req['emails'].'; '  : "");
						$additional_info .= (isset($req['calls']) ? $req['calls'].'; '  : "");
						$additional_info .= (isset($req['photoaccess']) ? $req['photoaccess'].'; '  : "");
						$additional_info .= (isset($req['viber_fb_msg']) ? $req['viber_fb_msg'].'; '  : "");
						$additional_info .= (isset($req['snap_msg']) ? $req['snap_msg'].'; '  : "");
						$additional_info .= (isset($req['kiki_msg']) ? $req['kiki_msg'].'; '  : "");
						$additional_info .= (isset($req['microphone_access']) ? $req['microphone_access'].'; '  : "");
						
						$req['additional_info'] = $additional_info;
						$req['wallet_address'] = $wallet_address;
						
						$request = new Request();
						if($request->addRequest($req)){
							$Feedback = 0000; // payment not ready
						}
					}
					else{
					$Feedback = 105; //No service description
				}
			}
			else{
				$Feedback = 104;//No Wallet Address
			}
		}
			else{
				$Feedback = 103;//No Payment method selected
			}
		}
		else{
		$Feedback = 102; // payment not ready
		}
	}
	else{
		$Feedback = 101; // didn't agree to term of service
	}
}