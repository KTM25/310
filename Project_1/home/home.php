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
		<title>Ingredients Home Page</title>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
</head>

<body>
    <?php include('../header.php') ?>

        <div id="wrapper">
        
            <?php include('../navigation.php'); ?>

                <div id="middle" class="col-md-12 col-sm-12"> 
                    <h1 style="text-align: center">Welcome!</h1>
                    <br/>
                    <div class="col-md-2"> </div>
                    <p class="col-md-8" style="margin-bottom: 15px;">
                    There is unrest in the Galactic Senate. Several thousand solar systems have declared their intentions to leave the Republic. This separatist movement, under the leadership of the mysterious Count Dooku, has made it difficult for the limited number of Jedi Knights to maintain peace and order in the galaxy. Senator Amidala, the former Queen of Naboo, is returning to the Galactic Senate to vote on the critical issue of creating an ARMY OF THE REPUBLIC to assist the overwhelmed Jedi....
                    </p>
                    <div class="col-md-2"> </div>
                    

                    <div class="col-md-4 col-sm-12" id="homeCayenne">
                        <h3>To Cayenne</h3>
                        <a href="../ingredients/cayenne.php">
                            <img src="../ingredients/cayenne.jpg" alt="photo of cayenne" id="HomeImgCayenne" height="200px" width="200px" style="border: 2px solid #193441"/>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-12" id="homeSaffron">
                        <h3>To Saffron</h3>
                        <a href="../ingredients/saffron.php">
                            <img src="../ingredients/saffron.JPG" alt="photo of saffron" id="HomeImgSaffron" height="200px" width="200px" style="border: 2px solid #193441"/>
                        </a>
                    </div>

                    <div class="col-md-4 col-sm-12" id="homeSpearmint">
                        <h3>To Spearmint</h3>
                         <a href="../ingredients/spearmint.php">
                            <img src="../ingredients/spearmint.jpg" alt="photo of spearment" id="HomeImgSpearmint" height="200px" width="200px" style="border: 2px solid #193441"/>
                        </a>
                    </div>

                </div>
          
             <?php include('../footer.php') ?>
        </div>


</body>
</html>
