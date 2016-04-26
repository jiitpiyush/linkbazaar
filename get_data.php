<?php   session_start();
        date_default_timezone_set('Asia/Kolkata');
        $base = $_SERVER['DOCUMENT_ROOT'];
        include "$base/connect/nect.php";
        $user = $_SESSION['id'];
        $time = date("Y-m-d H:i:s");
?>


<?php
    try{
        $id = filter_var($_POST['data'], FILTER_SANITIZE_STRING);
        $query = "SELECT lb_link FROM $table WHERE lb_id=:id";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(':id',$id);
        
        if($stmt->execute()){
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            echo $result['lb_link'];
            
            //Set History Details for user
            if(!empty($user)){
                $query = "DELETE FROM $history_table WHERE (lb_id = ? AND lb_l_id = ?)";
                $stmt = $conn->prepare($query);

                if($stmt->execute(array($user,$id))){
                    $history = "INSERT INTO $history_table VALUES (?,?,?)";
                    $stmt = $conn->prepare($history);
                    $stmt->execute(array($user,$id,$time));
                }
                else
                    echo "some error occured";
            }
        }
        else{
            echo $stmt->errorCode();
        }
    }
    catch(PDOexception $e){
        echo "Error: ". $e->getMessage();
    }
    $conn = null;
?>