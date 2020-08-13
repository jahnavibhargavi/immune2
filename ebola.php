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
      include 'headerc.php';
      ?>
        <br><br><br>
        <div> 
            <center>
            <img src="images/ebola.jpg" alt="ebola">
            </center>
        </div>
        <h1>EBOLA VIRUS</h1>
        <h3> <ul>
                <li>Ebola is a rare but deadly virus that causes fever, body aches, and diarrhea, and sometimes bleeding inside and outside the body.</li>
                <li>As the virus spreads through the body, it damages the immune system and organs.</li>
                <li>Ultimately, it causes levels of blood-clotting cells to drop.</li>
                <li>This leads to severe, uncontrollable bleeding.</li>
                
                
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
