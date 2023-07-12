<?php
    include "config.php";
    
    
if(isset($_GET['accept'])) {
    $id=$_GET['id'];
    date_default_timezone_set('Asia/Kolkata');
        $date=date('Y-m-d H:i:s');
     
       $sql="UPDATE `donation` SET `created_status`=2 where `id`=$id";
       $result=mysqli_query($conn,$sql);

   if($result==TRUE){
    header('Location:availability.php');
   }
   else{
       echo "error:".$sql."<br>".$conn->error;
   }
} 