<?php   session_start();
        date_default_timezone_set('Asia/Kolkata');
        $base = $_SERVER['DOCUMENT_ROOT'];
        include "$base/connect/nect.php";
        $user = $_SESSION['id'];
        $time = date("Y-m-d H:i:s");
?>


<?php
    try{
        //Set Bookmark Details for user

        if(!empty($_POST['data'])){
            $id = filter_var($_POST['data'], FILTER_SANITIZE_STRING);

            if(!empty($user) && $id > 0){
                    $bookmark = "INSERT INTO $bookmark_table VALUES (?,?,?)";
                    $stmt = $conn->prepare($bookmark);
                    $stmt->execute(array($user,$id,$time));
            }
            else if(empty($user)){
                echo "login";
            }
        }
        else if(!empty($_POST['del'])){
            // Remove Bookmarked link
            $id = filter_var($_POST['del'], FILTER_SANITIZE_STRING);
            if(!empty($user)){
                    $bookmark = "DELETE FROM $bookmark_table WHERE (lb_id=? AND lb_l_id=?)";
                    $stmt = $conn->prepare($bookmark);
                    $stmt->execute(array($user,$id));
            }
            else{
                echo "some error occured";
            }
        }
        
    }
    catch(PDOexception $e){
        echo "Error: ". $e->getMessage();
    }
    $conn = null;
?>

