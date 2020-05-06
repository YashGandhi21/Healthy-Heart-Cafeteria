
<?php 

$conn = mysqli_connect("127.0.0.1","root","","hhc");

 if(!$conn)
  {
 	die("connection failed:" . mysqli_connect_error());
 }
 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$query = "INSERT INTO adminlog(username,passw)VALUES(?,?)";
$stmt =  mysqli_prepare($conn,$query);
$stmt->bind_param("ss", $_POST['fname'],$_POST['password']);
$stmt->execute();
header("location: hhc.html");
}

mysqli_close($conn);
 ?>