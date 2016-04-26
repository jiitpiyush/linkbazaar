<?php
    function if_bookmark($id){
        $base = $_SERVER['DOCUMENT_ROOT'];
        $user = $_SESSION['id'];
        include "$base/connect/nect.php";
        $q = "SELECT lb_l_id from $bookmark_table WHERE (lb_id = ? AND lb_l_id = ?)";
        $stmt = $conn->prepare($q);
        $stmt->execute(array($user,$id));
        if($stmt->rowCount() > 0){ 
            return 1; 
        } 
        else{ 
            return 0;
        }
    }
 ?>