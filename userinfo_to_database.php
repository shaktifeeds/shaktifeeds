<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <?php 
		function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}		
	
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_POST['name'])){
				echo "Name is required";
				}
			else{
			$name= test_input($_POST['name']);
			}
			if (empty($_POST["email"])) {
			echo "Email is required";
		 	 } else {
			$email = test_input($_POST["email"]);
			// check if e-mail address is well-formed
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  echo "Invalid email format"; 
			}
		  	}
			if(empty($_POST['contact'])){
				echo "Contact is required";
			}else{
			$contact= test_input($_POST['contact']);
			}
			if(empty($_POST['comment'])){
			$comment=" ";}
			else{
			$comment= test_input($_POST['comment']);
			}
		if(isset($name) && isset($email) && isset($contact)){
		$host_name = "db689283003.db.1and1.com";
		$database = "db689283003";
		$user_name = "dbo689283003";
		$password = "Shubham_56300";
		
		$conn = mysqli_connect($host_name, $user_name, $password, $database);
				
		
		// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$sql = "INSERT INTO users (name, email, contact, comment, approved)
		VALUES ('$name', '$email', '$contact', '$comment', '0')";
		
		if (mysqli_query($conn, $sql)) {
			echo "<h1>Your Comment Has been saved and posted duly </h1>";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
	}
	
	?>
</body>
</html>
