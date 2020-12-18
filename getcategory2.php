<?php

	//Database connection 
		$user='root';
		$pass='';
		$db='assignment';
		$con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );
	
	//Select categories table
		
		$sql = "SELECT DISTINCT level2 FROM categories WHERE level1=?";

		$stmt = $con->prepare($sql);
		$stmt->bind_param('s',$_GET['q']);
		$stmt->execute();
		$result = $stmt->get_result();
		
	//Fetch categories in select box
		
		print('<select class="custom-select custom-select-lg mb-3" onchange="showCategory3(this.value)">');
		print('<option selected="true" disabled="disabled" >Click to choose sub category</option>');
		while ($row = $result->fetch_assoc()) {
			
			print("<option value=".$row['level2'].">".$row['level2']."</option>");
				
		}
		print('</select>');
		
	
?>
