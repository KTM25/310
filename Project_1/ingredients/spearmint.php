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

	<link rel="stylesheet" href="../home/style.css">

</head>

<body>
    <?php include('../header.php') ?>

        <div id="wrapper">
        
            <?php include('../navigation.php'); ?>
   				<h1 style="margin-left: 5%;"> Spearmint </h1>
   				<div id="spearmint_pic" class="col-sm-4 col-md-4 col-lg-4">
   					<img style="height: 256px; width: 256px;" src="spearmint.jpg"/>

   				</div>
   				<div id="saffron_descpt" class="col-sm-8 col-md-8 col-lg-8">
   					<p>
   					Spearmint, or spear mint (Mentha spicata) (also known as Mentha viridis) is a species of mint native to much of Europe and Asia (Middle East, Himalayas, China etc.), and naturalized in parts of northern and western Africa, North America, and South America, as well as various oceanic islands.
   					</p>
<?php if(isset($_SESSION['username'])) 
{
echo ("<textarea rows=\"10\" cols=\"50\" name=\"comment\" form=\"usrform\">Enter comment here...</textarea>");
}
else
{
echo ("<a href='../login/login.php'>Add Comment</a>");
}
?>
   				</div>
                                                                                        
          
             <?php include('../footer.php') ?>
        </div>


</body>
</html>
