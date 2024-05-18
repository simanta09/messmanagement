<?php
  $connection = mysqli_connect("localhost","root","");
  $db = mysqli_select_db($connection,"management");

  if(isset($_POST['admit'])){
    $query = "INSERT INTO user VALUES
    (null,'$_POST[name]','$_POST[phone_num]','$_POST[area]','$_POST[sub_dist]','$_POST[home_dist]','$_POST[eud_inst]')";
    $query_run = mysqli_query( $connection, $query );
    if($query_run){
      echo "<script> alert('Admission Successfull.......Now You Are a member of fp Z O  N E'); 
      window.location.href = 'confirmation_admission.php';
      </script>";
    }
    else{
      echo "<script> alert('Something is Wrong'); </script>";
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="admin/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="project.css">
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="tex/javascript" src="js/bootstratp.min.js"></script>

  <!-- font awesome link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
	<title> User Admission </title>

  <Style>
    body{
      background: url(img/bg3.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-attachment: fixed;
      background-size: cover;
      height: 100px;
    }
  </Style>
</head>
<body>
  <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-warning">F P&nbsp; &nbsp;Z O N E</a>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link text-light" href="#">Home</a>
            </li>
          </ul>
        </div>
      </nav>

	<section id="register">
    	<div class="row mt-5">
      	<div class="col-md-4"></div>
      	<div class="col-md-4 m-auto-block">
        	<center> <h3> Fill the form and Admit here </h3> </center>
        	<form action="" method="post">
          	<div class="form-group">
            	<label> Name: </label>
            	<input type="text" name="name" class="form-control" required>
          	</div>
          	<div class="form-group">
            	<label> Phone Number: </label>
            	<input type="text" name="phone_num" class="form-control" required>
          	</div>
          	<div class="form-group">
            	<label> Area/Village: </label>
            	<input type="text" name="area" class="form-control" required>
          	</div>
            <div class="form-group">
              <label> Sub-District: </label>
              <input type="text" name="sub_dist" class="form-control" required>
            </div>
            <div class="form-group">
              <label> District: </label>
              <input type="text" name="home_dist" class="form-control" required>
            </div>
            <div class="form-group">
              <label> Educational Institution: </label>
              <input type="text" name="eud_inst" class="form-control" required>
            </div>
          	<button type="submit" name="admit" class="btn btn-success"> Admit </button> 
        	</form>
    	</div>
      <div class="col-md-4"></div>
 	</section>
  </header>

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
</body>
</html>