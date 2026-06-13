<?php

$conn=mysqli_connect(
"localhost",
"root",
"",
"possible_academy"
);

$result=mysqli_query(
$conn,
"SELECT * FROM students"
);

?>

<h2>Student Registrations</h2>

<table border="1" cellpadding="10">

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
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['course']; ?></td>

</tr>

<?php
}
?>

</table>