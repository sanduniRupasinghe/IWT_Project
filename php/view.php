<?php 

include "config.php";

$sql = "SELECT * FROM boat";

$result = $conn->query($sql);

?>


<!DOCTYPE html>
<html>
<head>
    <title>View All Boat Details Page</title>

    <!-- view page design-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

</head>

<body>

<br>

    <div class="container">
    <div className="col-lg-8 mt-2 mb-2">

    <a class="btn btn-warning" href="create.php">Create New Boat</a>
<br><br>

      <b><h3><p>All Boats Deatails List</p></h3></b>
     
  </div>
<br>

<table class="table">

    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Action</th>
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
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>

                    <td><a class="btn btn-success" href="update.php?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>

                    </tr>                       

        <?php       }

            }

        ?>                

    </tbody>

</table>
    </div> 

    

</body>

</html>