<?php
include("connection.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $date=$_POST['date'];
    $desc=$_POST['desc'];
$query="insert into hackathon values('$name','$date','$desc')";
mysqli_query($con,$query);

}


?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="addhackathon.css">
    </head>
 <body>
    <div class="header" style="margin-top: -20px; margin-right:  -30px; margin-left:  -30px;">
    <a href="http://localhost/web/adminhackathon.php">GO BACK</a>
        <div class="header-logo">TeamFinder</div>
</div>

<div class="container">
    <form method="POST">
    <lable for="name">Enter Name</lable><br>
    <input type="text" name="name" placeholder="Enter name of Hackathon"><br><br><br>
    <lable for="date">Enter Date(yyyy-mm-dd)</lable><br>
    <input type="text" name="date" placeholder="Enter date of Hackathon"><br><br><br>
    <lable for="desc">Enter Description</lable><br>
    <input type="text" name="desc" class="desc1" placeholder="Enter Description of Hackathon"><br>
    <input type="submit" name="submit" value="Submit" class="submit">
</form>
</div>

 </body>

</html>