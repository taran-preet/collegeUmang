<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        body {
            padding: 0px;
            margin: 0px;
            background-color: black;
        }
        
        .img {
            background-image: url("form-image.png");
            height: 520px;
            background-size: cover;
        }
        
        input[type=email],
        [type=text],
        [type=password],
        [type=tel] {
            background-color: black;
            height: 44px;
            font-size: 22px;
        }
        
         ::placeholder {
            color: gray !important;
            font-size: 19px;
        }
        
        label {
            color: white;
            font-size: 20px;
            font-weight: bold;
        }
        
        #inputCity option {
            background-color: black;
            color: white;
        }
        
        p {
            font-size: 40px;
            text-decoration: underline;
        }
        
        @media (max-width: 575.98px) {
            .img {
                background-image: url("form-image.png");
                height: 760px;
                background-size: cover;
            }
        }
    </style>
</head>

<body>


    <br><br>
    <div class="img container-fluid w3-animate-zoom ">


        <p class="text-center text-white font-weight-bolder text-success">FOR NEEDY</p><br>
        <form action="insert.php" method="POST">
            <div class="form-row ">
                <div class="form-group col-xl-6 col-md-6">
                    <label for="inputname ">Name</label>
                    <input type="text " class="form-control " id="inputname " placeholder="name " name="username" required>
                </div>
                <div class="form-group col-xl-6 col-md-6">
                    <label for="inputemail ">Email</label>
                    <input type="email " class="form-control " id="inputemail " placeholder="email " name="email" required>
                </div>


                <div class="form-group col-xl-6 col-md-6">
                    <label for="inputAddress ">Address</label>
                    <input type="text " class="form-control " id="inputAddress " placeholder="Address " name="address" required>
                </div>
                <div class="form-group col-xl-6 col-md-6">
                    <label for="inputnumber ">Phone Number</label>
                    <input type="tel " class="form-control " id="inputnumber " placeholder="enter phone number " name="rnumber" required>
                </div>

                <div class="form-group col-xl-6 col-md-6">
                    <label for="inputCity ">City</label>
                    <select id="inputCity " class="form-control " name="city" required>
                    <option   selected>Ludhiana</option>
              <option  value="Patiala" >Patiala</option>
              <option  value="Jalandhar" >Jalandhar</option>
              <option  value="Ambala" >Ambala</option>
              <option  value="Bathida" >Bathida</option>
            </select>
                </div>


                <div class="form-group col-xl-6 col-md-6 ">
                    <label for="inputAmount ">Amount/Seva Needed</label>
                    <input type="tel " class="form-control " placeholder="Donation-Amount/Seva " id="inputDonation " name="amount" required>
                </div>


                <div class="form-group col-xl-6 col-md-6 ">
                    <label for="inputHospital">Hospital Name</label>
                    <input type="text " class="form-control " placeholder="Hospital Name " id="inputHospital " name="hospital" required>
                </div>
                 <div class="form-group col-xl-6 ">

                    <label for="Adhar NO. ">Adhar Card NO.</label>
                    <input type="int " class="form-control " placeholder="Enter Your Adhar NO. " id="Adhar NO. " name="adhar"  required>
                </div>

            </div>

            <button type="submit " class="btn btn-success ">Sign in</button>
        </form>










    </div>




</body>

</html>