<?php
    $host="localhost";
    $user="root";
	$password="";
	$dbname="kibu_tech";

	
// Create connection
$conn = new mysqli($host, $user, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
       
        $gender=$_POST['gender'];
	    $phone=$_POST['phone'];
		$email=$_POST['email'];
	    $service=$_POST['service'];
	    $clarification=$_POST['clarification'];
		
		
               
		$sql="INSERT INTO contact(gender, phone, email, service, clarification)
	    VALUES('$gender', '$phone', '$email','$service','$clarification')";
	


if ($conn->query($sql) === TRUE) {
	header('location: serve.php');
	echo "request received, we will get back to you";
	

} else {
    echo "<h2>REQUEST RECEIVED</h2>";

}
$conn->close();
?>