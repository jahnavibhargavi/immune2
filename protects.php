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
            <img src="images/protects.jpg" alt="protects">
            </center>
        </div>
        <h1>PROTECTS US FROM BACTERIA</h1>
        <h3> <ul>
                <li>The body reacts to disease-causing bacteria by increasing local blood flow (inflammation) and sending in cells from the immune system to attack and destroy the bacteria.</li>
                <li>Antibodies produced by the immune system attach to the bacteria and help in their destruction</li>
            </ul>
            </h3>
        <br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
