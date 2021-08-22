<?php
$severname="localhost";
$username="root";
$password="";
$dbname="jobrecruitment";

$conn= mysqli_connect ($severname,$username,$password,$dbname);

if($conn)
{

  // echo "connection ok";
}
else{
  echo "failed to connect".mysqli_connect_error();
}

$result ="SELECT * FROM form";
echo "<table border='2'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Middlename</th>
<th>CurrentAddress</th>
<th>PermanantAddress</th>
<th>Phone</th>
<th>Email</th>
<th>CV</th>
<th>Position</th>
<th>Currentimployed</th>
<th>Startdate</th>
<th>avalability</th>
</tr>";
while($row = mysqli_fetch_array($result))
 {
 echo "<tr>";
 echo "<td>" . $row['Firstname'] . "</td>";
 echo "<td>" . $row['Lastname'] . "</td>";
 echo "<td>" . $row['Middlename'] . "</td>";
 echo "<td>" . $row['CurrentAddress'] . "</td>";
 echo "<td>" . $row['PermanantAddress'] . "</td>";
 echo "<td>" . $row['Phone'] . "</td>";
 echo "<td>" . $row['Email'] . "</td>";
 echo "<td>" . $row['CV'] . "</td>";
 echo "<td>" . $row['Position'] . "</td>";
 echo "<td>" . $row['Currentimployed'] . "</td>";
 echo "<td>" . $row['Startdate'] . "</td>";
 echo "<td>" . $row['avalability'] . "</td>";
 echo "</tr>";
 }
echo "</table>";
mysql_close($con);
?> 