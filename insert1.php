
<?php 

$conn = mysqli_connect("127.0.0.1","root","","hhc");

 if(!$conn)
  {
 	die("connection failed:" . mysqli_connect_error());
 }
 
 
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$query = "INSERT INTO user(usernm,contact,email_id,password)VALUES(?,?,?,?)";
$stmt =  mysqli_prepare($conn,$query);
$stmt->bind_param("ssss", $_POST['fname'], $_POST['phno'], $_POST['email'], $_POST['password']);
$stmt->execute();
header("location: userlog.html");
}

mysqli_close($conn);
 ?>