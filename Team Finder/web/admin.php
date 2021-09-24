<?php
include("connection.php");
session_start();
if(isset($_POST['submit'])){
  $name=$_POST['user_name'];
  $password=$_POST['user_code'];
  $query="select * from admin where name='$name'";
  $result=mysqli_query($con,$query);
  if($result && mysqli_num_rows($result)>0){
      $user_data=mysqli_fetch_assoc($result);
     if($password==$user_data['password']){
         header("Location:adminmain.php");
         $_SESSION['rollno']=$user_data['rollno'];
     }else{
         echo '<script> alert("Password Incorrect")</script>';
     }
  }else{
     echo '<script> alert("admin not found")</script>';

  }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>TEAM FINDER</title>
</head>
<body>
<h3>
  <style>
    body{
     
      background: #7d7e7d;
    /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover, #7d7e7d 0%, #0e0e0e 100%);
    /* FF3.6-15 */
    background: -webkit-radial-gradient(center, ellipse cover, #7d7e7d 0%, #0e0e0e 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: radial-gradient(ellipse at center, #7d7e7d 0%, #0e0e0e 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7d7e7d', endColorstr='#0e0e0e', GradientType=1);
    }
  </style>
<a style="
  color:white;
  "href="first.html">
 Home Page </a><br></h3>
<br><br><br>
<section style="text-align: center; background: none;" id = "first">
<h2>Admin Login</h2>
<form style="
padding:20px;
border-style: solid;
margin-right:300px;
margin-top:100px;
margin-left:400px;
margin-bottom: 150px;"
method="POST">
<b><label style ="padding: 12px 12px 12px 0; background : none;
    " for="user_name">User Name:</label></b>

<input type="text" id="user_name" name="user_name"><br><br><br>

<b><label style ="padding: 12px 12px 12px 0; background: none;" for="user_code">Password:</label></b>

<input type="password" id="user_code" name="user_code"><br><br><br>
<input style="color: antiquewhite;
    background: #45484d;
    /* Old browsers */
    background: -moz-radial-gradient(center, ellipse cover, #45484d 0%, #000000 100%);
    /* FF3.6-15 */
    background: -webkit-radial-gradient(center, ellipse cover, #45484d 0%, #000000 100%);
    /* Chrome10-25,Safari5.1-6 */
    background: radial-gradient(ellipse at center, #45484d 0%, #000000 100%);
    /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#45484d', endColorstr='#000000', GradientType=1);
    width : 260px; padding: 10px;" type="submit" value="Submit" name="submit">
</form>
</section>
</body>

</html>