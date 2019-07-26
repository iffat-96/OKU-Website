<?php
 $username = filter_input(INPUT_POST, 'username-register');
 $email = filter_input(INPUT_POST, 'emailaddress-register');
 $password = filter_input(INPUT_POST, 'password-register');
 if (!empty($username)){
    if (!empty($email)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "oku_website";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (username, email, password)
values ('$username','$email','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>