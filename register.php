<?php
    include('conn.php');

        if(isset($_POST['send']))
        {
         $sql = "INSERT INTO gautamcontactinfo(Name, Email, Message)
            VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["tell"]."')";

         $result = mysqli_query($conn,$sql);
         echo"<script>alert('Our Team Will Contact You Soon')</script>";
         echo"<script>window.location='index.php'</script>";
        }

    ?>