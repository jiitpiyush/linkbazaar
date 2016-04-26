<?php
    session_start();
    $rdir = $_SERVER['HTTP_REFERER'];
    session_unset();
    session_destroy();
    setcookie("xlazx","");
    setcookie("xmetzx","");
    if(strpos($_SERVER['HTTP_REFERER'],"login") || $rdir==NULL) {
      header("Location: /login/ ");
    }
    else{
      header("Location: $rdir");
    }
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