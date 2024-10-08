<?php
$name = $_POST['name'];
$lname  = $_POST['lname'];
$mail     = $_POST['mail'];
$number  = $_POST['number'];
$message   = $_POST['message'];

$conn = new mysqli('localhost','root','','bansal');
if($conn->connect_error)
{
   die('connection failed :'.$conn->connect_error);
}
else	
{
   $stmt = $conn->prepare("insert into contactus(name,lname,mail,number,message)
       values(?,?,?,?,?)");
   $stmt -> bind_param("sssis",$name,$lname,$mail,$number,$message);
   $stmt -> execute();
   echo " Thankyou for Contacting us.......";
   $stmt -> close();
   $conn -> close();
}

?>
