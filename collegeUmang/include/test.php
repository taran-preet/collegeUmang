
<div class="row">
<div class="col-xl-12">
<table class="table table-responsive table-hover table-bordered  table-striped">
<tr>

<th>Doner-Name</th>
<th>E-mail</th>
<th>Address</th>
<th>Phone Number</th>
<th>City</th>
<th>Amount</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "form");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, email, useraddress, usernumber,usercity, amount FROM doner";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo  "</td><td>" . $row["username"] . "</td><td>"
. $row["email"]. "</td><td>" . $row["useraddress"]. "</td><td>" . $row["usernumber"]. "</td><td>" . $row["usercity"]. "</td><td>" . $row["amount"]. "</td>                                               </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
