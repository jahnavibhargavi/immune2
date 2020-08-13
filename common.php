<?php
$con=mysqli_connect("localhost","root","","agri_at_door")or die(mysqli_error($con));
if(!isset($_SESSION['email']))
{
session_start();
}
?>
