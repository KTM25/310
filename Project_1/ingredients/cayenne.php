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
   
    <title>Ingredient: Cayenne</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="./about.css">

</head>

<body>
    <?php include('../header.php') ?>

        <div id="wrapper">
        
            <?php include('../navigation.php'); ?>
   			
   				<div id="cayenne_pic" class="col-6">
   					<img src="cayenne.jpg"/>

   				</div>
   				<div id="cayenne_descpt" class="col-6">
   					<p>
   					The cayenne pepper, also known as the Guinea spice, cow-horn pepper, red hot chili pepper, aleva, bird pepper or, especially in its powdered form, red pepper, is a cultivar of Capsicum annuum, which is related to bell peppers, jalapeños, paprika, and others. The Capsicum genus is in the nightshade family (Solanaceae). It is a hot chili pepper used to flavor dishes and named for the city of Cayenne, the capital of French Guiana.
   					</p>

   				</div>
                                                                                        
          
             <?php include('../footer.php') ?>
        </div>


</body>
</html>