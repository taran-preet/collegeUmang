<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrapFile.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
        background: #54b436;
        padding: 100px;
        font-size: 26px;
        font-family: sans-serif;
    }
    
    div {
        background: green;
        height: 10px;
        width: 100%;
        margin: 30px;
        animation: blink 1s linear infinite;
    }
    
    @keyframes blink {
        10% {
            background: black;
        }
    }
    
    @media (max-width: 575.98px) {
        div {
            background: green;
            height: 10px;
            margin: 10px;
            animation: blink 1s linear infinite;
        }
    }
    
</style>

<body>
    <div></div>


    <?php
$username = $_POST['username'];
$email = $_POST['email'];
$useraddress = $_POST['useraddress'];
$usernumber = $_POST['usernumber'];
$usercity = $_POST['usercity'];
$amount = $_POST['amount'];
$adhar = $_POST['adhar'];
if (!empty($username) || !empty($email) || !empty($useraddress) || !empty($usernumber) || !empty($usercity) || !empty($amount) || !empty($adhar)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "form";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From doner Where email = ? Limit 1";
     $INSERT = "INSERT Into doner (username, email, useraddress, usernumber, usercity, amount, adhar) values(?, ?, ?, ?, ?, ?,?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssisii", $username, $email, $useraddress, $usernumber, $usercity, $amount, $adhar);
      $stmt->execute();
      echo "New record inserted sucessfully";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>

<div></div>
 <a href="mainfile.php" class="btn btn-success shadow-lg ">Visit Homepage</a>
</body>

</html>