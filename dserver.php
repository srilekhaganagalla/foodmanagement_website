<?php
if (isset($_POST['foodname'])&& isset($_POST['quantity'])) {
     
    function validate($data){
        $data=trim($data);
        $data=stripslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $foodname = validate($_POST['foodname']);
    $quantity = validate($_POST['quantity']);
    $address = $_POST['address'];
    $time = $_POST['time'];
    $avail = $_POST['avail'];
    $mobileno = $_POST['mobileno'];
    $msg = $_POST['msg'];
   
    
    

    // if (empty($foodname)){
    //      header("Location: donation.php?error=name is required");
    //      exit(); 
    // }else if(empty($password)){
    //      header("Location: rest.php?error=password is required");
    //      exit(); 
    // }else{
    //     echo " ";
    // }
}
else{
    header("Location: thanku.php");
    exit();
}
 
$conn = mysqli_connect('localhost','root','','food');
if($conn->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}
else{
    // $stmt = $conn->prepare("insert into donation(foodname,quantity,address,time,avail,mobileno,msg)values(?,?,?,?,?,?,?)");
    // $stmt->bind_param("sssssis",$foodname,$quantity,$address,$time,$avail,$mobileno,$msg);
    // $stmt->execute();
    $query = "INSERT INTO donation(foodname,quantity,address,time,avail,mobileno,msg,created_status)
  			  VALUES('$foodname','$quantity','$address','$time','$avail','$mobileno','$msg','0')";
  	mysqli_query($conn, $query);
      $_SESSION['success'] = "donated";
  	header('location: thanku.php');
    print("\n ");
    echo "<center></center>";
    // $stmt->close();
    $conn->close();
}
?>