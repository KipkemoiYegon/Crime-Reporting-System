<!DOCTYPE html>
<html lang="en">
<head><?php

if(isset($_POST['s2'])){
    $con=mysqli_connect('localhost','root','','crime_portal');
    if(!$con)
    {
        die('could not connect: '.mysqli_error());
    }
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
       
        $date=$_POST['date'];
        $description=$_POST['description'];
        $place=$_POST['place'];
        
        $var=strtotime(date("Ymd"))-strtotime($date);
        
        
    if($var>=0)
    {
          
      $comp="INSERT into news values('$date','$description','$place')";
       
      $res=mysqli_query($con,$comp);
      
      if(!$res)
      {
        $message1 = "News not added or content is missing";
        echo "<script type='text/javascript'>alert('$message1');</script>";
      }
      else
      {
          $message = "News Added";
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Page</title>
</head>
<body>
    

<h2 style="border: 1px solid black; width: 150px; color: white; background-color: black;"><b> Add News </b></h2>
<form action="#" method="post" style="color:black">
<div id="news" style="display:flex; border: 1px solid black; padding: 10px;" >

        <div style="color: black">
					Date Of Crime : &nbsp &nbsp  
						<input style="color: black" type="date" name="date" required> &nbsp &nbsp  Description: &nbsp &nbsp<br>
					</div>
					<div>
					
						<textarea style=" background-color: black; height: 100px; width: 400px;"  name="description" rows="20" cols="5 0" placeholder="Describe the incident in details with time" onfocusout="f1()" id="desc" required></textarea>
                    </div>&nbsp &nbsp
                    <div>
                    Place of Occurrence: &nbsp &nbsp
        <input type="text"  name="place" placeholder="Place of the crime" required>
</div> &nbsp &nbsp
<input style="height: 25px; background-color: #00bfff; border-radius:5px; color: white;" type="submit" value="Submit" name="s2">
</div>
					
				</form><br>

</body>
</html>