<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="project.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="tex/javascript" src="js/bootstratp.min.js"></script>

	<title> Confirmation Admission </title>
</head>
<body>
	<div>
		<div class="text-center bg-warning">
			<h4><strong> Mess Member List </strong></h4>
			<hr class="hr-style">
		</div>
		<div>
			<marquee direction="right"> Welcome to F P  Z O N E</marquee>
		</div>
		<div class="container table-responsive-md">
			<table class="table table-striped">
				<thead>
					<tr class="bg-info">
						<th scope="col">ID</th>
						<th scope="col">Name</th>
						<th scope="col">Phone Number</th>
						<th scope="col">Area/Village</th>
						<th scope="col">Sub-District</th>
						<th scope="col">District</th>
						<th scope="col">Educational Institution</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"management");
					$query = "select * from user ORDER BY `ID` ASC ";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
					?>
					<tr>
						<td><?php echo $row['ID'] ?></td>
						<td><?php echo $row['name'] ?></td>
						<td><?php echo $row['phone_num'] ?></td>
						<td><?php echo $row['area'] ?></td>
						<td><?php echo $row['sub_dist'] ?></td>
						<td><?php echo $row['home_dist'] ?></td>
						<td><?php echo $row['eud_inst'] ?></td>
					</tr>
					<?php
				}
				?>
				</tbody>
			</table>
		</div>	
	</div>	
</body>
</html>