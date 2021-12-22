<div class="row">
<div class="col-xl-12  ">
<table class="table table-responsive table-striped table-hover table-bordered ">
<tr>
<th>Needy-Name</th>
<th>E-mail</th>
<th>Address</th>
<th>Phone Number</th>
<th>City</th>
<th>Amount</th>
<th>Hospital</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "formm");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT username, email, address, rnumber,city, amount, hospital FROM needy";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo  "</td><td>" . $row["username"] . "</td><td>"
. $row["email"]. "</td><td>" . $row["address"]. "</td><td>" . $row["rnumber"]. "</td><td>" . $row["city"]. "</td><td>" . $row["amount"]. "</td><td>" . $row["hospital"]. "</td>                                               </tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
