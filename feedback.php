<?php 

$conn = mysqli_connect("127.0.0.1","root","","hhc");

 if(!$conn)
  {
 	die("connection failed:" . mysqli_connect_error());
 }
 

 $id = $_POST['user-id'];
 $cmp = $_POST['complaints'];
 $cmmnt = $_POST['comments'];

 $query = "INSERT INTO feedback(user_id,comments,complaints)VALUES('$id','$cmmnt','$cmp')";

 $result = mysqli_query($conn,$query);

if(!$result)
	echo "UNSUCCESSFUL";

header("location: feedback.html");


mysqli_close($conn);
 ?>