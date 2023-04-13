<?php
    $connection= mysqli_connect('localhost','root');
    mysqli_select_db($connection,"mywebsite");
   if(isset($_POST['contact'])){
    $name=($_POST['name']);
    $email=($_POST['email']);
    $phone=($_POST['phone']);
    $subject=($_POST['subject']);
    $message=$_POST['message'];
   }
    $sql="INSERT INTO `contact`(`name`,`email`,`phone`,`subject`,`message`) values('','','','','')";
    mysqli_query($connection,$sql);
    echo "We will contact you soon";
?>
