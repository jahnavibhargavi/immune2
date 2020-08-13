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
        <h1>HOME REMEDIES TO REDUCE BODY PAINS</h1>
        <div> 
            <center>
            <img src="img/bodypain.jpg" alt="kills">
            </center>
        </div>
        
        <h3> <ul>
                <li>Rest the area of the body where you're experiencing aches and pains.</li>
                <li>Take an over-the-counter pain reliever, such as ibuprofen (Advil)</li>
                <li>Apply ice to the affected area to help relieve pain and reduce inflammation..</li>
                
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
