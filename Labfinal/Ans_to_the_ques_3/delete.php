<?php 
$conn = new mysqli("localhost", "root", "", "labfinal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['id'])) {

    $user_id = $_GET['id'];

    $sql = "DELETE FROM users WHERE id='$user_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>