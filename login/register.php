<?php include "r_logout.php"; ?>
<?php $base = $_SERVER['DOCUMENT_ROOT']; ?>
<?php 
        $username   = $_POST['username'];
        $password   = $_POST['password'];
        $email      = $_POST['email'];
        $fname      = $_POST['fname'];
        $lname      = $_POST['lname'];
        session_start();
?>


<?php
    $username_b = 0;
    $password_b = 0;
    $email_b = 0;
    
    if(!empty($_POST['username']))
        $username_b = 1;    
    
    if(!empty($_POST['password']))
        $password_b = 1;    

    if(!empty($_POST['email']))
        $email_b = 1;
?>


<?php
    if( $username_b && $password_b && $email_b)
    {   
        include "$base/connect/nect.php";
        $salt     = mcrypt_create_iv(30, MCRYPT_DEV_URANDOM);
        $options = [
                'cost' => 11,
                'salt' => $salt
        ];

        $password_digest = password_hash(strval($password), PASSWORD_BCRYPT, $options);

        $stmt = $conn->prepare("INSERT INTO lb_login (lb_ufname, lb_ulname, lb_user, lb_upass, pass_real, lb_umail , u_salt) VALUES ( :fname, :lname, :user , :pass , :pass_real, :email , :salt)");
        $stmt->bindParam( ':user' , $username, PDO::PARAM_STR,5 );
        $stmt->bindParam( ':pass' , $password_digest, PDO::PARAM_STR,5 );
        $stmt->bindParam( ':pass_real' , $password, PDO::PARAM_STR,5 );
        $stmt->bindParam( ':email', $email, PDO::PARAM_STR,5    );
        $stmt->bindParam( ':salt' , $salt, PDO::PARAM_STR,5 );
        $stmt->bindParam( ':fname' , $fname, PDO::PARAM_STR,5   );
        $stmt->bindParam( ':lname' , $lname, PDO::PARAM_STR,5   );
        
        try{
            $stmt->execute();
            setcookie("first","");
            setcookie("last","");
            setcookie("pass","");
            setcookie("user","");
            setcookie("email","");
            setcookie("xlazx","");
            session_start();
            $_SESSION['Username'] = $username;
            $_SESSION['LoggedIn'] = 1;
            echo "success!";
            header('Location: /');
        }
        catch(PDOException $e){
            $attempt = $_COOKIE['xlazx'];
            $attempt++;
            setcookie("first",$fname);
            setcookie("last",$lname);
            setcookie("pass",$password);
            setcookie("user",$username);
            setcookie("email",$email);
            setcookie("xlazx",$attempt);
            header('Location:signup.php');
        }
    }
    else
    {
        setcookie("first",$fname);
        setcookie("last",$lname);
        setcookie("pass",$password);
        setcookie("user",$username);
        setcookie("email",$email);
        header('Location:signup.php');
    }

?>

