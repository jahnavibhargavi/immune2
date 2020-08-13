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
        <h1>HOME REMEDIES TO REDUCE STOMACH PAIN</h1>
        <div> 
            <center>
            <img src="img/stomachpain.jpg" alt="kills">
            </center>
        </div>
        
        <h3> <ul>
                <li>Drinking water</li>
                <li>Avoiding lying down.</li>
                <li>Taking a warm bath or using a heating bag. </li>
                <li>Avoiding smoking and drinking alcohol.</li>
                <li>Avoiding difficult-to-digest foods.</li>
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>


