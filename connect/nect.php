<?php
	$db_s 	= 'localhost';
	
	$db_u 	= 'root';
	$db_p 	= 'test@dental';
	

	$db_n 	= 'system';
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
