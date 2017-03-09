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
   
    <title>Ingredient: Spearmint</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <link rel="stylesheet" href="./about.css">

</head>

<body>
    <?php include('../header.php') ?>

        <div id="wrapper">
        
            <?php include('../navigation.php'); ?>
   			
   				<div id="spearmint_pic" class="col-6">
   					<img src="spearmint.jpg"/>

   				</div>
   				<div id="saffron_descpt" class="col-6">
   					<p>
   					Spearmint, or spear mint (Mentha spicata) (also known as Mentha viridis) is a species of mint native to much of Europe and Asia (Middle East, Himalayas, China etc.), and naturalized in parts of northern and western Africa, North America, and South America, as well as various oceanic islands.
   					</p>

   				</div>
                                                                                        
          
             <?php include('../footer.php') ?>
        </div>


</body>
</html>