<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <div class="logo-div">
            <img class="logo" src="images/kingscliq.png">
        </div>
        <div class="pullright">
            <!-- <input type="text" placeholder="Search..." class="search-box"> -->
            
            <i class="fas fa-notification"></i><i class="fas fa-user"></i>
            <img src="images/Aliko_Dangote.jpg" alt="Aliko_Dangote" class="nav-profile" height="30" width="30">
            <small style="color: rgb(175, 169, 169);margin-top: 10px; margin-left: 5px;">Welcome Dangote</small>
            <input type="submit" value="Logout" id="search-btn">
        </div>
    </div>
    <div class="wrapper">
        <div class="nav">
            <section class="profile-details">
                <div class="">
                    <img class= "profile-photo" src="images/Aliko_Dangote.jpg">
                </div>
                <div class="profile-detail-name">
                    <h1 class="profile-name">Aliko Dangote</h1>
                    <small>Student Since 2010</small>

                </div>
                
            </section>
            <nav class="side-nav">
                <ul>
                    <li><a href="dashboard.php"><i class="fas fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="index.php"><i class="fas fa-user"></i> Student Profile</a></li>
                    <li><a href="fees-payment.php"><i class="fas fa-money"></i>Fees Payment</a></li>
                    <li><a href="course-reg.php">Courses</a></li>
                    <li><a href="#">CA & Examinations</a></li>
                    <li><a href="#">Help and Support</a></li>
                </ul>
            </nav>