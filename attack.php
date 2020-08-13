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
            <img src="images/attack.jpg" alt="attack">
            </center>
        </div>
        <h1>ATTACKS THE FOREIGN VIRUS</h1>
        <h3> <ul>
                <li>The human body makes use of antibodies to fight virus.</li>
                <li>Antibodies bind to viruses, marking them as invaders so that white blood cells can engulf and destroy them.</li>
                <li>Generally, antibodies were thought to protect on the outside of cells. TRIM21 binds to viruses on the inside of cells.</li>

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
