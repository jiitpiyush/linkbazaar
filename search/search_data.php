
<?php
	/* Printing Headings e.g.: sm,ebooks... */
	function print_head($test){
		$base = $_SERVER['DOCUMENT_ROOT'];
		include "$base/name_array.php";
		echo "<h4 class='topic' id=$test> $name[$test] </h4>";
	}
	
	
	
	
	
	/* Printing Sidebar links */
	function print_sideBar($id){
		$base = $_SERVER['DOCUMENT_ROOT'];
		include "$base/name_array.php";
		include "$base/connect/nect.php";
		$i = 1;
		
		$conn = null;
	}
	
	
	
	
	
	/*Get Headings from Database */
	function get_maincat($search){
		if(!empty($search))
		{
			$base = $_SERVER['DOCUMENT_ROOT'];
			include "$base/connect/nect.php";
		        $query = "SELECT DISTINCT lb_cate FROM $table WHERE l_desc LIKE ? OR lb_cate LIKE ?";
		        $stmt = $conn->prepare($query);
		        $params = array("%$search%","%$search%");
		        $head = array();
		        if($stmt->execute($params)) {
		            $i=0;
		        	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
		    		foreach($results as $row) {
		    			$head[$i] = $row['lb_cate'];
		    		   	$i++;
		    		}
		            $conn = null;
		    		return $head;
		        }
		    	else {
		    		echo $stmt->errorCode();
		    	}
		        $conn = null;
		}
    }
    
    
    
    
    
    
    
    	/*Fetch And print all data in page as links n description */
	function fetch_data($search){
			if(!empty($search)){
				$base = $_SERVER['DOCUMENT_ROOT'];
				include "$base/connect/nect.php";
				include "$base/name_array.php";
				$head = get_maincat($search);
				if(count($head)>0){
					
				}
				else
				{
					echo "No links found.";
					die();
				}
				$i = 0;
				foreach ($head as $test) {
					print_head($test);
					$query = "SELECT * FROM $table WHERE (lb_maincate=?) AND (l_desc LIKE ? OR lb_cate LIKE ?)";
					try {
						$stmt=$conn->prepare($query);
						$params = array($test,"%$search%","%$search%");
						$stmt->execute($params);
						
						$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
						foreach($results as $row) {
						   	/*	
						   	$id 	= $row['lb_id'];
						   	$cate 	= $row['lb_cate'];
							$head	= $row['lb_head'];
						   	$link	= $row['lb_link'];
						   	$desc	= $row['l_desc'];
						   	*/
						   	
						   	$data = array('id'=>$row['lb_id'],'name'=>$row['lb_name'], 'cate'=>$row['lb_cate'], 'head'=>$row['lb_head'], 'link'=>$row['lb_link'], 'desc'=>$row['l_desc']);
						   	print_data($data,$i);
						   	$data = null;
						   	$i++;
						}
					}
					catch(PDOException $e) {
						echo "Error: " . $e->getMessage();
					}
				}
				$conn = null;
			}
	
	}
	
?>
