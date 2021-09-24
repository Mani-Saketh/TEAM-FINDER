<?php 
include("connection.php");
$query="select * from Hackathon";
$result=mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="hackathon.css">
        <link rel="stylesheet" href="adminhackathon.css">
    </head>
    <body>
     
        <div class="header">
        <a href="http://localhost/web/addhackathon.php">ADD NEW HACKATHON</a>
       
            <div class="header-logo"></div> 
        </div>
        <a href="http://localhost/web/adminmain.php" class="new">GO BACK</a>
        <marquee direction="right" scrolldelay="1" scrollamount="14" behavior="alternate">
        <h1>Upcoming Hackathon!!<h1></marquee>
        <div class="table1">
        <table class="a">
         <thead>
            <tr>
             
              
              <th class="Desc">Description</th>
              
              <th class="Date">Date(yy-mm-dd)</th>
              <th class="name">Hackathon Name</th>
            </tr>
        </thead>  
        <tbody>
            <?php while($userdata=mysqli_fetch_assoc($result)){
              ?>
            <tr>
              <td><?php echo $userdata['description'];?></td>
              <td><?php echo $userdata['Date'];?></td>
              <td><?php echo $userdata['name'];?></td>
            </tr>
            <?php }?>
            </tbody>  
          </table>
          
        </div>
    </body>
</html>