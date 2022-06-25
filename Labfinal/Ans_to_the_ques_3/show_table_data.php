<?php 
$conn = new mysqli("localhost", "root", "", "labfinal");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT *FROM users";
$result = $conn->query($sql);

?>

<!DOCTYPE html>

<html>

<head>

    <title>View Page</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="js/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <h2>users Information</h2>

<table class="table">

    <thead>

        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Age</th>
        <th>Usrname</th>
        <th>Password</th>
        <th>Action</th>
    </tr>

    </thead>

    <tbody> 

        <?php

            if ($result->num_rows > 0) {

                while ($row = $result->fetch_assoc()) {

        ?>

                    <tr>

                    <td><?php echo $row['id']; ?></td>

                    <td><?php echo $row['name']; ?></td>

                    <td><?php echo $row['age']; ?></td>

                    <td><?php echo $row['username']; ?></td>

                    <td><?php echo $row['password']; ?></td>
                    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>

    </div> 

</body>

</html>