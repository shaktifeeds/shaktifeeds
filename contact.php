<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" ) {    
if(empty($_POST['name'])){
	echo "Name is required";
	die;}
else{
$name=test_input($_POST['name']);    
}
if(empty($_POST['contact'])){
	echo "contact is required";
	die;}
else{
$contact=test_input($_POST['contact']);    
}
if(empty($_POST['email'])){
	echo "email is required";
	die;}
else{
	$email=test_input($_POST['email']);    
}
$city=test_input($_POST['city']);  
if(empty($_POST['comment'])){
    $comment="";
}else{
$comment=test_input($_POST['comment']);    
    }
$host_name = "db688916486.db.1and1.com";
$database = "db688916486";
$user_name = "dbo688916486";
$password = "Shubham_56300";

$con = mysqli_connect($host_name, $user_name, $password, $database);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO customers (username, email, contact, city, comment)
VALUES ('$name', '$email', '$contact', '$city', '$comment')";

if (mysqli_query($con,$sql)) {
    echo "Your Information has been recorded and you will be contacted as soon as possible";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>