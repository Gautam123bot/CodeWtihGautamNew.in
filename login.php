<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login/style.css">
    <link rel="stylesheet" href="login/laptopmode.css">
    <link rel="stylesheet" href="login/tabletmode.css">
    <link rel="stylesheet" href="login/mobilemode.css">
    <script src="login/app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="login/jquery/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/b90099deb6.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php

    include 'conn.php';
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $email_search = " select * from registration where email='$email' ";
        $query = mysqli_query($conn,$email_search);

        $email_count = mysqli_num_rows($query);

        if($email_count){
            $email_pass = mysqli_fetch_assoc($query);

            $db_pass = $email_pass['password'];

            $_SESSION['name'] = $email_pass['name'];    // this is used to display username in admin panel above logout(see in admin.php)

            $pass_decode = password_verify($password, $db_pass);
            
            if($pass_decode){
                ?>
                <script>
                    alert("login successful");
                    location.replace("admin.php");
                </script>
                <?php
            }
            else{
                ?>
                <script>
                    alert("password incorrect");
                </script>
                <?php
            }

        }
        else{
            ?>
            <script>
                alert("Invalid Email");
            </script>
            <?php
        }
    } 
    
    
    ?>






    <div class="container-fluid top-contain">
        <div class="row">
            <div class="col-sm-12 col-12 col-lg-8 second-col">
                <h1>Login to Your Account</h1>
                <p>Login using social networks</p>
                <div class="input-icon">
                    <div class="iconn"><i class="fa-brands fa-google-plus-g"></i></div>
                    <div class="iconn"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="iconn"><i class="fa-brands fa-twitter"></i></div>
                </div>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <hr>
                    <span class="orlogin">OR</span>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" class="form-control" placeholder="Email" name="email">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-unlock-keyhole"></i></span>
                        <input type="password" class="form-control" placeholder="Password" name="password">
                    </div>
                    <input type="submit" value="Login" class="signup-btn" name="submit">
                </form>
            </div>
            <div class="col-sm-12 col-12 col-lg-4 first-col">
                <div class="">
                    <h2>New Here?</h2>
                    <p>To keep connected with us please login with your personal info</p>
                    <a href="signup.php"><input type="submit" name="submit" value="Sign Up" class="signin-btn"></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>