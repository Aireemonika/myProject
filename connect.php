<?php
    $connection= mysqli_connect('localhost','root');
    mysqli_select_db($connection,"mywebsite");
   if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
   }
    $sql="INSERT INTO `login`(`Email`,`password`) values('','')";
    mysqli_query($connection,$sql);
    echo "We will contact you soon";
?>
