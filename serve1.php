<?php
    $host="localhost";
    $user="root";
	$password="";
	$dbname="kibu_tech";

	

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
       
        $service=$_POST['service'];
	    $clarification=$_POST['clarification'];
		
               
		$sql="INSERT INTO service(service,clarification)
	    VALUES('$service','$clarification')";
	


if ($conn->query($sql) === TRUE) {
	header('location: serve.php');
	echo "request received, we will get back to you";
	

} else {
    echo "<h2>REQUEST NOT RECEIVED</h2>";

}
$conn->close();
?>