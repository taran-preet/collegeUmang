<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="bootstrapFile.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
     <!-- wow.js -->
     <link rel="stylesheet" href="css/libs/animate.css">
    <link rel="stylesheet" href="css/site.css">

</head>

<body>
    <div class="container-fluid p-0 " id="home">
    <!-- nav bar call -->
<?php require "include/navbar-call-2.php" ?>

        <div class="row">
            <div class="col-xl-12">
                <div style="height: 30px;background-color:black ;"></div>
            </div>
            <div class="col-xl-12 ">
                <div class="banner  text-center "><span class="banner-text-green "><span> Lets Come Together </span> <span class="banner-text-white "> To Create A Better World</span> </span><br>


                    <div class="container banner-long-text text-justify wow fadeIn ">We are not alone in this World. There are lots of other people who need help in their hard times, they have no hope how they will tackle this, we can help them together. Giving is not just about make a donation, its about making a
                        difference s .If you are willing to donate something to them you can <b class="text-white bold ">"Register As Donor "</b>or you want to serve with us you can <b class="text-white bold ">"Register As Volunteer ".</b> </div>
                    <!--  btn targeting towards 2 form div -->

                    <div class="col-xl-12 wow rotateInUpRight">
                        <a href="#forms" class="btn btn-success btn-lg p-3 font-weight-bold banner-register-btn mt-4 ">Register as Doner/Needy</a>
                    </div>
                </div>
            </div>


            <div class="col-xl-12">
                <div><img src="main.png " alt=" " class="img-fluid wow fadeIn img-3-combine"> </div>
            </div>
        </div>

        <!-- ABOUT SECTION -->

        <div class="row   text-center jumbotron wow fadeIn" data-wow-duration="4500ms" id="about">
            <div class="col-xl-12 text-center ">
                <p class="jumbotron-fluid bg-danger">
                    <p class="font-weight-bold head">WHO WE ARE</p>
                    <p class="head-p p-4"><strong>Umang Jeevan</strong> is an Initiative by <strong> We Do Not Accept Money or Things</strong>. The sole purpose is to act as an intermediate to unite the two ends - the underprivileged and the donor or volunteer. It's an organization
                        for the people by the people.</p>
                </p>
            </div>
            <!-- youtube video link -->
            <div class="video mt-4 offset-xl-3 col-xl-6 wow fadeIn" data-wow-duration="5000ms">
                <p class="under">WHAT IS THIS WEBSITE FOR?</p>
                <p> This site will keep a record of all the donors and volunteers so that they can be contacted immediately as and when the situation arises. </p>
                <a href="a.mp4 " target="_blank " class="btn btn-lg video-btn-color wow tada "><i class="fa fa-play " aria-hidden="true ">&nbsp;</i>Play Video</a>
            </div>
        </div>



<!-- database start         -->
        <div class="container  wow pulse" data-wow-duration="3000ms" >
<h2 class="text-center"><u style="font-family:Times New Roman;color:green; font-size:40px;">Our Needy</u></h2>
<?php  require "include/needy-fetch.php"?>
<hr>
</div>
</div>
</div>
<div class="container  wow pulse" data-wow-duration="3000ms" id="ourDoner">
<h2 class="text-center"><u style="font-family:Times New Roman;color:green;font-size:40px;">Our Doners</u></h2>
<?php  require "include/test.php"   ?>
</div>
</div>
</div>
<!-- database start end -->




<hr style="background-color:green;">

   <!-- 2 form starts -->
        <div class="row wow fadeIn" data-wow-duration="4000ms" id="forms">
            <div class="col-xl-12 text-center">
                <div class="form-target-div ">
                    <p class="text-white h1 font-weight-bold  mt-4">BE A MEMBER</p>
                    <a href="form-1.php" class="btn btn-success btn-lg p-4  font-weight-bold   register-as-donor wow tada">Register As Donor </a>
                    <a href="form-2.php" class="btn btn-success btn-lg p-4 mt-2 font-weight-bold offset-xl-1 shadow-lg register-as-donor wow tada">Register For Needy </a>
                </div>
            </div>
        </div>
<!-- fixed left icons  -->
        <div class="row">
            <div class="col-xl-12">
                <a href="https://www.facebook.com/Umang-Jeevan-102161841662642"> <img src="face.png" alt="facebook" id="fixed-icon1" class="col-sm-12"></a>
                <a href="https://www.instagram.com/p/CF2LLEWBw8-/?igshid=sl2z09xhg4kv"> <img src="instagram.png" alt="instagram" id="fixed-icon2"></a>
                <a href="https://www.youtube.com/channel/UCnfcfXLgNqSCdg6HikitDtg"> <img src="youtube.png" alt="youtube" id="fixed-icon3"></a>

            </div>
        </div>


        <div class="row">
        <!-- footer call -->
           <?php  require "include/footer.php"   ?>
        </div>


        

        


        <a id="back2Top" title="Back to top" href="#">&#10148;</a>
        <script src="jquery.js"></script>

        <script>
            $(function() {
                $(window).scroll(function() {
                    var height = $(window).scrollTop();
                    console.log(height);
                    if (height > 100) {
                        $('#back2Top').fadeIn();
                    } else {
                        $('#back2Top').fadeOut();
                    }
                });
                $(document).ready(function() {
                    $("#back2Top").click(function(event) {
                        event.preventDefault();
                        $("html, body").animate({
                            scrollTop: 0
                        }, "2000");
                        return false;
                    });
                });
            });
        </script>

</body>

<!-- wow.js start -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js "></script>
<script>
    new WOW().init();
</script>

</html>