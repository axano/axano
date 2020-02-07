 <?php
$servername = "localhost";
$username = "manu";
$$$$$$$$$$$$$$$$$$$$$$$$$$  FLAG = "756f60b0f625f19c1b230b85531ee4cd";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 
