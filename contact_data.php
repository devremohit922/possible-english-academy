<?php

$conn = mysqli_connect(
"localhost",
"root",
"",
"possible_academy"
);

$result = mysqli_query(
$conn,
"SELECT * FROM contact ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>
<title>Contact Messages</title>

<style>

table{
width:100%;
border-collapse:collapse;
}

th,td{
border:1px solid black;
padding:10px;
text-align:center;
}

th{
background:#222;
color:white;
}

</style>

</head>
<body>

<h1 align="center">
📩 Contact Messages
</h1>

<table>

<tr>

<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Subject</th>
<th>Message</th>

</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{

echo "<tr>

<td>".$row['id']."</td>

<td>".$row['name']."</td>

<td>".$row['email']."</td>

<td>".$row['mobile']."</td>

<td>".$row['subject']."</td>

<td>".$row['message']."</td>

</tr>";

}

?>

</table>

</body>
</html>