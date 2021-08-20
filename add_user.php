 <!DOCTYPE html>
<html>
<?php
if(isset($_POST['s'])){
    $con=mysqli_connect('localhost','root','','crime_portal');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $serv_no=$_POST['serv_no'];
        $u_name=$_POST['name'];
        $id_no=$_POST['id_no'];
        
       // $password=md5($u_pass);
       $reg="insert into userlogin values('$serv_no','$u_name','$id_no')";
        
        $res=mysqli_query($con,$reg);
        if(!$res)
        {
        $message1 = "User Already Exist";
        echo "<script type='text/javascript'>alert('$message1');</script>";
    }
            else
    {
        $message = "User Registered Successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    }
}
?>
  
<script>
     function f1()
        {
            var sta=document.getElementById("serv_no1").value;
            var sta1=document.getElementById("name1").value;
            var sta2=document.getElementById("id_no1").value;
            
	   
  var x=sta.indexOf(' ');
  var x1=sta1.trim();
  var x2=sta2.indexOf(' ');
  
	  if(sta!="" && x>=0){
    document.getElementById("serv_no1").value="";
    document.getElementById("serv_no1").focus();
      alert("Space Not Allowed");
        }
        else if(sta1!="" && x1==""){
		document.getElementById("name1").value="";
		document.getElementById("name1").focus();
		  alert("Space Not Allowed");
        }
        
        else if(sta2!="" && x2>=0){
    document.getElementById("id_no1").value="";
    document.getElementById("id_no1").focus();
      alert("Space Not Allowed");
        }
      
}
</script>    
    
<head>
<title>Add New User</title>

<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
<link href="crime_report.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top">
  <?php include "sys_header.html";?>
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
        <li class="active"><a href="add_user.php">Add New User</a></li>
       </ul>
    </div>
  </div>
</nav>
	
<div class="video" style="margin-top: 15%"> 
	<div class="center-container">
		 <div class="bg-agile">
			<br><br>
			<div class="login-form">	
				<form action="#" method="post">
        <p style="color:#dfdfdf">Service Number</p><input type="text"  name="serv_no"  required="" id="serv_no1" onfocusout="f1()" />
					<p style="color:#dfdfdf">Full Name</p><input type="text"  name="name"  required="" id="name1" onfocusout="f1()" />
					<p style="color:#dfdfdf">Id Number</p><input type="text"  name="id_no"  required="" id="id_no1" minlength="6" maxlength="10" onfocusout="f1()" />
					<input type="submit" value="Submit" name="s">
				</form>	
			</div>	
		</div>
	</div>	
</div>
<?php include "footer.html";?>	
 <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>
 <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>