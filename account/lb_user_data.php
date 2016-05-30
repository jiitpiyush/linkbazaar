

<?php
		function get_history(){
			$base = $_SERVER['DOCUMENT_ROOT'];
			include "$base/connect/nect.php";
			if(isset($_SESSION['id'])){
				$user_id = $_SESSION['id'];
				$q = "SELECT lb_l_id FROM $history_table WHERE lb_id = ?";
				$stmt = $conn->prepare($q);
				if($stmt->execute(array($user_id))){
					$history = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$i = 0;
					foreach($history as $linkid ) {
						$q = "SELECT * FROM $table WHERE lb_id = ?";
						$stmt = $conn->prepare($q);
						if($stmt->execute(array($linkid['lb_l_id']))){
							$row = $stmt->fetch(PDO::FETCH_ASSOC);
							$data = array('id'=>$row['lb_id'],'vote'=>$row['u_vote'],'name'=>$row['lb_name'], 'cate'=>$row['lb_cate'], 'head'=>$row['lb_head'], 'link'=>$row['lb_link'], 'desc'=>$row['l_desc']);
					   		print_data($data,$i);
					   		$i++;
						}
					}
				}
			}
			$conn = null;
		}

		function get_bookmark(){
			$base = $_SERVER['DOCUMENT_ROOT'];
			include "$base/connect/nect.php";
			if(isset($_SESSION['id'])){
				$user_id = $_SESSION['id'];
				$q = "SELECT lb_l_id FROM $bookmark_table WHERE lb_id = ?";
				$stmt = $conn->prepare($q);
				if($stmt->execute(array($user_id))){
					$bookmark = $stmt->fetchAll(PDO::FETCH_ASSOC);
					$i = 5000;
					foreach($bookmark as $linkid ) {
						$q = "SELECT * FROM $table WHERE lb_id = ?";
						$stmt = $conn->prepare($q);
						if($stmt->execute(array($linkid['lb_l_id']))){
							$row = $stmt->fetch(PDO::FETCH_ASSOC);
							$data = array('id'=>$row['lb_id'],'vote'=>$row['u_vote'],'name'=>$row['lb_name'], 'cate'=>$row['lb_cate'], 'head'=>$row['lb_head'], 'link'=>$row['lb_link'], 'desc'=>$row['l_desc']);
					   		print_data($data,$i);
					   		$i++;
						}
					}
				}
			}
			$conn = null;
		}
?>