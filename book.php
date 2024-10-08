<?php


     $title = $_POST['title'];
     $author  = $_POST['author'];
     $conditionbook     = $_POST['conditionbook'];
     $price  = $_POST['price'];
     $cover   = $_POST['cover'];
     $description   = $_POST['description'];
     
     $conn = new mysqli('localhost','root','','bansal');
     if($conn->connect_error)
	 {
        die('connection failed :'.$conn->connect_error);
   	  }
	else	
	{
        $stmt = $conn->prepare("insert into salebook(title,author,conditionbook,price,cover,description)
            values(?,?,?,?,?,?)");
        $stmt -> bind_param("sssiss",$title,$author,$conditionbook,$price,$cover,$description);
        $stmt -> execute();
        echo " Congratulations your book is ready to be saled.......";
        $stmt -> close();
        $conn -> close();
    }

?>