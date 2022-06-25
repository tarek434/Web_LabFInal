<?php
$servername='localhost';
$username='root';
$password='';
 $conn=new mysqli($servername,$username, $password);
 if($conn->connect_error){
          echo $conn->connect_error;
 }
    $sql= "CREATE DATABASE labfinal";
   if ($conn->query($sql)==TRUE){
    echo "DB Created";

   }else{
          echo $conn->connect_error;
   }
 $conn->close();
?>
