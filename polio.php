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
            <img src="images/polio.jpg" alt="polio">
            </center>
        </div>
        <h1>POLIO VIRUS</h1>
        <h3> <ul>
                <li>Polio is a viral disease which may affect the spinal cord causing muscle weakness and paralysis.</li>
                <li>The polio virus enters the body through the mouth, usually from hands contaminated with the stool of an infected person.</li>
                <li>Polio is more common in infants and young children and occurs under conditions of poor hygiene.</li>
                
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
