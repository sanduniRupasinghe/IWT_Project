<?php 

include "config.php"; 

if (isset($_GET['id'])) {

    $boat_id = $_GET['id'];

    $sql = "DELETE FROM `boat` WHERE `id`='$boat_id'";

     $result = $conn->query($sql);

     if ($result == TRUE) {

        echo "Record deleted successfully.";

    }else{

        echo "Error:" . $sql . "<br>" . $conn->error;

    }

} 

?>