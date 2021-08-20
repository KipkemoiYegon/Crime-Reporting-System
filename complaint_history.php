<!DOCTYPE html>
<html>
<head>
    <?php
    session_start();
    
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }
    mysqli_select_db("crime_portal",$conn);
    
    if(!isset($_SESSION['x']))
    header("location:userlogin.php");
    
        $u_id=$_SESSION['serv_no'];
    
    $query="select * from complaint_report order by Complaint_Id desc";
    $result=mysqli_query($conn,$query);  
    ?>
    
	<title>Complaint History</title>
    
	   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	   <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

    <script>
     function f1()
        {
          
            var sta2=document.getElementById("ciid").value;
            var x2=sta2.indexOf(' ');
  
            if(sta2!="" && x2>=0)
            {
                  document.getElementById("ciid").value="";
                  alert("Space Not Allowed");
            }
        }
    </script>

</head>

    
<body style="background-color: #dfdfdf">
        <nav  class="navbar navbar-default navbar-fixed-top">
            <?php include "sys_header.html"?>
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
                        <li ><a href="userlogin.php">User Login</a></li>
                        <li ><a href="crime_report.php">User Home</a></li>
                    </ul>
   
                    <ul class="nav navbar-nav navbar-right">
                        <li ><a href="complaint_report.php">New Complaint</a></li>
                        <li ><a href="crime_report.php">New Crime</a></li>
                        <li class="active"><a href="complaint_history.php">Complaint History</a></li>
                        <li ><a href="crime_history.php">Crime History</a></li>
                        <li><a href="logout.php">Logout &nbsp <i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
                    </ul>
                  </div>
              </div>
        </nav>

    <div>
    

    <div style="padding:50px; margin-top: 8%;">
      <table class="table table-bordered">
       <thead class="thead-dark" style="background-color: black; color: white;">
         <tr>
          <th scope="col">Crime Id</th>
          <th scope="col">Complainant Name</th>
          <th scope="col">Id Number</th>
          <th scope="col">Date</th>
          <th scope="col">Residence</th>
          <th scope="col">Details/th>
        </tr>
      </thead>

<?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>
        <td><?php echo $rows['Complaint_Id']; ?></td>
        <td><?php echo $rows['Complainant_Name']; ?></td>
        <td><?php echo $rows['Id_Number']; ?></td>    
        <td><?php echo $rows['Date']; ?></td>          
        <td><?php echo $rows['Residence']; ?></td> 
        <td><?php echo $rows['Details']; ?></td>         
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
  
</table>
 </div>
</div>
<div style="position: relative;
   left: 0;
   right: 0;
   bottom: 0;
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