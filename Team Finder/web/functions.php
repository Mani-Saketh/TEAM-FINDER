<?php
function insertstudentinfo($rollno,$name,$contactnumber,$password,$email){
include("connection.php");
$query="insert into studentinfo values('$rollno','$name','$email','$contactnumber','$password')";
mysqli_query($con,$query);
mysqli_close($con);

}

function logout(){
    session_destroy();
  header("Location:index.php");
}

function updatenumber($contact,$rollno){
$query="update studentinfo set contact_number='$contact' where rollno='$rollno'";
include("connection.php");
mysqli_query($con,$query);


}
function updatepassword($password,$rollno){
  $query="update studentinfo set password='$password' where rollno='$rollno'";
  include("connection.php");
  mysqli_query($con,$query);
  
  }
  function updateskills($skills,$rollno){
     include("connection.php");
    $value=  implode(",", $skills);
    $query="update skillset set skills='$value' where rollno='$rollno'";
    $result=mysqli_query($con,$query);
  }
  function updatemsg($msg,$rollno){
    include("connection.php");
    $query="update skillset set msg='$msg' where rollno='$rollno'";
    $result=mysqli_query($con,$query);
  }
  function deleteacc($rollno){
    include("connection.php");
    $query="Delete from  studentinfo where rollno='$rollno'";
    mysqli_query($con,$query);
    $query="Delete from  skills where rollno='$rollno'";
    mysqli_query($con,$query);
    session_start();
    session_destroy();
    header("Location:index.php");
    die;
  
  }
  function logoutadmin(){
    session_destroy();
    header("Location:admin.php");
    die();
  }
  function deleteaccadmin($rollno)
  {
    include("connection.php");
    $query="Delete from  studentinfo where rollno='$rollno'";
    mysqli_query($con,$query);
    $query="Delete from  skillset where rollno='$rollno'";
    mysqli_query($con,$query);
    header("Location:adminmain.php");
  
    
  
  }
?>
