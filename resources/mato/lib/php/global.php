<?php
error_reporting( E_ALL | E_ERROR | E_STRICT | E_PARSE);
function handleError($e_no, $e_str,$e_file,$e_line){
$errorLog = "
SCRIPT ERROR: 

Error code: [$e_no] 

Technical Message: $e_str 

File: $e_file 

Line: $e_line 

Page Accessing: ".$_SERVER['PHP_SELF'];
$error = new pageError();
$error->report_error(tools::error_message(),$errorLog,__FILE__,__CLASS__,__FUNCTION__,__LINE__);
    }
	
set_error_handler("handleError");

require('param.php');

class database{
	static $connection = null;
	
	function __construct(){
		$host = config::$db_host;
		$db = config::$db_name;
		$user = config::$db_user;
		$password = config::$db_password;
		try{
			
		database::$connection = new PDO("mysql:host=$host;dbname=$db", $user, $password);
		//echo "PDO connection successful!";
		}
		catch (PDOException $e) {
			//echo 'Connection failed: ' . $e->getMessage();
				$er = new pageError();
				$er->report_error(tools::error_message(),'CONNECTION ERROR: '.$e->getMessage(),__FILE__,__CLASS__,__FUNCTION__,__LINE__);
				die();

		}
	}
	public function query_object($query){
		if(database::$connection != null){
			try{
				$obj = database::$connection->query($query);
				return $obj;
			}
			catch (PDOException $e) {
				echo 'Query failed: ' . $e->getMessage();
				$er = new pageError();
				$er->report_error(tools::error_message(),'QUERY ERROR: '.$e->getMessage(),__FILE__,__CLASS__,__FUNCTION__,__LINE__);
				die();
			}
		}
	}

public function prepare_statement($statement){
	try{
			$obj = database::$connection->prepare($statement);
			return $obj;
	}
	catch (PDOException $e) {
				echo 'Query Preparation Failed failed: ' . $e->getMessage();
				$er = new pageError();
				$er->report_error(tools::error_message(),'QUERY ERROR: '.$e->getMessage(),__FILE__,__CLASS__,__FUNCTION__,__LINE__);
				die();
			}
	
}
	public function close(){
		database::$connection = null;
	}

}


class tools{
	public $one_day_timestamp = 86400;
	
	static function no_connection_page(){
		$page = "
			<html>
				<head>
					<title>Connection failed!</title>
				</head>
				<body style=\"background-color:#20435C;\">
					<div style=\"padding:10%; line-height:25px;color:white; text-align:center\">
						<img src=\"http://192.168.173.1/shelter/resrc/gifs/icon-wlan.gif\" style=\"width:200px; height:200px\"/>
						<h2 align=\"center\">No Connection to Server</h2>
						<p align=\"center\">Connection to the server could not be established. We are sorry for any inconviniency this might bring you and please be assured that we are working hard to resolve it soon</p>
					</div>
				</body>
			</html>
			";
		return $page;
    }
	
	static function unavailable_page(){
		$page = "
			<html>
				<head>
					<title>Page not Available!</title>
				</head>
				<body style=\"background-color:#20435C;\">
					<div style=\"padding:1%; width:70%;margin:auto; line-height:25px; background-color:white; color:#20435C;border-radius:5px\">
						<h2 align=\"center\">Page temporarily not available.</h2>
						<p align=\"center\">This page you are trying to view is temporarily not available, it may be under maintainance. We are sorry for any inconviniency this might bring you. You can <a href=\"$root\">visit our homepage</a></p>
					</div>
				</body>
			</html>
			";
		return $page;
	}
	
	static function error_message(){
		$msg = "
			<div style=\"background-color:white; color:red; width:90%;margin:5% auto;padding:20px;text-align:center; border:1px solid #e3e3e3;border-radius:5px;\">
				<h1> Ooops! Looks like something went wrong!</h1>
				<p>A problem has been encountered while loading this page,
				this error has been logged and please be assured that we'll get it fixed soon.</p>
			</div>
		";
		return $msg;
	}
	
	function clean_input($input){
		//return database::$connection->real_escape_string(trim(htmlentities($input)));
		return trim(htmlentities($input));
	}

	function halt_page(){
			database::$connection = null;
			echo "<pre>page halted!</pre>";
			die();
	}
	function relative_url(){
		$rel = "";
		$i = 2;
		while($i < substr_count($_SERVER['PHP_SELF'],'/')){
			$rel .= '../';
			$i++;
		}
		return $rel;
	}
	
	function redirect_to($url){
		GLOBAL $root;
		$goto = ($url=='home' ? $root : $url);
		$this->close();
		header("location: $goto");
		die();
	}	
}


class pageError{
	public function report_error($feedback,$msg,$file,$class,$function,$line){
		echo $feedback;
        $errorLog = "*** error: 
		$msg 
		Reported From: [$file >> $class :: $function >> at line $line] ***";
		$this->logError($errorLog);
	}
	
	public function logError($e){
		$tool = new tools();
		$logFile = $tool->relative_url().config::$errorLog_path.'/error_log_'.time().'.txt';
		$file = fopen($logFile,"a+");
		$error = '['.date('Y : m : d : H : i : s',time()).'] 
	
		'.$e;
		if(fwrite($file,$error)){
			echo "<pre>error logged!</pre>";
		}else{
			echo "<pre>error not logged!</pre>";
		}
		fclose($file);
	
		if(file_exists($logFile)){
			echo "<pre>error has been reported!</pre>";
		}
		else{
			echo "<pre>Error not reported</pre>";
		}
		$tool = new tools();
		$tool->halt_page();
	}
}





