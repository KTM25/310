<?php 
session_start(); //check if its the same session
$logout = $logged_in = '';
if(isset($_SESSION['username'])){ //checks that it is the same user
    $logout = "<a href='../login/logout.php'>Logout</a>";
    $logged_in = "<a href='#' style='float: right; margin-top: -50px; width:100%; text-align:center; pointer-events: none;'>" . $_SESSION['username'] . "</a>";
}   

?>



<!Doctype HTML>
<html>
    
<head>
   
    <title>About Page</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="./about.css">

</head>

<body>
    <?php include('../header.php') ?>

        <div id="wrapper">
        
            <?php include('../navigation.php'); ?>
   
            <div id="kevin" class="col-md-6 col-lg-6" style="float: left">
                <h2 id="kev_heading">Kevin Mangus</h2>
                <p> <img id="kev_image" src="./kev.jpg" style="width:250px; height: 250px;" class="hidden-xs"/> 
                <br/>My name is Kevin and I am an Applied Computing Technology Major born and raised in San Diego California. 
                I currently live in apartment and own a Subaru WRX Hatchback (besides school and life, this car is where my money goes).
                Who am I you ask? I am a car enthusiast, drumming drummer, video game player, dog loving IT technician who also enjoys gorgeous days, being outside, and great mountain biking!
                "A ginger who likes being outside?" Yeahhh I know, I'm pretty different.
                Goals in life: To get a job that is enjoyable and be successful at it That way I can work on cars (ultimate passion) and maybe own multiple.
                </p>
            </div> 

            <div id="middle" class="col-md-6 col-lg-6" style="float: right">
                <h2 id="jake_heading"> Jake Newell </h2>
                <p><img id="jake_image" style="width:250px; height: 250px;"  src="./jake.jpg" class="hidden-xs"/>
                <br/> My Name is Jake Newell, I am a Applied Computer Technology Major. I am projected to graduate and join the real world this May 2017. I am on the CSU Track team as a Colligete Hammer thrower. My picture shows me throwing the indoor variation of the Hammer called the weight. It is 35 lbs and is much shorter than a hammer allowing for it to be thrown indoor. 
                </p>
            </div>                                                                                       
          
             <?php include('../footer.php') ?>
        </div>


</body>
</html>