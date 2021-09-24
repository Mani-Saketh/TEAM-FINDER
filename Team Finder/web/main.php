
<?php
session_start();
$rollno=$_SESSION['rollno'];
include("connection.php");
include("functions.php");
$query="select * from skillset";
$result=mysqli_query($con,$query);
if(isset($_POST['Logout'])){
  logout();
}
if(isset($_POST['Profile'])){
  header("Location:profile.php");
  die();
}
if(isset($_POST['Hackathon'])){
  header("Location:Hackathon.php");
  die();
}
if(isset($_POST['search'])){
  $search2=$_POST['search2'];
  $query="SELECT *  FROM `skillset` WHERE `skills` LIKE '%$search2%'";
$result=mysqli_query($con,$query);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="main2.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<script src="main.js"></script>

</body>

<div class="header">
    <div class="header-logo"></div> 
</div>
<div class="dropdown">
        <button class="dropbtn"><?php echo $rollno?><i class="material-icons">person</i></button>
        <div class="dropdown-content">
          <form method="POST">
            <input type="submit" value="Profile" name="Profile" >
          </form>
          <form method="POST">
            <input type="submit" value="Hackathon" name="Hackathon" >
          </form>
          <form method="POST">
            <input type="submit" value="LogOut" name="Logout" >
          </form>
        </div>
      </div>
      <form class="example" method="POST" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search for skills.." name="search2">
  <button type="submit" name="search"><i class="fa fa-search"></i></button>
</form>
<div class=main>

<?php while($user_data=mysqli_fetch_assoc($result)){
  $roll=$user_data['rollno'];
   
  $query1="select * from studentinfo where rollno='$roll'";
  $result1=mysqli_query($con,$query1);
  $user_data1=mysqli_fetch_assoc($result1);
?>   
  
     <form method="POST">
    <div class="container">
      
       <label for="name">Name</label>
       <input name="name" value=<?php echo $user_data1['name'];?> class="name" disabled  type="text"><br>
       <label for="rollno">Rollno</label>
       <input name="rollno" value=<?php echo $user_data1['rollno'];?> class="rollno" disabled  type="text"><br>
       <label for="email">Email</label>
       <input name="email" value=<?php echo $user_data1['email'];?> class="email" disabled  type="text"><br>
       
        <label for="skills" class="skills">Skills</label>
        <div class=skillbox>
        <input name="skills" value=<?php echo $user_data['skills'];?> class="email" disabled  type="text"><br>
       </div>
      
        <label for="msg" class="msg">Other skills,competition etc..</label>
        <div class=msgbox>
        <input name="msg" value="<?=$user_data['msg']?>" class="msg" disabled  type="text">
       </div>
        

    </div>
    </form>
<?php }?>
</div>

</html>