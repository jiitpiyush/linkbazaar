<?php $base = $_SERVER['DOCUMENT_ROOT']; ?>

<?php
	if(!empty($_POST['email'])){
		$email = $_POST['email'];
	}
	if(!empty($_POST['pin'])){
		$pin = $_POST['pin'];
	}
 	
?>
<html>
<head>

		<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
		<link rel="icon" type="image/png" href="/images/logo.png" />
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
		<meta http-equiv='cache-control' content='no-cache' />
		<meta http-equiv='expires' content='Tue, 01 Jan 1980 1:00:00 GMT' />
		<meta http-equiv='pragma' content='no-cache' />
		<meta name='description' content=''>
		<title>LinkBazaar | Forgot Password</title>
		<link href='/css/bootstrap.min.css' rel='stylesheet'>
		<style type='text/css'>
		body{padding: 70px;}
		.red
		{
			color:;
			background: #ffebe8;
			border: 1px solid #dd3c10;
		}
		.yellow
		{
			background: #FFF9D7;
			border: 1px solid #E2C822;		
		} 
		.box
		{
			padding: 10px;
			text-align: center;
			font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
			font-size: 11px;
		}
		</style>
</head>
	<body onload=dataInput()>
		<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
			<div class='container'>
				<div class='navbar-header'>
					<button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1'>
						<span class='sr-only'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
						<span class='icon-bar'></span>
					</button>
					<a class='navbar-brand' href='/'><img src='/images/logo.png'/></a>
				</div>
				<div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
					<ul class='nav navbar-nav navbar-right'>
						<li><a href='/login/signup.php'>Sign Up</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<center>
				<div class='container' style='max-width:300px;position: absolute; left: 50%;'>
					<div style='position: relative; left: -50%;'>
						<form class='form-signin' action='/login/forgot_pass.php' method=post>
							<h2 class='form-signin-heading'>Forgot Password</h2><br>
						<?php
							include "validate_email.php";
							date_default_timezone_set('Asia/Kolkata');
								if(!empty($email))
								{
									if(!empty(validate_email($email)))
									{
										//check in db email
										include "$base/connect/nect.php";
										$e_query = "SELECT lb_umail from lb_login WHERE lb_umail=?";
										$stmt = $conn->prepare($e_query);
										if(!($stmt->execute(array($email))))
										{
											echo "Error: ".$stmt->getMessage();
											die();
										}

										if($stmt->rowCount() > 0)
										{

											//$db_pin = get db pin;
											$time = date('Y-m-d H:i:s');
											//echo $time;
											$pin_query = "SELECT pin,w_a FROM forgot_pass_op WHERE lb_umail=? AND pin_time > ?";
											$stmt = $conn->prepare($pin_query);
											
											if(!($stmt->execute(array($email,$time))))
											{
												echo "Error: ".$stmt->getMessage();
												die();
											}
											

											if($stmt->rowCount() > 0)
											{
												$pin_row = $stmt->fetch(PDO::FETCH_ASSOC);
												$db_pin = $pin_row['pin'];
												//$attempt = get attempt
												$attempt = $pin_row['w_a'];
											}
											else
											{
												$db_pin = '';
												$attempt = '';
											}
											
											if(!empty($db_pin) && $attempt < 11)
											{
												
												if(empty($pin))
												{
													echo "<input id='inputEmail' class='form-control' placeholder='Enter email' name='email' type='hidden' value=".$email." required autocomplete='false'><br>
															<input id='inputPin' onmouseover=dataInput()  class='form-control' placeholder='Enter Pin' name='pin' value='' value='' type='tel' required autocomplete='false'><br>
															<input id='inputPass' class='form-control' placeholder='Enter New Password' name='pass' value='' type='password' required autocomplete='false'><br>
															<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
												}
												else
												{
													if($db_pin == $pin)
													{

 														$password = $_POST['pass'];
														if(strlen($password) > 7 )
														{
															//Change Password
 															//$pass = md5($password);

 															$stmt = $conn->prepare("SELECT u_salt FROM lb_login WHERE lb_umail= :email");
													        $stmt->bindParam(':email', $email, PDO::PARAM_STR,5);
													        $stmt->execute();
													        $row_count = $stmt->rowCount();
													        
													        if($row_count == 1)
													        {
													            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
													            $salt =strval($rows['u_salt']);
													            $options = [
													                'cost' => 11,
													                'salt' => $salt
													            ];
													            $pass = password_hash(strval($password), PASSWORD_BCRYPT, $options);
																
																$pass_query = "UPDATE lb_login set lb_upass=? , pass_real=? WHERE lb_umail=?";
																$stmt = $conn->prepare($pass_query);
																if($stmt->execute(array($pass,$password,$email)))
																{
																	$sql_rm = "DELETE FROM forgot_pass_op WHERE lb_umail= ?";
																	$stmt = $conn->prepare($sql_rm);
																	if($stmt->execute(array($email)))
																	{
																		//Password Changed Successfully
																		echo "<p class='yellow box'>Password Changed Successfully<br/></p>";
																		//Login
																		echo "</form>
																				<a href='/login/'><button class='btn btn-lg btn-primary btn-block' type='submit'>Login</button></a>";
																	}
																	else
																	{
																		echo "<p class='yellow box'>Error occured Please try again</p>";
																		echo "<input id='inputEmail' class='form-control' placeholder='Enter email' name='email' type='hidden' value=".$email." required autocomplete='false'><br>
																				<input id='inputPin' onmouseover=dataInput()  class='form-control' placeholder='Enter Pin' name='pin' value='' value='' type='hidden' value=".$pin." required autocomplete='false'><br>
																				<input id='inputPass' class='form-control' placeholder='Enter New Password' name='pass' value='' type='password' required autocomplete='false'><br>
																				<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";

																	}
																}
																else
																{
																	echo "<p class='yellow box'>Error occured Please try again</p>";
																	echo "<input id='inputEmail' class='form-control' placeholder='Enter email' name='email' type='hidden' value=".$email." required autocomplete='false'><br>
																			<input id='inputPin' onmouseover=dataInput()  class='form-control' placeholder='Enter Pin' name='pin' value='' value='' type='hidden' value=".$pin." required autocomplete='false'><br>
																			<input id='inputPass' class='form-control' placeholder='Enter New Password' name='pass' value='' type='password' required autocomplete='false'><br>
																			<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
																}
															}
															else
															{
																echo "<p class='red box'>Email ".$email ." does not exist in our database</p><br/>";
																echo "<input id='inputEmail' class='form-control' placeholder='Registered Email' name='email' type='text' required autocomplete='on'><br>
														  				<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
															}
														}
														else
														{
															echo "<p class='red box'>Password should be of minimum length 8 </p></br>";
															echo "<input id='inputEmail' class='form-control' placeholder='Enter email' name='email' type='hidden' value=".$email." required autocomplete='false'><br>
																	<input id='inputPin' onmouseover=dataInput()  class='form-control' placeholder='Enter Pin' name='pin' value='' value='' type='hidden' value=".$pin." required autocomplete='false'><br>
																	<input id='inputPass' class='form-control' placeholder='Enter New Password' name='pass' value='' type='password' required autocomplete='false'><br>
																	<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
														}
													}
													else
													{
														$attempt++;
														$at_query = "UPDATE forgot_pass_op set w_a=? WHERE lb_umail=?";
														$stmt = $conn->prepare($at_query);
														$stmt->execute(array($attempt,$email));

														$left = 10 - $attempt;
														echo "<p class='red box'>Wrong Pin <br/><b font-size='50px'>". $left ."</b> attempts Left . You will be blocked for 10 min</p><br/>";
														if($attempt < 10)
														{
															echo "<input id='inputEmail' class='form-control' placeholder='Enter email' name='email' type='hidden' value=".$email." required autocomplete='false'><br>
																<input id='inputPin' onmouseover=dataInput()  class='form-control' placeholder='Enter Pin' name='pin' value='' value='' type='tel' required autocomplete='false'><br>
																<input id='inputPass' class='form-control' placeholder='Enter New Password' name='pass' value='' type='password' required autocomplete='false'><br>
																<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
														}
														else
														{
															//*//Block User
															//*//Blocked For 00:05:00 - {$time_now()-$time_db} 
															
															//remove pin
															$rm_pin_query = "DELETE FROM forgot_pass_op WHERE lb_umail=?";
															$stmt = $conn->prepare($rm_pin_query);
															$stmt->execute(array($rm_pin_query));
															//Please Try Again
															echo "<input id='inputEmail' class='form-control' placeholder='Registered Email' name='email' type='text' required autocomplete='on'><br>
																  	<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";

														}
													}
												}
											}
											else if(!empty($db_pin) && $attempt > 10)
											{
												echo "<p class='red box'> Please try again in </p></br/>";
												echo "<input id='inputEmail' class='form-control' placeholder='Registered Email' name='email' type='text' required autocomplete='on'><br>
														<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
											}
											else if(empty($db_pin))
											{
												//generate_pin();
												$n_pin = rand(100000,999999);
												$d_time = date('Y-m-d H:i:s',strtotime('+5 minutes'));

												//store_pin & time;
												$del_query = "DELETE from forgot_pass_op where lb_umail=?";
												$stmt = $conn->prepare($del_query);
												$stmt->execute(array($email));
												$store_pin_query = "INSERT INTO forgot_pass_op VALUES(?,?,?,?)";
												$stmt = $conn->prepare($store_pin_query);
												$store_pin_result = $stmt->execute(array($email,$n_pin,$d_time,0));
												if($store_pin_result)
												{
													//send_pin();
													$to = $email;
													$msg = 'Your Verification Code For LinkBazaar is '. $n_pin;
													$sub = 'Forgot Password';
													$msg =  wordwrap($msg,70);
													$headers = 'From: noreply@linkbazaar.info' . "\r\n" .
															    'Reply-To: piyush@linkbazaar.info' . "\r\n" .
															    'X-Mailer: PHP/' . phpversion();

													if(mail($to,$sub,$msg,$headers))
													{
														echo "<p class='yellow box'>Pin send successfully to your mail account at " . $email."</p><br/> ";
														echo "<input id='inputEmail' class='form-control' placeholder='Enter email' name='email' type='hidden' value=".$email." required autocomplete='false'><br>
																<input id='inputPin' onmouseover=dataInput()  class='form-control' placeholder='Enter Pin' name='pin' value='' value='' type='tel' required autocomplete='false'><br>
																<input id='inputPass' class='form-control' placeholder='Enter New Password' name='pass' value='' type='password' required autocomplete='false'><br>
																<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
													}
													else
													{
														echo "<p class='yellow box'> Some Error occured.Please try again</p></br/>";
														echo "<input id='inputEmail' class='form-control' placeholder='Registered Email' name='email' type='text' required autocomplete='on'><br>
																<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
													}
												}
												else
												{
													echo "<p class='red box'> Please try again</p></br/>";
													echo "<input id='inputEmail' class='form-control' placeholder='Registered Email' name='email' type='text' required autocomplete='on'><br>
															<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
												}
											}
										}
										else
										{
											echo "<p class='red box'>Email ".$email ." does not exist in our database</p><br/>";
											echo "<input id='inputEmail' class='form-control' placeholder='Registered Email' name='email' type='text' required autocomplete='on'><br>
									  				<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
										}
									}
									else
									{
										echo "<p class='red box'>Please enter in valid format</p><br/>";
										echo "<input id='inputEmail' class='form-control' placeholder='Registered Email' name='email' type='text' required autocomplete='on'><br>
									  			<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
									}
								}
								else
								{
									echo "<p class='yellow box'>Please enter email registered with us.</p><br/>";
									echo "<input id='inputEmail' class='form-control' placeholder='Registered Email' name='email' type='text' required autocomplete='on'><br>
									  		<button class='btn btn-lg btn-primary btn-block' type='submit'>Submit</button>";
								}
						?>
							</form>
						</div>
					</div>
			</center> 
		<script src='/js/bootstrap.min.js'></script>
		<script type="text/javascript">
			function dataInput()
			{
				//alert("input pin");
				document.getElementById("inputPin").value='';
				document.getElementById("inputPass").value='';
				document.getElementById("inputPin").focus();
			}
		</script>
	</body>
</html>