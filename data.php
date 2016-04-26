<?php
	/* Printing Headings e.g.: sm,ebooks... */
	function print_head($heading){
		$base = $_SERVER['DOCUMENT_ROOT'];
		include "$base/name_array.php";
		echo "<h4 class='topic' id=$heading> $name[$heading] </h4>";
	}
	
	
	
	
	
	/* Printing Sidebar links */
	function print_sideBar($head){
		$base = $_SERVER['DOCUMENT_ROOT'];
		include "$base/name_array.php";
		foreach ($head as $data) {
			echo "<li class='active sidebar'><a onclick=hide_bar('$data')><span class='glyphicon glyphicon-link'></span>" .
					$name[$data]."</a></li>";
		}
	}
	
	
	
	
	
	/*Get Headings from Database */
	function get_head($cat){
		$base = $_SERVER['DOCUMENT_ROOT'];
		include "$base/connect/nect.php";
	        $query = "SELECT DISTINCT lb_head FROM $table WHERE lb_cate=:cat";
	        $stmt = $conn->prepare($query);
	        $stmt->bindParam(':cat',$cat);
	        
	        if($stmt->execute()) {
	            $i=0;
	        	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	    		foreach($results as $row) {
	    			$head[$i] = $row['lb_head'];
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
    
    
    
    
    
    
    
    	/*Fetch And print all data in page as links n description */
	function fetch_data($cat){
		$base = $_SERVER['DOCUMENT_ROOT'];
		include "$base/connect/nect.php";
		include "$base/name_array.php";
		$head = get_head($cat);
		if(count($head)>1){
			echo "<h1 style='color:#5EB62C' class='cate_name'>". $name[$cat] ." </h1><hr/>";
			echo "<div id='info' style='text-align:center;'> 
				  <span class='glyphicon glyphicon-star-empty'></span> : Bookmark &nbsp;&nbsp;&nbsp;&nbsp;
				  <span class='glyphicon glyphicon-thumbs-up' ></span> : Vote Up&nbsp;&nbsp;&nbsp;&nbsp;
				  <span class='glyphicon glyphicon-arrow-right'></span> : Get Link 
				  </div>";
		}
		$i = 0;
		foreach ($head as $heading) {
			print_head($heading);
			$query = "SELECT * FROM $table WHERE lb_cate=:cat AND lb_head=:head ORDER BY u_vote desc LIMIT 10";
			try {
				$stmt=$conn->prepare($query);
				$stmt->bindParam(':cat',$cat);
				$stmt->bindParam(':head',$heading);
				$stmt->execute();
				
				$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
				foreach($results as $row) {
				   	$data = array('id'=>$row['lb_id'],'vote'=>$row['u_vote'],'name'=>$row['lb_name'], 'cate'=>$row['lb_cate'], 'head'=>$row['lb_head'], 'link'=>$row['lb_link'], 'desc'=>$row['l_desc']);
				   	print_data($data,$i,$b);
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
	
?>