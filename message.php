<?php

$conn=mysqli_connect(
"localhost",
"root",
"",
"possible_academy"
);

$result=mysqli_query(
$conn,
"SELECT * FROM contacts"
);

?>

<h2>Contact Messages</h2>

<table border="1" cellpadding="10">

<tr>
<th>Name</th>
<th>Email</th>
<th>Mobile</th>
<th>Subject</th>
<th>Message</th>
</tr>

<?php

while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['mobile']; ?></td>

<td><?php echo $row['subject']; ?></td>

<td><?php echo $row['message']; ?></td>

</tr>

<?php
}
?>

</table>