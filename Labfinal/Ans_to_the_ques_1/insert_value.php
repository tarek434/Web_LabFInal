<?php
$servername='localhost';
$username='root';
$password='';
$dbname='labfinal';
 $conn=new mysqli($servername,$username, $password,$dbname);
 if($conn->connect_error){
          echo $conn->connect_error;
 }
  $sql="INSERT INTO users (id, name, age, username, password) VALUES('191152489', 'Tarek', 23, 'khan', 'TarekKhan'),('74215898','Mahfujur', 32,'Sir','Mahfujur'),('54546956','Ahsan',25,'Nobel','AhsanHabiB')";
 if( $conn->query($sql)==TRUE)
 {
    echo "Inserted";
 }
 else
 {
    echo $conn->connect_error;
 }
 $conn->close();
?>
