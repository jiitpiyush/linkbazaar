<?php
	$email = $_COOKIE['email'];
	$user  = $_COOKIE['user'];
	$pass = $_COOKIE['pass'];
	$first = $_COOKIE['first'];
	$last = $_COOKIE['last'];
	$attempt = $_COOKIE['xlazx'];
	include "r_logout.php";
 ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">    
		<meta http-equiv="cache-control" content="max-age=0" />
		<meta http-equiv="cache-control" content="no-cache" />
		<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
		<meta http-equiv="pragma" content="no-cache" />
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>LinkBazaar | Sign UP</title>
		<link rel="icon" type="image/png" href="/images/logo.png" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			body
			{
				background-color: #eee;
			}
			.form-signin-heading
			{
				padding-top:50px;
			}
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
				<div class="container" style="max-width:300px;position: absolute; left: 50%;">
					<div style="position: relative; left: -50%;">
						<form class="form-signin" onsubmit="return validateMyForm();" action='register.php' method=post>
							<h2 class="form-signin-heading" style="color:grey">Signup</h2><br> 
							<!--
							<input id="inputSex" class="" type="radio" required name="sex" value="M">Male
							<input id="inputSex" style="margin-left:25px;" type="radio" required name="sex" value="F">Female<br/><br/>
							<input id="inputMobile" class="form-control" placeholder="Mobile" required autofocus="" name="mobile" type="tel" value="" ><br>
							<input id="inputFbid" class="form-control" placeholder="Link of Facebook profile" autofocus="" name="fbid" type="text" value="" ><br>
							<input id="inputPlace" class="form-control" placeholder="Current City" autofocus="" name="city" type="text"><br>
							-->
							<input id="inputName" class="form-control" placeholder="First Name" required autofocus="" name="fname" type="text" value=<?php echo $first; ?> >
							<input id="inputName" class="form-control" placeholder="Last Name" required autofocus="" name="lname" type="text" value=<?php echo $last; ?> ><br>
							<input id="inputEmail" class="form-control" placeholder="Email" onblur="check_email()" required autofocus="" name="email" type="email" value=<?php echo $email; ?> ><p><img src="/images/loader.gif" id="loaderIcon" style="display:none" /><span id="email-availability-status"></span></p>
							<input id="inputUsername" class="form-control" placeholder="Desired Username" onblur="check_user()" autofocus="" name="username" type="text" value=<?php echo $user; ?>><p><img src="/images/loader.gif" id="loaderIcon1" style="display:none" /><span id="user-availability-status"></span></p>
							<input id="inputPassword" class="form-control" placeholder="Password" required  autofocus="" name="password" type="password" value=<?php echo $pass; ?>><br>
							<button id="submit" class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
						</form>
						<a href="/login/"><button class=".btn btn-lg btn-block" style="margin-bottom:100px;background-color:lightgreen">  Login </button></a>
					</div>
				</div>
			</center>

		<script src="/js/bootstrap.min.js"></script>
	</body>
</html>

<script type="text/javascript">

	function check_user() 
	{
		var i_u = "#inputUsername";

		$("#loaderIcon1").show();
		jQuery.ajax(
		{
			url: "check_avaliability.php",
			data:'user='+$("#inputUsername").val(),
			type: "POST",
			success:function(data)
			{
				$("#loaderIcon1").hide();
				$("#user-availability-status").html(data);
				if(data.indexOf("available") == 23 )
				{
					$(i_u).css({"border-color": "#66AFE9"});
				}
				else
				{
					$(i_u).css({"border-color": "#ff6666"});
				}
			},
			error:function (){}
		});
	}

	function check_email() 
	{
		var i_e = "#inputEmail";

		$("#loaderIcon").show();
		jQuery.ajax(
		{
			url: "check_avaliability.php",
			data:'email='+$("#inputEmail").val(),
			type: "POST",
			success:function(data)
			{
				$("#loaderIcon").hide();
				$("#email-availability-status").html(data);
				if(data.indexOf("available") >= 0 )
				{
					$(i_e).css({"border-color": "#66AFE9"});
				}
				else
				{
					$(i_e).css({"border-color": "#ff6666"});
				}
			},
			error:function (){}
		});
	}

	function validateMyForm()
	{
		//check_email();
		//check_user();
		var i_u = "#inputUsername";
		var i_e = "#inputEmail";
		var i_p = "#inputPassword";
		var e = $("#email-availability-status");
		var u = $("#user-availability-status");
		var email = e.html();
		var user = u.html();
		var pass = $("#inputPassword").val();
	
		if(email.toLowerCase().indexOf("enter valid") >= 0 )
		{
			e.html("<span style='color:red'>Please enter valid email.</span>");
			$(i_e).focus();
			$(i_e).css({"border-color": "#ff6666"});
			return false;
		}

		else if(email.toLowerCase().indexOf("already registered") >= 0 )
		{
			e.html("<p style='color:red'> Email already registered.<br/>Please choose another email.</p>");
			$(i_e).focus();
			$(i_e).css({"border-color": "#ff6666"});
			return false;
		}

		else if(user.toLowerCase().indexOf("not") >= 0 )
		{
			u.html("<span style='color:red'> username not available.</span>");
			$(i_u).focus();
			$(i_u).css({"border-color": "#ff6666"});
			return false;
		}
		else if($("#inputUsername").val().length < 4 )
		{
			u.html("<span style='color:red'>Please choose username greater than 3 characters. </span>");
			return false;
			$(i_u).focus();
			$(i_u).css({"border-color": "#ff6666"});
			
		}
		else if(user.toLowerCase().indexOf("enter valid") >= 0 )
		{
			u.html("<span style='color:red'>Please enter valid username</span>");
			$(i_u).focus();
			$(i_u).css({"border-color": "#ff6666"});
			return false;
		}
		
		else if(pass.length < 7)
		{
			alert("password should be of length 8 or more characters.");
			$(i_p).focus();
			$(i_p).css({"border-color": "#ff6666"});
			return false;		
		}
		else
		{
			return true;
		}
	}
</script>