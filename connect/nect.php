<?php
	$db_s 	= 'localhost';
	//$db_u 	= 'mysql_jiitpiyush';
	//$db_p 	= '#Neverused1%%';
	
	$db_u 	= 'root';
	$db_p 	= 'password';
	

	$db_n 	= 'linkbdb';
	$table		= 'lb_engg';
	$history_table = 'lb_user_history';
	$bookmark_table = 'lb_user_bookmark';
	$vote_table ='lb_vote';
	try{
		$conn = new PDO("mysql:host=$db_s;dbname=$db_n", $db_u, $db_p);
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	
	catch(PDOException $e){
		echo "Error:".$e->getMessage();
	}
?>