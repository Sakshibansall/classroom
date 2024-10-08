<?php


     $firstName = $_POST['firstName'];
     $lastName  = $_POST['lastName'];
     $email     = $_POST['email'];
     $password  = $_POST['password'];
     $confirmPassword = $_POST['confirmPassword'];
     $Address   = $_POST['Address'];
     $city      = $_POST['city'];
     $state     = $_POST['state'];
     
     $conn = new mysqli('localhost','root','','bansal');
     if($conn->connect_error)
	 {
        die('connection failed :'.$conn->connect_error);
   	  }
	else	
	{
        $stmt = $conn->prepare("insert into registeration(firstName,lastName,email,password,confirmPassword,Address,city,state)
            values(?,?,?,?,?,?,?,?)");
        $stmt -> bind_param("ssssssss",$firstName,$lastName,$email,$password,$confirmPassword,$Address,$city,$state);
        $stmt -> execute();
        echo " You Have registerd successfully.......";
        $stmt -> close();
        $conn -> close();
    }

?>