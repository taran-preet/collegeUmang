<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
table {
/* border-collapse: collapse; */
/* width: 100%; */
font-family:arial;
height: 200px;
color: black;
font-size: 25px;

}

th {
background-color: green;
color: white;

}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<div class="row">
<div class="col-xl-12">
<table class="table table-striped">
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
</table>
</div>
</body>
</html>