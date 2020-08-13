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
            <img src="images/reduce.jpg" alt="reduce">
            </center>
        </div>
        <h1>REDUCE DISEASES BY TOXINS</h1>
        <h3> <ul>
                <li>Toxins include pollution, chemicals, fertilizers etc.,</li>
                <li>Nonliving substances such as toxins, chemicals, drugs, and foreign particles (such as a splinter) can also be antigens.</li>
                <li>The immune system recognizes and destroys, or tries to destroy, substances that contain antigens.</li>
                <li>These barriers form the first line of defense in the immune response.</li>
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
