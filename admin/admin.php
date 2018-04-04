<?php
require('../resources/mato/lib/php/global.php');

$passwordChangingReport = "";

class admin{
	public $db = null;
	private $password = "";
	private $token = "";
	
	 function __construct(){
		 $this->db = new database();
		$getAdmin = $this->db->query_object("SELECT * FROM admin");
		$admin = $getAdmin->fetch(PDO::FETCH_ASSOC);
		$this->password = $admin['password'];
		$this->token = $admin['token'];
	 }
	 
	 public function verifyAdmin(){
		if(isset($_COOKIE['admin']) && $_COOKIE['admin'] == $this->token){
			return true;
		}
		else{
			return false;
		}
	 }
	 
	 public function setPassword($password){
		@$this->db->query_object("DELETE FROM admin");//First clear the table
		$this->logout();// Log active session out!
		$create = $this->db->prepare_statement("INSERT INTO admin (password,token) VALUES(:password,:token)");
		$create->bindValue(':password', SHA1($password), PDO::PARAM_STR);
		$create->bindValue(':token', SHA1(MD5($password)), PDO::PARAM_STR);
		$create->execute();
		if($create->rowCount() == 1){
			return true;
		}
		else{
			return false;
		}
	 }
	 
	 public function login($password){
		 if(SHA1($password) == $this->password){
			 setcookie('admin',$this->token,time()+1800);// Log admin in for only 30 minutes, password will be required after 30 mins
			 return true;
		 }
		 else{
			 return false;
		 }
	 }

	 public function logout(){
			 setcookie('admin','',time()-1800);
	 }
	
	public function changePassword($oldpassword,$newpassword1,$newpassword2){
		GLOBAL $passwordChangingReport;
		$success = false;
		if(SHA1($oldpassword) == $this->password){
			if($newpassword1 == $newpassword2){
			$q = "UPDATE admin SET password=:pass, token=:token";
			$update= $this->db->prepare_statement($q);
			$update->bindValue(':pass', SHA1($newpassword2), PDO::PARAM_STR);
			$update->bindValue(':token', SHA1(MD5($newpassword2)), PDO::PARAM_STR);
			$update->execute();
			if($update->rowCount() == 1){
				$success = true;
				$this->logout();// Log admin out immmediately!
			}
			else{
				$passwordChangingReport = "Password could not be changed, an error occured!";
				}
			}
			else{
				$passwordChangingReport = "New passwords do no match!";
			}
		}
		else{
				$passwordChangingReport = "Incorrect old password";
		}
		return $success;
	}
	
	 public function fetchRequests(){
		 $requests = array();
		 $counter = 0;
		$getR = $this->db->query_object("SELECT * FROM hacking_service_requests ORDER BY timestamp DESC");
		while($r = $getR->fetch(PDO::FETCH_ASSOC)) {
		$requests[$counter]['r_id'] = $r['request_id'];
		$requests[$counter]['email'] = $r['client_email'];
		$requests[$counter]['description'] = $r['task_description'];
		$requests[$counter]['date'] = $r['date_ordered'];
		$requests[$counter]['timestamp'] = $r['timestamp'];
		$counter++;
	 }
	 return $requests;
	}
	
	function since($timestamp){
		$time = time() - $timestamp;
			if($time<60){
				$since = $time.'sec ago';
			}
			else if($time>=60 && $time<3600){
				$since = round(($time/60)).'min ago';
			}
			else if($time>=3600 && $time<86400){
				$since = round(($time/3600)).'h, '.(($time/60)%60).'min ago';
			}
			else if($time>=86400 && $time<604800){
				$since = round(($time/86400)).'d ago, '.date('l, M d ',$timestamp);
			}
			else if($time>=604800 && $time<18144000){
				$since =round(($time/604800)).'wk ago, '.date('M d  ',$timestamp);
			}
			else{
				$since = "invalid time";
			}
		return $since;
	}
}
?>