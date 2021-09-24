<?php
session_start();
    include("connection.php");
    if(isset($_POST['submit'])){
     $email=$_POST['email'];
     $password=$_POST['password'];
     $query="select * from studentinfo where email='$email'";
     $result=mysqli_query($con,$query);
     if($result && mysqli_num_rows($result)>0){
         $user_data=mysqli_fetch_assoc($result);
        if($password==$user_data['password']){
            header("Location:main.php");
            $_SESSION['rollno']=$user_data['rollno'];
        }else{
            echo '<script> alert("password does not match")</script>';
        }
     }else{
        echo '<script> alert("user not found")</script>';

     }
 }
 if(isset($_POST['signup'])){
     header("Location:signup.php");
    
     die;
 }
    




?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style1.css">
        <link rel="stylesheet" href="style2.css">
       
    </head>
    <body style="overflow: hidden;">
        <script>
            var x=document.getElementById("Student login");


        </script>
        <div class="header" style="margin-top: -20px; margin-right:  -30px; margin-left:  -30px;">
        <a style="
    font-size: 15px;
    position: absolute;
    margin-left: 1400px;
    margin-top: 35px;
    color: aliceblue;
    float: left;
" href="http://localhost/web/second.html" class="new">GO BACK</a>
            <div class="header-logo">TeamFinder</div>
            
        </div>
        <div class="main">
           <div class="bgimg" style="margin-top: -30px; "
           style="margin-bottom: -50px;">
                 <div class="container">
                     <form method="POST">
                  
                    <lable for="email"><b>Enter Email</b></lable> <br>
                    <input type="email" name="email" placeholder="Enter Email" required><br>
                    <lable for="password"><b>Password</b></lable><br>
                    <input type="password" name="password" placeholder="Enter Password" required> <br>
                    <input id="Login"  type="submit" class="Login" name="submit" value="Login">
</form>  
                    <br>
                    <div class="newuser">
                        <form method="POST">
                      <h3>Do not have an account?</h3>
                      <input  id="signup" class="signup" value="Sign up" name="signup" type="submit">
                        <form>
                   </div>
                </div>



            </div>
        </div>
        <div style="margin-right: -30px; height : 100px; " class="footer">
    
        <div class="footer-logo">Thanks for your support</div>
        </div>
    </body>
</html>