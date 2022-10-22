<?php

include 'conn.php';

$id = $_GET['id'];

$deletequery = " delete from gautamcontactinfo where id=$id ";

$query = mysqli_query($conn,$deletequery);


if($query){
    ?>
        <script>
            alert("Deleted successfully");
        </script>
        <?php
}else{
    ?>
        <script>
            alert("Not Deleted");
        </script>
        <?php
}

header('location: display.php');


?>
