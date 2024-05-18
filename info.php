<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="admin/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="tex/javascript" src="js/bootstratp.min.js"></script>

	<!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
	<title> Information </title>

	<style type="text/css">
		header{
			background: url(admin/img/bg6.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: cover;
			height: 700px;
		}
		.avi{
			border-radius: 25px;
			padding: 15px 15px;
		}
	</style>
</head>
<body>
	<div>
		<header>
			<nav class="navbar navbar-expand-lg navbar-light">
				<a class="navbar-brand text-warning">F P&nbsp; &nbsp;Z O N E</a>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active">
							<a class="nav-link text-light" href="#list">Deposit</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="#list1">Bazar List</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="#list3">Meal</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="logout.php">LogOut</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-success" href="#"><?php session_start(); 
							echo "WELCOME "." ".$_SESSION['USER_NAME']; ?></a>
						</li>
					</ul>
				</div>
			</nav>

			<section id="banner">
				<div class="banner-container d-flex justify-content-center align-items-center">
					<div class="banner-components text-center">
						<h1 class="font-weight-bolder text-primary mb-5"> Welcome to Our Recidence!!!! </h1>
					</div>
				</div>
			</section>
		</header>


		<main>
			<!-- Deposit List -->
			<section id="list" class="bg-primary">
		<div class="text-center bg-warning">
			<h4><strong> Deposit</strong></h4>
			<hr class="hr-style">
		</div>
		<div class="container table-responsive-md">
			<table class="table table-striped">
				<thead>
					<tr class="bg-info">
						<th scope="col">Name</th>
						<th scope="col">Date</th>
						<th scope="col">Amount</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$connection = mysqli_connect("localhost","root","");
					$db = mysqli_select_db($connection,"management");
					$user_name=$_SESSION['USER_NAME'];
					$query = "select sl_no, user.name as name, date, amount
					from deposit 
					left join user on user.ID = deposit.user_id
					where MONTH(date)=MONTH(NOW()) and YEAR(date)=YEAR(NOW()) and name='$user_name'
					ORDER BY `sl_no` ASC ";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['date'] ?></td>
							<td><?php echo $row['amount'] ?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>	
		</section>
		<!-- Deposit List -->

			<!-- Bazar expense list -->
		<section id="list1" class="bg-secondary">
		<div class="text-center bg-warning">
			<h4><strong> Bazar Expense </strong></h4>
			<hr class="hr-style">
		</div>
		<div class="container table-responsive-md">
			<table class="table table-striped">
				<thead>
					<tr class="bg-info">
						<th scope="col">Name</th>
						<th scope="col">Date</th>
						<th scope="col">Purchase</th>
						<th scope="col">Amount</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$user_name=$_SESSION['USER_NAME'];
					$query = "select sl_no, user.name as name, date, purchase, amount1
					from bazar_expense 
					left join user on user.ID = bazar_expense.user_id
					where MONTH(date)=MONTH(NOW()) and YEAR(date)=YEAR(NOW()) and name='$user_name' 
					ORDER BY `sl_no` ASC ";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['date'] ?></td>
							<td><?php echo $row['purchase'] ?></td>
							<td><?php echo $row['amount1'] ?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>	
		</section>
		<!-- Bazar expense list -->

 


		<!-- Meal count -->
		<section id="list3" class="bg-secondary">
		<div class="text-center bg-warning">
			<h4><strong> Meal</strong></h4>
			<hr class="hr-style">
		</div>
		<div class="container table-responsive-md">
			<table class="table table-striped">
				<thead>
					<tr class="bg-info">
						<th scope="col">Name</th>
						<th scope="col">Date</th>
						<th scope="col">Breakfast</th>
						<th scope="col">Lunch</th>
						<th scope="col">Dinner</th>
						<th scope="col">Contact</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$user_name=$_SESSION['USER_NAME'];
					$query = "select sl_no, user.name as name, date, breakfast, lunch, 
					dinner,contact
					from meal_entry 
					left join user on user.ID = meal_entry.user_id
					where MONTH(date)=MONTH(NOW()) and YEAR(date)=YEAR(NOW()) and name='$user_name'
					ORDER BY `sl_no` ASC ";
					$query_run = mysqli_query($connection,$query);
					while($row = mysqli_fetch_assoc($query_run)){
						?>
						<tr>
							<td><?php echo $row['name'] ?></td>
							<td><?php echo $row['date'] ?></td>
							<td><?php echo $row['breakfast'] ?></td>
							<td><?php echo $row['lunch'] ?></td>
							<td><?php echo $row['dinner'] ?></td>
							<td><?php echo $row['contact'] ?></td>
						</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>	
		</section>
		<!-- Meal count -->

		<!-- <div class="avi bg-dark mt-3">
			<center><h4><p class="text-warning"><a href="estimation.php" class="text-light">Click here </a>to view total estimation</p><h4></center>
		</div> -->
		</main>

		<footer>
			<div class="row">
				<div class="col-lg-6 text-light text-center text-lg-left">
					<p class="mb-0 font-weight-bolder">&copy; Copyright: Simanta Saha</p>
					<p class="font-weight-light"> All source have been taken from Bootstrap4</p>
				</div>
				<div class="col-lg-6 text-success text-center text-lg-right">
					<button class="btn btn-light">
						<a class="text-dark" href="#">Back To Top</a>
						<i class="fas fa-angle-double-up"></i>
					</button>
					<a href="https://www.facebook.com/shimanta.saha.10"><i class="fab fa-facebook fa-2x"></i></a>

				</div>
			</div>
		</footer>
	</div>
</body>
</html>