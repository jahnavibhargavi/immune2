<?php
require "common.php";
 if (isset($_SESSION['email'])) { 
    header('location: index.php');
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
      include 'header.php';
      ?>
        <br><br>
        
        <div id="banner_image">
            <center>
                <div class="container">
                    <div id="banner_content">
                         <h1>IMMUNE</h1>
                         <p><h2>GO CRACK THE VIRUS</h2></p>
                       
                    </div>
                </div>
                <div class="container">
             <div class="items">          
                 <a href="pros.php" >            
                     <img src="img/cons.jpg" alt="customers" class="thumbnail"> 
                     <div class="caption">        
                         <a href="pros.php"><h2>PROS</h2></a>       
                         <p>Know the pros to follow it.</p> 
                     </div>           
                 </a>           
             </div>
                    <div class="items">          
                 <a href="queries.php" >            
                     <img src="img/queries.jpg" alt="customers" class="thumbnail"> 
                     <div class="caption">        
                         <a href="login_customer.php"><h2>QUERIES?</h2></a>       
                         <p>Get solved your doubts!</p> 
                     </div>           
                 </a>           
             </div>
              
                    
 
                    <div class="items">              
                 <a href="cons.php" >     
                     <img src="img/pros.jpg" alt="merchants" class="thumbnail">
                     <div class="caption">   
                         <a href="login_merchant.php"><h2>CONS</h2></a>
                         <p>Note it down to avoid.</p>    
                     </div>                
                 </a>             
             </div> 
        </div>
            </center>
        </div>
        
        <?php
        include 'footer.php';
        ?>
    </body>
</html>

