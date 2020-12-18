<?php

	//Database connection 
		$user='root';
		$pass='';
		$db='assignment';
		$con= new mysqli('localhost',$user,$pass,$db) or die( "Could not connect to database " );
	
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<title>Assignment</title>

	<!-- Bootstrap core CSS -->
	<link href="vendors/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- javascript file -->
	<script type='text/javascript' src='functions.js'></script>
</head>

<body>
	<!-- navigation bar -->
	<nav class="navbar navbar-dark bg-dark">
		<a class="navbar-brand" href="index.php">Assignment</a>
	</nav>
	<br><br>
	<div class="container">
	  <div class="row">
		<div class="col-sm">
		<!-- select box #1 -->
		  <select class="custom-select custom-select-lg mb-3" onchange="showCategory2(this.value)">
		  <option selected="true" disabled="disabled" >Click to choose category</option>
		  <?php
			
			//fetch categories from database
			$q="SELECT DISTINCT level1 FROM categories ";
			$result = mysqli_query($con, $q);

			if (mysqli_num_rows($result) > 0) {
			  
				while($row = mysqli_fetch_assoc($result)) {
					
				   print("
			<option value=".$row['level1'].">".$row['level1']."</option>");
			}}?>
			</select>
		</div>
		<!-- select box #2 -->
		<div class="col-sm" id="level2">
		  
		</div>
		<!-- select box #3 -->
		<div class="col-sm" id="level3">
		  
		</div>
	  </div>
	</div>


  <script src="vendors/jquery/jquery.min.js"></script>
  <script src="vendors/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>