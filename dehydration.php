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
        <h1>HOME REMEDIES TO CURE DEHYDRATION</h1>
        <div> 
            <center>
            <img src="images/dehydration.jpg" alt="dehydration">
            </center>
        </div>
        
        <h3> <ul>
                <li>Dehydration must be treated by replenishing the fluid level in the body.</li>
                <li>This can be done by consuming clear fluids such as water, clear broths, frozen water or ice pops, or sports drinks (such as Gatorade).</li>
                <li>Some dehydration patients, however, will require intravenous fluids in order to rehydrate.</li>
                
                
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
