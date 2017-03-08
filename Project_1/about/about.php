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
   
                <h2 id="kev_heading">Kevin Mangus</h2>
                
                         
            
                <p> <img id="kev_image" style="width:250px; height: 250px; float: left"  src="./kev.jpg"/> &nbsp My name is Kevin and I am an Applied Computing Technology Major born and raised in San Diego California. 
                                                                                                            <br/> &nbsp I currently live in an apartment and own a Subaru WRX Hatchback (besides school and life, this car is where my money goes).
                                                                                                            <br/> &nbsp Who am I you ask? I am a car enthusiast, drumming drummer, video game player, dog loving, IT technician who also enjoys gorgeous days, being outside, and great mountain biking!
                                                                                                            <br/> &nbsp "A ginger who likes being outside?" Yeahhh I know, I'm pretty different.
                                                                                                            <br/> &nbsp Goals in life: To get a job that is enjoyable and be successful at it That way I can work on cars (ultimate passion) and maybe own multiple.
                                                                                                        
          
             <?php include('../footer.php') ?>
        </div>


</body>
</html>