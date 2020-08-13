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
            <img src="images/corona.jpg" alt="corona">
            </center>
        </div>
        <h1>CORONA VIRUS</h1>
        <h3> <ul>
                <li>  One out of every six people who gets COVID-19 can become seriously ill and develop difficulty in breathing.</li>
                <li>In more severe cases, infection can cause severe pneumonia and other complications which can be treated only at higher level facilities (District Hospitals and above).</li>
                <li> The virus can cause a range of symptoms, ranging from mild illness to pneumonia.</li>
                <li>Symptoms of the disease are fever, cough, sore throat and headaches.</li>
                <li>In severe cases difficulty in breathing and deaths can occur.</li>
                

            </ul>
            </h3>
        <br><br><br>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>
