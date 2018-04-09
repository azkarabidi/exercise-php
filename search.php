<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Table V01</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
		<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/util.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!--===============================================================================================-->
	</head>
	<body>
	
		<div class="limiter">
			<div class="container-table100">
				<div class="wrap-table100">
					<div class="table100">
						<table>
							<thead>
								<tr class="table100-head">
									<th class="column1">Unique ID</th>
									<th class="column2">Title & Name</th>
									<th class="column3">Email Address</th>
									<th class="column4">Mobile</th>
									<th class="column5">Status</th>
									<th class="column6">Print Now</th>
								</tr>
							</thead>
							<tbody>
						
								<tr>
									<?php
									include_once("dbconn.php");
									if(isset($_GET['id'])){
										$id=$_GET['id'];
										//	echo"$id";
										$sql=$conn->query("SELECT * FROM `test` WHERE id ='$id'");
										$no  = $sql->rowCount();
										if($no == 0){
											echo '<td class="column1">record not found </td>';

										}
										else{
										
											foreach($sql as $row){
												echo' <td class="column1">'.$row["id"].'</td>
												<td class="column2">'.$row["title"].'</td>
												<td class="column3">'.$row["email"].'</td>
												<td class="column4">'.$row["mobile"].'</td>
												<td class="column5">'.$row["status"].'</td>
												<td class="column6"> <button type="button" class="btn btn-success" onclick="window.print()">Print Now!</button></td>';
 	
 	
											}

										}
									}

									?>
									
								</tr>
								
								
							</tbody>
						</table>
					</div>
					<br><p align="center"><a href="index.html"><button type="button" class="btn btn-danger">Go to Home</button></p></a>
				</div>
			</div>
		</div>


	

		<!--===============================================================================================-->	
		<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/bootstrap/js/popper.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<!--===============================================================================================-->
		<script src="vendor/select2/select2.min.js"></script>
		<!--===============================================================================================-->
		<script src="js/main.js"></script>

	</body>
</html>