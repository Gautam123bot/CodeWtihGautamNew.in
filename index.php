<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gautam Kumar | My Portfolio</title>
    <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
    <!-- <script src="js/bootstrap.bundle.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="js/bootstrap.js"></script> -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="laptopmode.css">
    <link rel="stylesheet" href="tabletmode.css">
    <link rel="stylesheet" href="mobilemode.css">
    <script src="app.js"></script>
    <link rel="icon" type="image/x-icon" href="img/profile_photo.jpeg">
    <script src="https://kit.fontawesome.com/b90099deb6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- <div class="sidebar">
        <img src="img/profile_photo.jpeg" alt="" class="img-responsive my-img">
        <a class="active" href="#home">Home</a>
        <a href="#news">About Me</a>
        <a href="#">What I Do</a>
        <a href="#">Resume</a>
        <a href="#">Portfolio</a>
        <a href="#about">Testimonial</a>
        <a href="#contact">Contact</a>
    </div> -->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-12 p-0 navside">
                <div class="navbar navbar-expand-md">
                    <a class="navbar-brand text-center" href="#">Gautam Kumar</a>
                    <button class="navbar-toggler bg-danger" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- <div class="sidebar"> -->
                        <img src="img/profile_photo.jpeg" alt="" class="img-responsive my-img">
                        <a class="active main-margina alinkfont" href="#home">Home</a>
                        <a href="#news" class="alinkfont">About Me</a>
                        <a href="#" class="alinkfont">What I Do</a>
                        <a href="#" class="alinkfont">Resume</a>
                        <a href="#" class="alinkfont">Portfolio</a>
                        <a href="#about" class="alinkfont">Testimonial</a>
                        <a href="#contact" class="alinkfont">Contact</a>
                        <!-- </div> -->
                    </div>
                </div>
                <div class="social-contact">
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Facebook"><i
                            class="fa-brands fa-facebook-f facebooki"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Twitter"><i
                            class="fa-brands fa-twitter twitteri"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Instagram"><i
                            class="fa-brands fa-instagram instagrami"></i></a>
                    <a href="#" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="GitHub"><i
                            class="fa-brands fa-github githubi"></i></a>
                </div>
            </div>

            <div class="col-lg-10 col-md-10 col-12 p-0 content-column">
                <div class="content">
                    <h2>Responsive Sidebar Example</h2>
                    <p>This example use media queries to transform the sidebar to a top navigation bar when the screen
                        size
                        is 700px
                        or less.</p>
                    <p>We have also added a media query for screens that are 400px or less, which will vertically stack
                        and
                        center
                        the navigation links.</p>
                    <h3>Resize the browser window to see the effect.</h3>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>

</body>

</html>