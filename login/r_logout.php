<?php
    session_start();
    session_unset();
    session_destroy();
    setcookie("xlazx","");
/*
  if($_COOKIE['_xxyzx'])
  {
    $query = get_token();
  	$
    $url = 'https://www.facebook.com/logout.php?next=' . urlencode('http://linkbazaar.in/login/') .
      '&access_token='.$_COOKIE['token'];
    session_destroy();
    
  }
  header('Location: '.$url);
*/

?>