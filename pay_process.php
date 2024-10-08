<?php

$cardnumber = $_POST['cardnumber'];
$expirydate  = $_POST['expirydate'];
$cvv     = $_POST['cvv'];

$conn = new mysqli('localhost','root','','bansal');
if($conn->connect_error)
{
   die('connection failed :'.$conn->connect_error);
    }
else	
{
   $stmt = $conn->prepare("insert into pay(cardnumber,expirydate,cvv)
       values(?,?,?)");
   $stmt -> bind_param("iii",$cardnumber,$expirydate,$cvv);
   $stmt -> execute();
   echo " congratulations your Payment is successfully.......";
   $stmt -> close();
   $conn -> close();
}


?>
