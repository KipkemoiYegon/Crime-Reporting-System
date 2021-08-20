<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    $conn=mysqli_connect("localhost","root","","crime_portal");
    if(!$conn)
    {
        die("could not connect".mysqli_error());
    }

    $query="select * from news order by date desc";
    $result=mysqli_query($conn,$query);
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News</title>
</head>
<body>
  <div style="border-bottom: 1px solid green;">
    <h1 id="services" style="color: black; font-size: 30px; text-decoration: underline;">News</h1>
    <div >
      <table class="table table-bordered">
       <thead class="thead-dark" style="text-align: left; text-decoration: underline;">
         <tr>
          <th scope="col">Date Posted</th>
          <th scope="col">Description</th>
        </tr>
      </thead>
    <?php
      while($rows=mysqli_fetch_assoc($result)){
    ?> 

    <tbody style="background-color: white; color: black;">
      <tr>    
        <td><?php echo $rows['Date']; ?></td> &nbsp &nbsp &nbsp 
        <td><?php echo $rows['Details']; ?></td>        
      </tr>
    </tbody>
    
    <?php
    } 
    ?>
    </table>
  </div>
    
</body>
</html>