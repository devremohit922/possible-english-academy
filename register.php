<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"possible_academy"
);

if(!$conn){
die("Connection Failed");
}

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$course = $_POST['course'];

$sql = "INSERT INTO students(name,email,mobile,course)
VALUES('$name','$email','$mobile','$course')";

if(mysqli_query($conn,$sql))
{
echo "<h2>Registration Successful ✅</h2>";
echo "<a href='index.html'>Go Back</a>";
}
else
{
echo "Error";
}

?>