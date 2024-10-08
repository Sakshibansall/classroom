<?php


$title = $_POST['title'];
$author  = $_POST['author'];
$dition     = $_POST['dition'];
$price  = $_POST['price'];
$cover   = $_POST['cover'];
$description    = $_POST['description'];


$conn = new mysqli('localhost','root','','bansal');
if($conn->connect_error)
{
   die('connection failed :'.$conn->connect_error);
}
else	
{
   $stmt = $conn->prepare("insert into database(title,author,dition,price,cover,description)
       values(?,?,?,?,?,?)");
   $stmt -> bind_param("ssssss",$title,$author,$dition,$price,$cover,$description);
   $stmt -> execute();
   echo " You Have registerd successfully.......";
   $stmt -> close();
   $conn -> close();
}

?>
