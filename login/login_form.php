
<?php 	
	$user = '';
	$attempt = '';
	$login = '';
	if(!empty($_REQUEST['user'])){
		$user  = $_REQUEST['user'];
	}
	if(isset($_COOKIE['xlazx'])){
		$attempt = $_COOKIE['xlazx'];
	}
	if(!empty($_GET['pl'])){
		$login = $_GET['pl'];
	}
 ?>
<html>
<head>
	<title>LinkBazaar | Log in</title>
	<link href='/css/bootstrap.min.css' rel='stylesheet'>
	<script src='/js/bootstrap.min.js'></script>
	<link rel="icon" type="image/png" href="/images/logo.png" />
	<meta http-equiv="content-type" content="text/html;charset=iso-8859-1">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<meta http-equiv='content-type' content='text/html; charset=UTF-8'>
	<meta http-equiv='cache-control' content='no-cache' />
	<meta http-equiv='expires' content='Tue, 01 Jan 1980 1:00:00 GMT' />
	<meta http-equiv='pragma' content='no-cache' />
	<meta name='description' content=''>
<script type="text/javascript">
	window.onunload = function(){};
</script>
	

	<style type='text/css'>
		body{padding: 70px;}
		.attempt{
			color:;
			background: #ffebe8;
			border: 1px solid #dd3c10;
			padding: 10px;
			text-align: center;
			font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
			font-size: 11px;
			}
		.log
		{
			color:;
			background: #FFF9D7;
			border: 1px solid #E2C822;
			padding: 10px;
			text-align: center;
			font-family: 'lucida grande',tahoma,verdana,arial,sans-serif;
			font-size: 11px;
		}
	</style>
</head>
			<body>
				<nav class='navbar navbar-inverse navbar-fixed-top' role='navigation'>
					<div class='container'>
						<div class='navbar-header'>
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
								<form class='form-signin' action='http://www.linkbazaar.info/login/' method='post'>
									<h2 class='form-signin-heading'>Log in</h2><br>
		                                                         
		                                                         <?php
		                                                               if($attempt>=1){
		                                                               	echo "<p class=attempt>
		                                                                 Invalid Email or Password. Try again
		                                                               </p>
		                                                               ";
		                                                               }
		                                                               else if($login)
		                                                               {
		                                                               	echo "<p class=log>
		                                                                 You must Login to continue
		                                                               </p>
		                                                               ";
		                                                               }
		                                                           ?>                                                        
									<input id='inputEmail' class='form-control' placeholder='Username' required name='username' type='text' value= <?php echo $user; ?> ><br>
									<input id='inputPassword' class='form-control' placeholder='Password' required name='password' type='password'><br>
									<div class=''>
										<a href='/login/forgot_pass.php'> forgot password?</a>
									</div><br/>
									<button class='btn btn-lg btn-primary btn-block' type='submit'>Log In</button>
								</form>
							<?php 	
								include "fb/src/config.php";
								$content = '<a href=https://www.facebook.com/dialog/oauth?client_id='.$config['App_ID'].'&redirect_uri='.$config['callback_url'].'&scope=email,user_likes,user_friends><img src="/images/fb_login.png" alt="Sign in with Facebook" width="100%"/></a>';
								echo $content;
								echo "<br/><br/>";
							?>
								<a href='/login/signup.php'><button class='btn btn-lg btn-block' style='margin-bottom:100px;float:left;background-color:lightgreen'>  Register </button></a>
							</div>
							</div>
					</center>

		<script type="text/javascript">
			var user = document.getElementById('inputEmail').value;
			if(user)
			{
				$('#inputPassword').focus();
			}
			else
			{
				$('#inputEmail').focus();
			}
		</script>
</body>
</html>