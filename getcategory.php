<?php
		$user='root';
		$pass='';
		$db='assignment';
		$con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );
		
		mysqli_query($con,'SET character_set_results=utf8');
		

		$sql = "SELECT DISTINCT level2 FROM categories WHERE level1=?";

		$stmt = $con->prepare($sql);
		$stmt->bind_param('s',$_GET['q']);
		$stmt->bind_result($data);
		$stmt->execute();
        $stmt->fetch();
		$stmt->execute();
		$result = $stmt->get_result();
		
		print('<select class="custom-select custom-select-lg mb-3" onchange="showCategory3(this.value)">');
		while ($row = $result->fetch_assoc()) {
				print('<option value=');
				print($row['level2']);
				print('>');
				print($row['level2']);
				print('</option>');
				
		}
		print('</select>');
		
		
		
		
		
		
?>
