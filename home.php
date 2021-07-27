<!DOCTYPE html>
<html>
<head>
    
	<title>Crime Portal</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="home.css">
  <style>
    body {
   background-position: center; 
}

body,
html {
    width: 100%;
    height: 100%;
    font-family: "Lato";
    color: white;
}

h1 {
  font-weight: 700;
  font-size: 5em;
}


.content{
  padding-top: 25%;
  text-align: center;
    text-shadow: 0px 4px 3px rgba(0,0,0,0.4),
                 0px 8px 13px rgba(0,0,0,0.1),
                 0px 18px 23px rgba(0,0,0,0.1);
  background-image: url(home1.jpg);
  background-size: cover;
  height: 600px;
}

hr {
    width: 250px;
    border-top: 1px solid #f8f8f8;
    border-bottom: 1px solid rgba(0,0,0,0.2);
}
.login_button{
  border: 1px solid gray;
  border-radius: 5px;
}




</style>
    
</head>
    
<body>



 <nav class="navbar navbar-default navbar-fixed-top">
   <?php
   include "sys_header.html";
   ?>


  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Crime Portal</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Home</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">About Us  </i></a></li>
        <li><a href="#services">Our Services  </i></a></li>
        <li><a href="#news">News  </a></li>
        <li><a href="userlogin.php" class="login_button">User Login  <i class="fa fa-user"></i></a></li>
        <li><a href="admin_login.php" class="login_button">Admin Login  <i class="fa fa-user"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>

 <div class="container">
 	<div class="row">
 		<div class="col-lg-12">
 			<div class="content">
 				<h1 id="news">Have a Crime Report?</h1>
 				<h3>Log in Below &nbsp &nbsp<i class="fa fa-hand-o-down" aria-hidden="true"></i></h3>
 				<hr>
          <a  href="userlogin.php" class="btn btn-default btn-lg" role="button" aria-pressed="true">Sign In!</a>
         <br><br><br><br><br>
         
 			</div>
 		</div>
 	</div>
 </div>

 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
 <div style="color: black;"> <?php include "news_user.php"?></div>
 <?php include "services.html";?>
 <?php include "about.html";?>
 <?php
  include "footer.html";
 ?>
</body>
</html>