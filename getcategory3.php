<?php
	
	//Database connection
		$user='root';
		$pass='';
		$db='assignment';
		$con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );
		
	//Select categories table
	
		$sql = "SELECT DISTINCT level3 FROM categories WHERE level2=?";

		$stmt = $con->prepare($sql);
		$stmt->bind_param('s',$_GET['q']);
		$stmt->execute();
		$result = $stmt->get_result();
		
	//Fetch categories in select box
		
		print('<select class="custom-select custom-select-lg mb-3">');
		print('<option selected="true" disabled="disabled" >Click to choose sub category</option>');
		while ($row = $result->fetch_assoc()) {
			
			print("<option value=".$row['level3'].">".$row['level3']."</option>");
				
		}
		print('</select>');
				
?>
