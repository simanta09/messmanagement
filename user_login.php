<?php
session_start();
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"management");


if (isset($_POST['user_login'])){
  $query = "SELECT * FROM user_authentication where name = '$_POST[name]' AND password = '$_POST[password]'";
  $query_run = mysqli_query($connection,$query);
  if(mysqli_num_rows($query_run)){
    while($row = mysqli_fetch_assoc($query_run)){
      $_SESSION['USER_NAME'] = $_POST['name']; 
      header('location:info.php');
    }
  }
  else{
    echo "<script> alert('Please Enter Correct Name and Password'); </script>";
    //echo "<center> Please Enter Correct Email ID and Password </center>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="admin/style.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="project.css">
  <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
  <script type="tex/javascript" src="js/bootstratp.min.js"></script>

  <!-- font awesome link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
  <title> User Login </title>
</head>
<style>
  .avi{
    margin: none;
    border-radius: 100%;
    padding: 25px;
    transform: translate(5%,50%);
  }
  body{
  background: url(admin/img/bg1.jpg);
  background-repeat: no-repeat;
  background-position: center;
  background-attachment: fixed;
  background-size: cover;
  height: 100px;
}
  
</style>
<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand text-warning">F P&nbsp; &nbsp;Z O N E</a>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link"><i class="fas fa-user fa-2x pr-2 text-light"></i><b class="text-light">User</b></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>	
  <section id="login_form">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4 m-auto-block">
        <center> <h3> User Login Page </h3> </center>
        <center><i class="avi fas fa-user-shield fa-3x bg-info"></i></center>
        <form action="user_login.php" method="post" class="was-validated shadow-lg p-5">
          <div class="form-group">
          	<strong><label> Name: </label></strong>
            <div class="input-group mb-2">
              <div class="input-group-prepend">
               <div class="input-group-text"><i class="fas fa-user-shield"></i></div>
             </div>
             <input type="text" name="name" class="form-control" id="inlineFormInputGroup" placeholder="Name" required>
           </div>
           <div class="valid-feedback" style="color:green"> perfect </div>
           <div class="invalid-feedback"> Please input your name </div>
         </div>
         <div class="form-group">
          <strong><label> Password: </label></strong>
          <div class="input-group mb-2">
            <div class="input-group-prepend">
             <div class="input-group-text"><i class="fas fa-lock"></i></div>
           </div>
           <input type="text" name="password" class="form-control" id="inlineFormInputGroup" placeholder="password" required>
         </div>
         <div class="valid-feedback" style="color:green"> perfect </div>
         <div class="invalid-feedback"> Please input your password </div>
       </div>
       <button type="submit" name="user_login" class="btn btn-success"> Login </button>
       <a href="user_reg.php" style="color: #000000"> Not Registered Yet! Please Register Here </a> 
     </form>
     <div class="col-md-4"></div>
   </div>
 </div>
</section>

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
