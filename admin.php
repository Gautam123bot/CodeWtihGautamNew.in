<?php

session_start();

if(!isset($_SESSION['name'])){
    ?>
    <script>
        alert("You are logged out");
    </script>
    <?php
    header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="admin_panel/style.css">
    <link rel="stylesheet" href="admin_panel/laptopmode.css">
    <link rel="stylesheet" href="admin_panel/tabletmode.css">
    <link rel="stylesheet" href="admin_panel/mobilemode.css">
    <link rel="stylesheet" href="admin_panel/laptop1024pxless.css">
    <script src="admin_panel/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="admin_panel/jquery/jquery-3.6.1.min.js"></script>
    <script src="https://kit.fontawesome.com/b90099deb6.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container-fluid p-0">
        <div class="wrapper" style="max-width: 100%;">
            <div class="toggle-button btn">
                <span class="fas fa-bars toggler-icon"></span>
            </div>
            <nav class="sidebar bg-primary">
                <ul class="main_side multi-work-ul m-0">
                    <div class="text">
                        <div class="image-upload">
                            <label for="file-input">
                                <img src="admin_panel/img/profile-img.png" alt="" class="img-responsive">
                                <div id="display-image"></div>
                            </label>
                            <input type="file" id="file-input" accept="image/jpeg, image/png, image/jpg">
                            <p class="profile-name">Abc&nbsp;&nbsp;<i class="fa-solid fa-angle-right"></i></p>
                        </div>
                        <style>
                        #display-image {
                            width: 56px;
                            height: 56px;
                            /* border: 1px solid black; */
                            background-position: center;
                            background-size: cover;
                            position: absolute;
                            border-radius: 50%;
                            top: 15px;
                            left: 27px;
                        }

                        .profile-name {
                            display: inline-block;
                        }

                        .image-upload>input {
                            display: none;
                        }

                        .image-upload img {
                            width: 80px;
                            cursor: pointer;
                        }
                        </style>
                        <script>
                        const image_input = document.querySelector("#file-input");
                        image_input.addEventListener("change", function() {
                            const reader = new FileReader();
                            reader.addEventListener("load", () => {
                                const uploaded_image = reader.result;
                                document.querySelector("#display-image").style.backgroundImage =
                                    `url(${uploaded_image})`;
                            });
                            reader.readAsDataURL(this.files[0]);
                        });
                        </script>
                    </div>
                    <li class="active1"><a href="admin.php"><i class="fas fa-fw fa-tachometer-alt"></i>&nbsp;&nbsp;Admin</a>
                    </li>
                    <li><a href="display.php"><i class="fa-solid fa-display"></i>&nbsp;&nbsp;Display Data</a>
                    </li>
                    
                    <!-- <li><a href="#"><i class="fas fa-fw fa-tachometer-alt"></i>&nbsp;&nbsp;Items</a>
                    </li>
                    <li>
                        <a href="#" id="1"><i class="fas fa-fw fa-folder"></i>&nbsp;&nbsp;Sale
                            <span class="span-down fa-solid fa-angle-right"></span>
                        </a>
                        <ul class="item-show-1 multi-work-ul">
                            <li><a href="#" class="pt-2">Sale Invoices</a></li>
                            <li><a href="#" class="pb-2">Estimate/ Quotation</a></li>
                            <li><a href="#" class="pb-2">Payment In</a></li>
                            <li><a href="#" class="pb-2">Sale Order</a></li>
                            <li><a href="#" class="pb-2">Delivery Challan</a></li>
                            <li><a href="#" class="pb-2">Sale Return/ Cr.Note</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="2"><i class="fa-sharp fa-solid fa-user-tie"></i>&nbsp;&nbsp;Purchase
                            <span class="span-down fa-solid fa-angle-right"></span>
                        </a>
                        <ul class="item-show-2 multi-work-ul">
                            <li><a href="#" class="pt-2">Purchase Bills</a></li>
                            <li><a href="#" class="pb-2">Payment Out</a></li>
                            <li><a href="#" class="pb-2">Payment Order</a></li>
                            <li><a href="#" class="pb-2">Purchase Return/ Dr. Note</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa-solid fa-users"></i>&nbsp;&nbsp;Expenses</a></li>
                    <li>
                        <a href="#" id="3"><i class="fas fa-fw fa-table"></i>&nbsp;&nbsp;Cash & Bank
                            <span class="span-down fa-solid fa-angle-right"></span>
                        </a>
                        <ul class="item-show-3 multi-work-ul">
                            <li><a href="#" class="pt-2">Bank Accounts</a></li>
                            <li><a href="#" class="pt-2">Cash In Hand</a></li>
                            <li><a href="#" class="pb-2">Cheques</a></li>
                            <li><a href="#" class="pb-2">Loan Accounts</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fas fa-fw fa-chart-area"></i>&nbsp;&nbsp;My Online Store</a></li>
                    <li class="mb-3"><a href="#"><i class="fa-solid fa-file-pen"></i>&nbsp;&nbsp;Reports</a></li>


                    <li class="pt-3"><a href="#"><i class="fa-solid fa-file-pen"></i>&nbsp;&nbsp;Other Products</a></li>
                    <li><a href="#"><i class="fa-solid fa-file-pen"></i>&nbsp;&nbsp;Sync</a></li>
                    <li>
                        <a href="#" id="4"><i class="fas fa-fw fa-table"></i>&nbsp;&nbsp;Backup/Restore
                            <span class="span-down fa-solid fa-angle-right"></span>
                        </a>
                        <ul class="item-show-4 multi-work-ul">
                            <li><a href="#" class="pt-2">Auto Backup</a></li>
                            <li><a href="#" class="pt-2">Backup To Computer</a></li>
                            <li><a href="#" class="pb-2">Backup to Drive</a></li>
                            <li><a href="#" class="pb-2">Restore Backup</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" id="5"><i class="fas fa-fw fa-table"></i>&nbsp;&nbsp;Utilities
                            <span class="span-down fa-solid fa-angle-right"></span>
                        </a>
                        <ul class="item-show-5 multi-work-ul">
                            <li><a href="#" class="pt-2">Generate Barcode</a></li>
                            <li><a href="#" class="pt-2">Import Items</a></li>
                            <li><a href="#" class="pb-2">Bulk Update Items</a></li>
                            <li><a href="#" class="pb-2">Import Parties</a></li>
                            <li><a href="#" class="pb-2">Export To Tally</a></li>
                            <li><a href="#" class="pb-2">Export Items</a></li>
                            <li><a href="#" class="pb-2">Verify My Data</a></li>
                            <li><a href="#" class="pb-2">Recycle Bin</a></li>
                            <li><a href="#" class="pb-2">Close Financial Year</a></li>
                        </ul>
                    </li>
                    <li class="mb-3"><a href="#"><i class="fa-solid fa-file-pen"></i>&nbsp;&nbsp;Settings</a></li>


                    <li class="pt-3"><a href="#"><i class="fa-solid fa-file-pen"></i>&nbsp;&nbsp;Trial Info</a></li>
                    <li><a href="#"><i class="fa-solid fa-file-pen"></i>&nbsp;&nbsp;Request A Demo</a></li>
                    <li><a href="#"><i class="fa-solid fa-file-pen"></i>&nbsp;&nbsp;Share Feedback</a></li> -->
                </ul>
            </nav>

            <div class="content">

                <div class="search-content">
                    <form action="" class="search-form">
                        <div class="input-group">
                            <input type="search" name="" id="" class="search-top-input" placeholder="Search for...">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </form>
                    <i class="fas fa-search fa-sm small-search-icon"></i>
                    <div class="side-item d-inline-block">
                        <ul class="navbar-nav" style="flex-direction: row;">
                            <li class="nav-item">
                                <a href="#" class="top-badge-a nav-link">
                                    <i class="fas fa-bell fa-fw" style="color: #d1d3e2;"></i>
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="top-badge-a nav-link">
                                    <i class="fas fa-envelope fa-fw" style="color: #d1d3e2;"></i>
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                            </li>
                            <div class="vr"></div>
                            <li class="nav-item dropdown no-arrow">
                                <a href="#" class="loger d-inline-block nav-link dropdown-toggle" id="userDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <p class="loger-name"><?php echo $_SESSION['name']; ?></p>
                                    <img src="admin_panel/img/undraw_profile.svg" alt="" width="30"
                                        class="img-responsive me-3">
                                </a>
                                <div class="dropdown-menu dropdown-menu-right border-0 shadow"
                                    aria-labelledby="userDropdown">
                                    <a href="#" class="dropdown-item drop-user-a"><i
                                            class="drop-user-profile fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;&nbsp;&nbsp;Profile</a>
                                    <a class="dropdown-item drop-user-a" href="#">
                                        <i
                                            class="drop-user-profile fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;&nbsp;&nbsp;
                                        Settings
                                    </a>
                                    <a class="dropdown-item drop-user-a" href="#">
                                        <i
                                            class="drop-user-profile fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;&nbsp;&nbsp;
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item drop-user-a" href="logout.php" data-toggle="modal"
                                        data-target="#logoutModal">
                                        <i
                                            class="drop-user-profile fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>&nbsp;&nbsp;&nbsp;
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- <div class="dashboard">
                    <p class="dashboard-word d-inline-block">Dashboard</p>
                    <a href="#" class="btn-primary shadow-sm generate-report-btn"><i
                            class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    <div class="four-earning-data container-fluid ps-4 pe-4">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="earning-col border-left-primary">
                                    <p class="earning-word text-primaryy">Earnings (Monthly)</p><br>
                                    <p class="earning-price">$40,000</p>
                                    <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="earning-col border-left-success">
                                    <p class="earning-word text-successs">Earnings (Annual)</p><br>
                                    <p class="earning-price">$215,000</p>
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="earning-col border-left-info">
                                    <p class="earning-word text-infoo">Tasks</p><br>
                                    <p class="earning-price">50%</p>
                                    <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="earning-col border-left-warning">
                                    <p class="earning-word text-warningg">Pending Requests</p><br>
                                    <p class="earning-price">18</p>
                                    <i class="fas fa-comments fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="graphs">
                    <php include 'linegraph.php'; ?>
                    <php include 'piegraph.php'; ?>
                </div> -->

                <style>
                h1.top-header {
                    font-family: 'Cairo', sans-serif;
                    font-size: 26px;
                    text-align: center;
                    border-bottom: 4px solid black;
                    display: block;
                    margin: 61px auto 20px auto;
                    width: 247px;
                    font-weight: bold;
                }

                * {
                    font-family: 'poppins', sans-serif;
                }

                body {
                    background-color: #c2d7ca;
                }

                tr {
                    line-height: 34px;
                }

                @media screen and (min-width: 480px) {

                    th,
                    td {
                        padding-left: 26px !important;
                        padding-right: 26px !important;
                    }
                }

                td a .vi {
                    color: #a3a3ff;
                    font-weight: bold !important;
                }
                td a .ed {
                    color: #7fff7f;
                    font-weight: bold !important;
                }
                td a .del {
                    color: #ff595b;
                    font-weight: bold !important;
                }
                

                </style>

                <div class="main-div">
                    <h1 class="top-header">Contact data of CodeWithGautam.in</h1>

                    <div class="center-div">
                        <div class="table-responsive">
                            <table class="table table-primary table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Message</th>
                                        <th colspan="3">Operation</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php
                            include 'conn.php';
                            $selectquery = " select * from gautamcontactinfo ";
                            $query = mysqli_query($conn,$selectquery);
                            // $nums = mysqli_num_rows($query);
                            // echo $nums;

                            // $res = mysqli_fetch_array($query);
                            // echo $res[1];

                            while($res = mysqli_fetch_array($query) ){
                                // echo $res['name'] . "<br>";
                            ?>

                                    <tr>
                                        <td><?php echo $res['ID']; ?></td>
                                        <td><?php echo $res['Name']; ?></td>
                                        <td><?php echo $res['Email']; ?></td>
                                        <td><?php echo $res['Message']; ?></td>

                                        <td><a href="view.php?id=<?php echo $res['ID']; ?>" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="View"><i
                                                    class="fa-solid fa-eye vi" aria-hidden="true"></i></a></td>
                                        <td><a href="update.php?id=<?php echo $res['ID']; ?>" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="Edit"><i class="fa fa-edit ed"
                                                    aria-hidden="true"></i></a></td>
                                        <td><a href="delete.php?id=<?php echo $res['ID']; ?>" data-bs-toggle="tooltip"
                                                data-bs-placement="bottom" data-bs-title="Delete"><i class="fa fa-trash del"
                                                    aria-hidden="true"></i></a></td>
                                    </tr>

                                    <?php
                            }

                        ?>




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>








            </div>
        </div>
    </div>



    <Script>
    $('.toggle-button').click(function() {
        $(this).toggleClass("click");
        $('.sidebar').toggleClass("show");
    });


    $('.sidebar .multi-work-ul li a').click(function() {
        var id = $(this).attr('id');
        $('nav .multi-work-ul li .multi-work-ul.item-show-' + id).toggleClass("show");
        $('nav .multi-work-ul li #' + id + ' span').toggleClass("rotate");

    });

    $('nav .multi-work-ul li').click(function() {
        $(this).addClass("active1").siblings().removeClass("active1");
    });


    $(document).ready(function() {
        $("button").click(function() {
            $("p").toggleClass("main");
        });
    });
    </script>

    <script src="jquery/jquery-3.6.1.min.js"></script>

    <!-- Statement to initialize tooltip code -->
    <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
    })
    </script>

</body>

</html>