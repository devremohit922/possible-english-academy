<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"possible_academy"
);

if(!$conn)
{
die("Database Connection Failed");
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO contact
(name,email,mobile,subject,message)

VALUES

('$name','$email','$mobile','$subject','$message')";

if(mysqli_query($conn,$sql))
{
echo "
<h2 style='color:green;text-align:center;margin-top:50px;'>
✅ Message Sent Successfully
</h2>

<center>
<a href='contact.html'>
<button style='padding:10px 20px;'>
Go Back
</button>
</a>
</center>
";
}
else
{
echo mysqli_error($conn);
}

}

?>