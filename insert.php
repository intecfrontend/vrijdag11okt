<?php
$conn = mysqli_connect("localhost","root","mysql","dblessonusers"); 

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO `users`(`id`, `username`, `name`, `email`) VALUES ('','".$_GET['username']."','".$_GET['name']."','".$_GET['email']."')";

if ($conn->query($sql) === TRUE) {
    echo "Your data have been added to the MYSQL database";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;

} 


mysqli_close($conn);
?>