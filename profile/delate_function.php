<?php
include_once '../includes/dbh.inc.php';


if (isset($_GET['id'])) {  
     $id = $_GET['id'];  
     $query = "DELETE FROM `users` WHERE usersID = '$id'";  
     $run = mysqli_query($conn,$query);  

     $query = "DELETE FROM `profileimg` WHERE userid = '$id'";  
     $run = mysqli_query($conn,$query); 


     if ($run) {  
          header('location:delate.php');  
     }else{  
          echo "Error: ".mysqli_error($conn);  
     }  
}else{

header("location: delate.php");
    exit();

}
