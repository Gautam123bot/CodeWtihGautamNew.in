<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signup/style.css">
    <link rel="stylesheet" href="signup/laptopmode.css">
    <link rel="stylesheet" href="signup/tabletmode.css">
    <link rel="stylesheet" href="signup/mobilemode.css">
    <script src="signup/app.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="signup/jquery/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/b90099deb6.js" crossorigin="anonymous"></script>
</head>

<body>

    <?php   
    
    include 'conn.php';

    if(isset($_POST['submit'])){
        $name = mysqli_real_escape_string($conn, $_POST['name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        $emailquery = " select * from registration where email='$email' ";
        $query = mysqli_query($conn, $emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0){
            // echo "email already exists";
            ?>
            <script>
                alert("Email already exists");
            </script>
            <?php
        }
        else{
            if($password === $cpassword){
                $insertquery = "insert into registration(name, email, mobile, password, cpassword) values('$name', '$email', '$mobile', '$pass', '$cpass')";

                $iquery = mysqli_query($conn, $insertquery);

                if($iquery){
                    ?>
                    <script>
                        alert("Connection Successfully");
                    </script>
                    <?php
                }
                else{
                    ?>
                    <script>
                        alert("No connection");
                    </script>
                    <?php
                }
            }
            else{
                ?>
                    <script>
                        alert("Password are not matching");
                    </script>
                    <?php
            }
        }

    }

    ?>





    <div class="container-fluid top-contain">
        <div class="row">
            <div class="col-sm-12 col-12 col-lg-4 first-col">
                <div class="">
                    <h2>Welcome Back</h2>
                    <p>Sign up and discover a great experience with us</p>
                    <a href="login.php"><input type="submit" value="Sign in" class="signin-btn"></a>
                </div>
            </div>
            <div class="col-sm-12 col-12 col-lg-8 second-col">
                <h1>Create Account</h1>
                <div class="input-icon">
                    <div class="iconn"><i class="fa-brands fa-google-plus-g"></i></div>
                    <div class="iconn"><i class="fa-brands fa-facebook-f"></i></div>
                    <div class="iconn"><i class="fa-brands fa-twitter"></i></div>
                </div>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <hr>
                    <span class="orlogin">OR</span>
                    <p>use your email for registration</p>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="name" class="form-control" placeholder="Full name" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" name="email" class="form-control" placeholder="Email address">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" name="mobile" class="form-control" placeholder="Phone number" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-unlock-keyhole"></i></span>
                        <input type="password" name="password" class="form-control" placeholder="Create password" required>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text"><i class="fa-solid fa-unlock-keyhole"></i></span>
                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm password" required>
                    </div>
                    <input type="submit" name="submit" value="Sign Up" class="signup-btn">
                </form>
            </div>
        </div>
    </div>
</body>

</html>