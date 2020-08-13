<?php
require "common.php";
 if (isset($_SESSION['email'])) { 
    header('location:index.php');
    }
?>

<html>
    <head>
        <link  rel="stylesheet" type="text/css" href="newcss.css" >
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>IMMUNE</title>
     </head>
    <body>
      <?php
      include 'headerq.php';
      ?>
        <br><br><br>
        <h1>HOME REMEDIES TO REDUCE FEVER</h1>
        <div> 
            <center>
            <img src="img/fever.jpg" alt="kills">
            </center>
        </div>
        
        <h3> <ul>
                <li>Sit in a bath of lukewarm water, which will feel cool when you have a fever.</li>
                <li>Give yourself a sponge bath with lukewarm water.</li>
                <li>Try to avoid using too many extra blankets when you have chills.</li>
                <li>Drink plenty of cool or room-temperature water.</li>
                
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>


