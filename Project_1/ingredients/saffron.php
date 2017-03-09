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
   
    <title>Ingredient: Saffron</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="./about.css">

</head>

<body>
    <?php include('../header.php') ?>

        <div id="wrapper">
        
            <?php include('../navigation.php'); ?>
   			
   				<div id="saffron_pic" class="col-6">
   					<img src="saffron.jpg"/>

   				</div>
   				<div id="saffron_descpt" class="col-6">
   					<p>
   					Saffron (pronounced /ˈsæfrən/ or /ˈsæfrɒn/) is a spice derived from the flower of Crocus sativus, commonly known as the "saffron crocus". Saffron crocus grows to 20–30 cm (8–12 in) and bears up to four flowers, each with three vivid crimson stigmas, which are the distal end of a carpel. The styles and stigmas, called threads, are collected and dried to be used mainly as a seasoning and colouring agent in food. Saffron, long among the world's most costly spices by weight, is native to Southwest Asia and was probably first cultivated in or near Greece. As a genetically monomorphic clone, it was slowly propagated throughout much of Eurasia and was later brought to parts of North Africa, North America, and Oceania.
   					</p>

   				</div>
                                                                                        
          
             <?php include('../footer.php') ?>
        </div>


</body>
</html>