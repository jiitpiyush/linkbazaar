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
                    $vote = "INSERT INTO $vote_table VALUES (?,?,?);
                             UPDATE $table SET u_vote = u_vote + 1 WHERE lb_id = ?";
                    $stmt = $conn->prepare($vote);
                    $stmt->execute(array($user,$id,$time,$id));
            }
            else if(empty($user)){
                echo "login";
            }
        }
        else if(!empty($_POST['del'])){
            // Remove Bookmarked link
            $id = filter_var($_POST['del'], FILTER_SANITIZE_STRING);
            if(!empty($user)){
                    $vote = "DELETE FROM $vote_table WHERE (lb_id=? AND lb_l_id=?);
                             UPDATE $table SET u_vote = u_vote - 1 WHERE lb_id = ?";
                    $stmt = $conn->prepare($vote);
                    $stmt->execute(array($user,$id,$id));
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

