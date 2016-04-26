<?php $base = $_SERVER['DOCUMENT_ROOT']; ?>

<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
	<link rel="icon" type="image/png" href="/images/logo.png" />
	<title> LinkBazaar </title>
	<style>
		td,th,tr,table
		{
			width:150px;
			border: 1px solid black;
			border-collapse:collapse;
			text-align:center;
		}
	</style>
</head>
<body>

<?php
	if(!empty($_GET['v'])){
		$view=$_GET['v'];
	}
	
	if($_GET || $_POST) {
		include "$base/connect/nect.php";
	}
	
	$sub_cat = '';
	

	if($view=="show") {
		echo "<a href='/insert/'><button>Insert New data </button></a>";
		echo "<table style='border:1px solid black;'>";
		echo "<tr><th>Id</th><th>category</th><th>sub</th><th>headings</th><th>link name</th><th>link</th><th>description</th></tr>";
		
		include "$base/select_data_from_table.php";
		try {
			$stmt=$conn->prepare("SELECT lb_id,lb_cate, lb_sub, lb_head, lb_name, lb_link, l_desc FROM $table order by lb_id desc");
			$stmt->execute();
			$result=$stmt->setFetchMode(PDO::FETCH_ASSOC);
			foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
				echo $v;
			}
		}
		catch(PDOException $e) {
			echo "Error: " . $e->getMessage();
		}
		$conn=null;
		echo "</table>";
		echo "<a href='insert.php'><button>Insert New data </button></a>";
	}
	else {
		include "$base/insert/insert_html.php";
		if($_POST) {
			try {
				$stmt=$conn->prepare("INSERT INTO $table (lb_maincate, lb_cate, lb_sub, lb_head,lb_name,lb_link,l_desc) VALUES (:main, :category, :sub_category, :headings, :link_name, :links, :link_desc)");
				
				$stmt->bindParam(':main',$main);
				$stmt->bindParam(':category', $category);
				$stmt->bindParam(':sub_category', $sub_cat);
				$stmt->bindParam(':headings', $headings);
				$stmt->bindParam(':links', $link);
				$stmt->bindParam(':link_desc', $link_desc);
				$stmt->bindParam(':link_name',$link_name);
				
				$main = $_POST['tab'];
				$category=$_POST['sub'];
				if(!empty($_POST['typ'])){
					$sub_cat = $_POST['typ'];
				}
				$headings=$_POST['headings'];
				$link=$_POST['link'];
				$link_desc=$_POST['ldesc'];
				$link_name = $_POST['link_name'];
				
				if($stmt->execute()) {
					echo "New records created successfully<br/>";
					foreach ($_POST as $key=> $value) {
						echo $key." = ".$value."<br/>";
					}
				}
				else {
					echo $stmt->errorCode();
				}
			}
			
			catch(PDOException $e) {
				echo "Error: " . $e->getMessage();
			}
			$conn=null;

		}
	}
	
?>
</body>
</html>
