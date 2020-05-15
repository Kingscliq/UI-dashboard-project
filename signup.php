<?php require 'header.php';?>
<?php require 'controllers/db.php';?>
<?php require 'controllers/signup-process.php';?>
    
    <div class="header">
        <div class="logo-div">
            <img class="logo" src="images/kingscliq.png">
        </div>
        <div class="pullright">
            <!-- <input type="text" placeholder="Search..." class="search-box"> -->
            
            <i class="fas fa-notification"></i><i class="fas fa-user"></i>
            <a href="login.php" class="login">Login |</a><a href="signup.php" class="login">SignUp</a>
        </div>
    </div>
    <?php if(!empty($message)):?>
                <div class="container mt-5">
                    <div class="alert alert-success">
                        <?php echo $message;?>
                    </div>
                </div>
                
    <?php endif;?>
    
    <div class="signup-form">
        
       
        <form action="signup.php" class="form-div" method="POST">
            <h2 class="login-header">Create Account</h2>
        <div class="section-one">
            <div class="form-group">
                    <label for="Surname">Surname</label>
                    <input type="text" class="form-control" placeholder="Surname" name='surname' required>
            </div>
            <div class="form-group">
                    <label for="middlename">Middlename</label>
                    <input type="text" class="form-control" placeholder="Middlename" name='middlename'>
            </div>
            <div class="form-group">
                    <label for="lastname">Lastname </label>
                    <input type="text" class="form-control" placeholder="Lastname" name='lastname' required>
                </div>
            </div>
        <div class="section-two">
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" placeholder="Username" name='username' required>
                </div>
            <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" placeholder="Email" name='email' required>
                </div>
                
        </div>
        <div class="mob">
            <div class="form-group">
                    <label for="Username">Moblie No</label>
                    <input type="text" class="form-control" placeholder="e.g +234 80xxxxx" name='mobile' required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                    <select class="form-control" name='gender' required>
                        <option value="Select Gender">---Select Gender---</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    
            </div>
            <div class="form-group">
                <label for="Username">Student Type</label>
                    <select class="form-control" name='std-cate' required>
                        <option value="Select Gender">---Select Student Category---</option>
                        <option value="Corper">Corper</option>
                        <option value="Non-Corper">Non-Corper</option>
                        <option value="IT Student(SIWES)">IT Student(SIWES)</option>
                        
                    </select>
                    
            </div>
        </div>
        <div class="section-three">
            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" placeholder="Enter Password" name='pass' required>
            </div>
            <div class="form-group">
                <label for="conf-password">Confirm Password</label>
                <input class="form-control" type="password" placeholder="Confirm Password" name='cpassword' required>
            </div>
        </div>
            <div class="form-group">
                <input type="submit" value="Submit" class="login-btn" name='submit-btn'>
            </div>
            <p class="login-link">Already a Member? <a href="login.html">Login</a></p>
        </form>

</div>
    
</body>
</html>