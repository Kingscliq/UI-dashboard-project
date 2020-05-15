<?php include 'header.php'?> 
<?php require 'controllers/login-process.php'?> 
    <div class="header">
        <div class="logo-div">
            <img class="logo" src="images/kingscliq.png">
        </div>
        <div class="pullright">
            <!-- <input type="text" placeholder="Search..." class="search-box"> -->
            
            <i class="fas fa-notification"></i><i class="fas fa-user"></i>
            <a href="" class="login">Login |</a><a href="signup" class="login">SignUp</a>
        </div>
    </div>
    <div class="login-form">
        <form action="login.php" class="form-div">
            <h2 class="login-header">Login</h2>
        <div class="form-group">
                <label for="Username">Username or Email</label>
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="login-btn">
            </div>
            <p class="login-link">Not yet a Member? <a href="signup.html">SignUp</a></p>
        </form>

</div>
    
</body>
</html>