<?php
session_start();

if(!isset($_SESSION['admin']))
{
header("Location: login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<div class="dashboard">

<h1>Welcome Admin 👋</h1>

<h2>Possible English Academy Dashboard</h2>

<div class="dashboard-menu">

<a href="student.php" class="dashboard-card">
📚 Student List
</a>

<a href="message.php" class="dashboard-card">
📩 Contact Messages
</a>

<a href="register.php" class="dashboard-card">
📝 Registrations
</a>
<a href="contact_data.php" class="dashboard-card">
📩 Contact Messages

</a>

</div>

<a href="logout.php" class="logout-btn">
Logout
</a>

</div>

</body>
</html>