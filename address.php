<?php

$fullname = $_POST['fullname'];
$contactnumber = $_POST['contactnumbar'];
$Address = $_POST['Address'];
$road = $_POST['road'];
$pincode = $_POST['pincode'];
$city = $_POST['city'];
$state = $_POST['state'];

//database connection//
$conn = new mysqli('localhost','root','','bansal');
if($conn->connect_error) 
{
    die('connection failed :' .$conn->connect_error);
} 
else 
{
    $stmt = $conn->prepare("insert into form(fullname,contactnumber,Address,road,pincode,city,state)
            values(?,?,?,?,?,?,?)");
    $stmt -> bind_param("sississ",$fullname,$contactnumber,$Address,$road,$pincode,$city,$state);
    $stmt -> execute();
    echo "Congratulations your Address is saved successfully.......";
    $stmt -> close();
    $conn -> close();
}
 ?>