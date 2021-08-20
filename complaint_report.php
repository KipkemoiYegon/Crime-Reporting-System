<!DOCTYPE html>
<html>
 
<?php
session_start();
    if(!isset($_SESSION['x']))
        header("location:adminlogin.php");
    
    
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    
    $serv_no=$_SESSION['serv_no'];
        
        $result=mysqli_query($conn,"SELECT Service_No FROM adminlogin where Service_No='$serv_no' ");
        $q2=mysqli_fetch_assoc($result);
        $id_no=$q2['Service_No'];
    
        $result1=mysqli_query($conn,"SELECT Names FROM adminlogin where Service_No='$serv_no' ");
        $q2=mysqli_fetch_assoc($result1);
        $names=$q2['Names'];
    
    
if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','','crime_portal');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        
        $complaint_id=$_POST['complaint_id'];
        $comp_name=$_POST['comp_name'];
        $id_no=$_POST['id_number'];
        $place=$_POST['place'];
        $date=$_POST['date'];
        $details=$_POST['details'];
        
        $var=strtotime(date("Ymd"))-strtotime($date);
        
        
    if($var>=0)
    {
          
      $comp="INSERT into complaint_report values('$complaint_id','$comp_name', '$id_no','$place','$date','$details')";
       
      $res=mysqli_query($con,$comp);
      
      if(!$res)
      {
        $message1 = "Complaint already filed";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {
          $message = "Complaint Registered Successfully";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
    }
    else
    {
     $message = "Enter Valid Date";
      echo "<script type='text/javascript'>alert('$message');</script>";
    }
  }
}
?>
    
 <script>
     function f1()
        {
           var sta1=document.getElementById("desc").value;
           var x1=sta1.trim();
          if(sta1!="" && x1==""){
          document.getElementById("desc").value="";
          document.getElementById("desc").focus();
          alert("Space Found");
        }
}
 </script>
   
<head>
	<title>Complaint Report</title>

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

	<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

	<link href="crime_report.css" rel="stylesheet" type="text/css" media="all" />

</head>

<body style="background-size: cover;
    background-image: url(home_bg1.jpeg);
    background-position: center;">

  
	<nav  class="navbar navbar-default navbar-fixed-top">
    
    <?php include "sys_header.html";
    ?>

  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php"><b>Home</b></a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li ><a href="userlogin.php" style="font-size: 15px;">User Login</a></li>
        <li ><a href="crime_report.php" style="font-size: 15px;">User Home</a></li>
      </ul>
     
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="complaint_report.php" style="font-size: 15px;">New Complaint</a></li>
        <li ><a href="crime_report.php" style="font-size: 15px;">New Crime</a></li>
        <li><a href="complaint_history.php" style="font-size: 15px;">Complaint History</a></li>
        <li><a href="crime_report_shistory.php" style="font-size: 15px;">Crime History</a></li>
        <li><a href="logout.php" style="font-size: 15px;">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
      </ul>
    </div>
  </div>
 </nav>
    
    
<div class="video" style="margin-top: 10%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form"><p><h2 style="color:white">Welcome <?php echo $names ?></h2></p><br>
                                    <p><h2> Log New Complaint</h2></p><br>

        <form action="#" method="post" style="color: gray">
        Complaint Id 
        <input type="text"  name="complaint_id" placeholder="Complaint Identity Number" required="" value=<?php #echo "$id_no"; ?>><br>
        Complainant Name 
        <input type="text"  name="comp_name" placeholder="Complainant Names" required="" value=<?php #echo "$id_no"; ?>><br>
        Id Number
					<input type="text"  name="id_number" placeholder="Id Number" required="" value=<?php #echo "$id_no"; ?>>
				
        Residence
        <input type="text"  name="place" placeholder="Residence of Complainant" required="" value=<?php #echo "$id_no"; ?>><br>
					<div class="Top-w3-agile" style="color: gray">
					Date : &nbsp &nbsp  
						<input style="background-color: #313131;color: white" type="date" name="date" required>
					</div>
					<br>
					<div class="top-w3-agile" style="color: gray">
					Details
						<textarea  name="details" rows="20" cols="50" placeholder="Give details of the complain" onfocusout="f1()" id="desc" required></textarea>
					</div>
					<input type="submit" value="Submit" name="s">
				</form>	
			</div>	
		</div>
	</div>	
</div>	
<?php
include "chatbot_button.html";  


?>
<div style="left: 0;
   bottom: 0;
   width: 100%;
   height: 30px;
   background-color: rgba(0,0,0,0.8);
   color: white;
   text-align: center;">

  <?php

  include "footer.html";
  include "chatbot_button.html";      

  ?>
</div>
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>