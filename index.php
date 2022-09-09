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
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="jquery/jquery-3.6.1.min.js"></script>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>







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




    <div class="container-fluid main-contain p-0">
        <!-- <div class="row"> -->
        <!-- <div class="col-lg-3 col-md-3 col-12 p-0 firstcol"> -->
        <div class="whole navside">
            <div class="navbar navbar-expand-md" id="navbar-example2">
                <a class="navbar-brand text-center" href="#">Gautam Kumar</a>
                <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="toggler-icon top-bar"></span>
                    <span class="toggler-icon middle-bar"></span>
                    <span class="toggler-icon bottom-bar"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- <div class="sidebar"> -->
                    <img src="img/profile_photo.jpeg" alt="" class="img-responsive my-img">
                    <a href="#home" class="active main-margina alinkfont smooth-scroll">Home</a>
                    <a href="#about" class="alinkfont smooth-scroll">About Me</a>
                    <a href="#services" class="alinkfont smooth-scroll">What I Do</a>
                    <a href="#resume" class="alinkfont smooth-scroll">Resume</a>
                    <a href="#portfolio" class="alinkfont smooth-scroll">Portfolio</a>
                    <a href="#testimonial" class="alinkfont smooth-scroll">Testimonial</a>
                    <a href="#contact" class="alinkfont smooth-scroll">Contact</a>
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
        <!-- </div> -->

        <!-- <div class="col-lg-9 col-md-9 col-12 p-0 secondcol"> -->
        <div class="content">
            <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-offset="0" class="scrollspy-example"
                tabindex="0">

                <div id="home" class="page-section">
                    <div class="hero-bg">
                        <div class="inner-content">
                            <div class="inn-content p-4">
                                <img src="img/profile_photo.jpeg" alt="" class="img-responsive my-img-down">
                                <p class="hey_there">Hey There,</p>
                                <p class="iamgautam">I'm a <span class="auto-type"></span></p>

                                <script>
                                var typed = new Typed(".auto-type", {
                                    strings: ["Coder.", "Programmer.", "Developer."],
                                    typeSpeed: 150,
                                    backSpeed: 150,
                                    loop: true
                                })
                                </script>

                                <p class="iamfullpara">I,m a full stack developer with a passion for everything
                                    front-end.
                                    Welcome
                                    to my corner of the internet. I,m glad you're here!</p>
                                <button class="resumebtn"><a onclick="openTab(this)" href="#"
                                        name="PDF/codewithgautamresume.pdf">Check out
                                        my CV</a></button>
                                <script type="text/javascript">
                                function openTab(th) {
                                    window.open(th.name, '_blank');
                                }
                                </script>
                            </div>
                            <a href="#about" class="scroll-down-arrow text-white smooth-scroll"><span
                                    class="animated"><i class="fa fa-chevron-down"></i></span></a>
                        </div>
                    </div>
                </div>

                <div id="about" class="page-section">
                    <div class="about-section mt-4">
                        <div class="about-header">
                            <p class="backabout">About Me</p>
                            <p class="knowmemore">Know Me More</p>
                            <span class="header-separator"></span>
                        </div>
                        <div class="container my-description">
                            <div class="row gx-5 services-section-row">
                                <div class="col-lg-7 col-xl-8 mobile-text-center">
                                    <h2 class="aweb">I'm <span>Gautam Kumar</span>, a Web Developer</h2><br>
                                    <p class="description-para">I help you build brand for your business at an
                                        affordable
                                        price.
                                        Thousands of clients have procured exceptional results while working with our
                                        dedicated
                                        team. when an unknown printer took a galley of type and scrambled it to make a
                                        type
                                        specimen book.</p>
                                    <p class="description-para">Delivering work within time and budget which meets
                                        client’s
                                        requirements is our moto. Lorem Ipsum has been the industry's standard dummy
                                        text
                                        ever
                                        when an unknown printer took a galley.</p>
                                </div>
                                <div class="col-lg-5 col-xl-4 p-4">
                                    <p class="myname"><label for="">Name: &nbsp;</label> Gautam Kumar</p>
                                    <p class="myname myemail"><label for="">Email: &nbsp;</label> chat@codewithgautam.in
                                    </p>
                                    <p class="myname"><label for="">Age: &nbsp;</label> 19</p>
                                    <p class="myname border-0"><label for="">From: &nbsp;</label> Darbhanga, Bihar</p>
                                    <button class="download-cv"><a onclick="openTab(this)" href=""
                                            name="PDF/codewithgautamresume.pdf">Download CV</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="services" class="page-section">
                    <div class="services-section bg-light">
                        <div class="about-header">
                            <p class="backabout">Services</p>
                            <p class="knowmemore">What I Do?</p>
                            <span class="header-separator"></span>
                        </div>
                        <div class="container services-section-contain">
                            <div class="row gx-5 services-section-row">
                                <div class="col-lg-6 col-12 pe-0">
                                    <div class="icon-des">
                                        <i class="fa-solid fa-palette"></i>
                                        <div class="icon-des-content">
                                            <h5>Graphic Design</h5>
                                            <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea
                                                essent
                                                possim iriure.</p>
                                        </div>
                                    </div>
                                    <div class="icon-des">
                                        <i class="fa-solid fa-pen-ruler"></i>
                                        <div class="icon-des-content">
                                            <h5>UI/UX Design</h5>
                                            <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea
                                                essent
                                                possim iriure.</p>
                                        </div>
                                    </div>
                                    <div class="icon-des">
                                        <i class="fa-solid fa-chart-area"></i>
                                        <div class="icon-des-content">
                                            <h5>Business Analysis</h5>
                                            <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea
                                                essent
                                                possim iriure.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="icon-des">
                                        <i class="fa-solid fa-desktop"></i>
                                        <div class="icon-des-content">
                                            <h5>Web Design</h5>
                                            <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea
                                                essent
                                                possim iriure.</p>
                                        </div>
                                    </div>
                                    <div class="icon-des">
                                        <i class="fa-solid fa-paintbrush"></i>
                                        <div class="icon-des-content">
                                            <h5>App Design & Develop</h5>
                                            <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea
                                                essent
                                                possim iriure.</p>
                                        </div>
                                    </div>
                                    <div class="icon-des">
                                        <i class="fa-solid fa-bullhorn"></i>
                                        <div class="icon-des-content">
                                            <h5>SEO Marketing</h5>
                                            <p>Lisque persius interesset his et, in quot quidam persequeris vim, ad mea
                                                essent
                                                possim iriure.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="resume" class="page-section">
                    <div class="resume-section">
                        <div class="about-header">
                            <p class="backabout">Summary</p>
                            <p class="knowmemore">Resume</p>
                            <span class="header-separator"></span>
                        </div>

                        <div class="container progress-bar-sec p-0">
                            <div class="progress-bar-row row gx-5 ps-4">
                                <div class="col-sm-12 col-md-12 col-lg-6 col-12">
                                    <div class="progress-content">
                                        <p class="progress-topic">Web Design</p>
                                        <p class="progress-percentage">85%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:85%">
                                                <span class="sr-only">85% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-content">
                                        <p class="progress-topic">HTML/CSS Design</p>
                                        <p class="progress-percentage">95%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:95%">
                                                <span class="sr-only">95% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-content">
                                        <p class="progress-topic">JavaScript</p>
                                        <p class="progress-percentage">60%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-6 col-12">
                                    <div class="progress-content">
                                        <p class="progress-topic">PHP</p>
                                        <p class="progress-percentage">75%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:75%">
                                                <span class="sr-only">75% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-content">
                                        <p class="progress-topic">Angular JS</p>
                                        <p class="progress-percentage">60%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:60%">
                                                <span class="sr-only">60% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-content">
                                        <p class="progress-topic">Bootstrap</p>
                                        <p class="progress-percentage">90%</p>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" aria-valuenow="70"
                                                aria-valuemin="0" aria-valuemax="100" style="width:90%">
                                                <span class="sr-only">90% Complete</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="download_resume"><a onclick="openTab(this)" href=""
                                    name="PDF/codewithgautamresume.pdf">Download CV <i
                                        class="fas fa-download"></a></i></button>
                        </div>

                    </div>
                </div>
                <div id="portfolio" class="page-section">
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                    <h1>Fifth id</h1>
                </div>
                <div id="testimonial" class="page-section">
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                    <h1>Sixth id</h1>
                </div>
                <div id="contact" class="page-section">
                    <div class="contact-section bg-light">
                        <div class="about-header">
                            <p class="backabout">Contact</p>
                            <p class="knowmemore">Get in Touch</p>
                            <span class="header-separator"></span>
                        </div>

                        <div class="container contact-contain-section p-4">
                            <div class="row contact-row">
                                <div class="col-12 col-lg-3 contact-col1">
                                    <div class="address">
                                        <h4>Address</h4>
                                        <p class="address-line">Neem Chowk Banglagardh, Darbhanga,<br> Bihar 846004.</p>
                                        <br>
                                        <p class="address-number"><i class="fas fa-phone"></i>&nbsp;&nbsp;(+91)
                                            971&nbsp;132&nbsp;9779</p>

                                        <p class="address-number"><i class="fas fa-fax"></i>&nbsp;&nbsp;(+91)
                                            971&nbsp;132&nbsp;9779</p>
                                        <p class="address-number"><i
                                                class="fas fa-envelope"></i>&nbsp;&nbsp;chat@codewithgautam.in
                                        </p>
                                        <h4 class="follow-me">Follow Me</h4>
                                        <div class="follow-me-icon">
                                            <a href="#"><i class="fab fa-github"></i></a>
                                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fa-solid fa-envelope"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-9 contact-col2">
                                    <form action="">
                                        <p class="send_note">Send us a Note</p>
                                        <div class="row">
                                            <div class="col-12 col-lg-6">
                                                <input class="form-control" type="text" name="name" id=""
                                                    placeholder="Name">
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <input class="form-control" type="email" name="email" id=""
                                                    placeholder="Email">
                                            </div>
                                        </div>
                                        <textarea class="form-control" name="tell" id="" cols="30" rows="5"
                                            placeholder="Tell us more about yourself........."></textarea>
                                        <input type="button" class="send_msg_button" value="Send message">
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="footer">
                        <div class="container">
                            <p class="copyright_para">Copyright © 2022 Simone. All Rights Reserved.</p>
                            <p class="term_policy">Terms & Policy &nbsp;|&nbsp; Disclaimer</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <script type="text/javascript">
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    </script>


    <!-- /* Code for changing active 
link on clicking */ -->
    <script>
    var btns =
        $("#navbarSupportedContent .alinkfont");

    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click",
            function() {
                var current = document
                    .getElementsByClassName("active");

                current[0].className = current[0]
                    .className.replace(" active", "");

                this.className += " active";
            });
    }

    /* Code for changing active 
    link on Scrolling */
    $(window).scroll(function() {
        var distance = $(window).scrollTop();
        $('.page-section').each(function(i) {

            if ($(this).position().top <=
                distance + 250) {

                $('.navbar-collapse a.active')
                    .removeClass('active');

                $('.navbar-collapse a').eq(i)
                    .addClass('active');
            }
        });
    }).scroll();
    </script>



</body>

</html>