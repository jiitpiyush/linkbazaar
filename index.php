<?php ob_start(); ?>
<?php
    $base = $_SERVER['DOCUMENT_ROOT'];
    $speed = $_GET['hp'];
    session_start();

  //  if(isset($_SESSION['Username'])&& isset($_SESSION['LoggedIn']==1))
    {
        if(!empty($speed))
        {
            unset($_SESSION['hp']);
            $_SESSION['hp'] = $speed;
            //header('Location: http://www.linkbazaar.info/');
            header('Location: /');
        }
        else if(!empty($_SESSION['hp']))
        {
            if($_SESSION['hp']==1)
            {
                include 'main.php';
            }
            else
            {
                include 'search_box.html';
                echo "<div style='text-align:center'><a href='index.php?hp=1'>View full Site</a></div>";
            }
        }
        else
        {
            echo "<script type='text/javascript'>
                    var agent   = navigator.userAgent;
                    var mob     = agent.indexOf('Android');
                    
                    if(mob >= 0)
                    {
                        var max = navigator.connection.downlinkMax;
                        //alert(max);
                        if(max <= 0.384)
                        {
                            window.location = 'index.php?hp=2';
                        }
                        else
                        {
                            window.location = 'index.php?hp=1';
                        }
                    }
                    else
                    {
                        window.location = 'index.php?hp=1';
                    }
                </script>";
        }
    }
   /*else
    {
        include "$base/login/index.php";
    }
    */
?>
