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
      include 'headerp.php';
      ?>
        <br><br><br>
        <div> 
            <center>
            <img src="images/kills.jpg" alt="kills">
            </center>
        </div>
        <h1>KILLS THE MALIGNANT CELLS</h1>
        <h3> <ul>
                <li>Malignant cells are none other than cancer cells</li>
                <li>Immune cells eliminate tiny tumours</li>
                <li>In the very early stages of cancer our immune cells do a good job of killing individual malignant cells as they arise.</li>
                <li>This is known as the 'eliminating phase', where immune cells are in control of the tumour and calmly carry out their work.</li>
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
