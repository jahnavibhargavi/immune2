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
            <img src="images/hiv.jpg" alt="hiv">
            </center>
        </div>
        <h1>HUMAN IMMUNODEFICIENCY VIRUS</h1>
        <h3> <ul>
                <li> Once the human immunodeficiency virus (HIV) enters your body, it launches a direct attack on your immune system.</li>
                <li> As the virus replicates, it damages or destroys the infected CD4+ cell </li>
                <li>And produces more virus to infect more CD4+ cells.</li>
                
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
