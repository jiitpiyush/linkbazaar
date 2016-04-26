<?php session_start(); ?>

<?php $base = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include "$base/login/is_login.php" ?>

<?php 
    if(islogin()){
        include "$base/account/acc_user_history.php";
    }
    else{
        include "$base/rdir_to_login.php";
    }
?>