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
        <h1>HOME REMEDIES TO REDUCE COUGH</h1>
        <div> 
            <center>
            <img src="img/cough.jpg" alt="kills">
            </center>
        </div>
        
        <h3> <ul>
                <li>Honey tea. Share on Pinterest A popular home remedy for coughs is mixing honey with warm water.</li>
                <li>Ginger. Ginger may ease a dry or asthmatic cough, as it has anti-inflammatory properties.</li>
                <li>Sip warm tea or soup.</li>
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
