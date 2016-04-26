<?php
	$base = $_SERVER['DOCUMENT_ROOT'];
	include "$base/connect/nect.php";
	include "validate_email.php";

	$user = $_POST['user'];
	$email = $_POST['email'];

	if(!empty($email)){
		$email = validate_email(check($email));
		if(!empty($email)){
			$sql = "SELECT lb_umail from lb_login where lb_umail= :email";
			$stmt = $conn->prepare($sql);
			$stmt->bindParam(':email',$email);
			$rows = $stmt->execute();
			$row_count = $stmt->rowCount();
			if($row_count > 0){
				echo "<p style='color:red'>email already registered.</p>";
			}
			else{
				echo "<p style='color:green'>available</p>";
			}
		}
		else
		{
			echo "<span style='color:red'>Please enter valid email.</span> ";
		}
	}
	else if(!empty($user)){
		$user = check($user);
		if(!empty($user))
		{
			if(strlen($user) < 4)
			{
				echo "<span style='color:red'>Please choose username greater than 3 characters. </span>";
			}
			else
			{
				$sql = "SELECT lb_user from lb_login where lb_user= :user";
				$stmt = $conn->prepare($sql);
				$stmt->bindParam(':user',$user);
				$rows = $stmt->execute();
				$row_count = $stmt->rowCount();
				if($row_count > 0){
					echo "<p style='color:red'>username not available</p>";
				}
				else{
					echo "<p style='color:green'>available</p>";
				}
			}
		}
		else
		{
			echo "<p style='color:red'>Please enter valid username. </p>";
		}
	}
	else{
		;
	}
	$conn = "";
	
?>