<?php

$conn=mysqli_connect(
"localhost",
"root",
"",
"possible_academy"
);

$result=mysqli_query(
$conn,
"SELECT * FROM students ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Admin Dashboard</title>

<style>

body{
font-family:Arial;
padding:20px;
background:#f4f4f4;
}

table{
width:100%;
background:white;
border-collapse:collapse;
}

th,td{
padding:12px;
border:1px solid #ddd;
text-align:center;
}

th{
background:#0d6efd;
color:white;
}

</style>

</head>

<body>

<h1>Registered Students</h1>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Course</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

echo "

<tr>

<td>".$row['id']."</td>

<td>".$row['name']."</td>

<td>".$row['email']."</td>

<td>".$row['mobile']."</td>

<td>".$row['course']."</td>

</tr>

";

}

?>

</table>

</body>
</html>