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
        <h1>HOME REMEDIES TO CURE DIARRHEA</h1>
        <div> 
            <center>
            <img src="images/diarrhea.jpg" alt="diarrhea">
            </center>
        </div>
        
        <h3> <ul>
                <li>Eat a BRAT Diet</li>
                <li>The BRAT diet was a commonly-recommended food plan for easing digestive distress.</li>
                <li>It is comprised of four bland, low-fiber foods that will help to firm up stools: bananas, rice, applesauce, and toast.</li>
                <li>3﻿ Bananas are especially useful as they help restore any potassium lost through diarrhea.</li>
                
                
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
