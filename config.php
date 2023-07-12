<?php


 $servername="localhost";
 $username="root";
 $password="";
 $dbname="food";
// $servername="localhost";
// $username1="triaright_user";
// $password="Mycompany@123";
// $dbname="triaright";

$conn=mysqli_connect($servername,$username,$password,$dbname);
// $conn=mysql_connect('localhost','mythrisoln','Saiteja');
if($conn->connect_error){
    die("connection failed".$conn->connect_error);
}
?>